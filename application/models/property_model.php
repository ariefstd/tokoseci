<?php
class Property_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */

    public function get_all()
	{

		$this->db->select('`property`.`name` AS `name`,`customers`.`email` AS `email`,`property`.`email_address` AS `email_address`,`order_detail`.`quantity`,`order_detail`.`price`,`orders`.`date`');
		$this->db->from('customers');
		/*
		FROM
  `customers`
  INNER JOIN `orders` ON `customers`.`serial` = `orders`.`customerid`
  INNER JOIN `order_detail` ON `order_detail`.`orderid` = `orders`.`customerid`
  INNER JOIN `property` ON `property`.`serial` = `order_detail`.`productid`;
  		*/
		$this->db->join('orders', 'customers.serial = orders.customerid');
		$this->db->join('order_detail', 'order_detail.orderid = orders.customerid');
		$this->db->join('property', 'property.serial = order_detail.productid');
		
		$query = $this->db->get();
		return $query->result_array();
	}

    public function cek_order()
	{
		$this->db->group_by("email");
		$query = $this->db->get('order_discount');
		//$this->db->group_by("email");	
		return $query->result_array();
	}
	    
    public function get_product_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('property');
		$this->db->where('serial', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }

    /**
    * Fetch property data from the database
    * possibility to mix search, filter and order
    * @param int $manufacuture_id 
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_property($manufacture_id=null, $search_string=null, $order=null, $order_type='Asc', $limit_start, $limit_end)
    {
	    //$email = $this->session->userdata('email_address');
		$this->db->select('property.serial');
		$this->db->select('property.name');
		$this->db->select('property.description');
		$this->db->select('property.image_name');
		//$this->db->select('property.stock');
		//$this->db->select('property.property_price');
		//$this->db->select('property.property_address');
		$this->db->select('property.manufacture_id');
		$this->db->select('property.email_address');
		$this->db->select('manufacturers.name as manufacture_name');
		$this->db->from('property');
		//$this->db->where('email_address', $email);
		if($manufacture_id != null && $manufacture_id != 0){
			$this->db->where('manufacture_id', $manufacture_id);
		}
		if($search_string){
			$this->db->like('description', $search_string);
		}

		$this->db->join('manufacturers', 'property.manufacture_id = manufacturers.id', 'left');

		$this->db->group_by('property.serial');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('serial', $order_type);
		}


		$this->db->limit($limit_start, $limit_end);
		//$this->db->limit('4', '4');


		$query = $this->db->get();
		
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $manufacture_id
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_property($manufacture_id=null, $search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('property');
		if($manufacture_id != null && $manufacture_id != 0){
			$this->db->where('manufacture_id', $manufacture_id);
		}
		if($search_string){
			$this->db->like('description', $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('serial', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */

    /**
    * Update product
    * @param array $data - associative array with data to store
    * @return boolean
    */
	
	function save_cart($datas){
		$insert = $this->db->insert('tbl_cart', $datas);
		return $insert;		
	}
	
	function get_cart($email){
		$this->db->select('*');
		$this->db->select_sum('qty');
		$this->db->from('tbl_cart_temp');
		$this->db->where('status', 'unpaid');
		$this->db->where('email',$email);
		$this->db->group_by('name');
		$query = $this->db->get();
		return $query->result_array();		
	}
	function get_price($email){
		$this->db->select('*');
		$this->db->select_sum('price');
		$this->db->from('tbl_cart_temp');
		$this->db->where('status', 'unpaid');
		$this->db->where('email',$email);
		$query = $this->db->get();
		return $query->result_array();		
	}	
	function delete_cart_temp($id, $email_address){
		//echo $rowid;
		//$this->db->where('id', $rowid);
		//$this->db->delete('tbl_cart_temp'); 
		$this->db->where(array('serial'=>$id,'email'=>$email_address));
		$this->db->delete('tbl_cart_temp');
		//$query = $this->db->get();
		//return $query->result_array();
	}
	
	function delete_all_item($email_address){
		//echo $rowid;
		$this->db->where('email', $email_address);
		$this->db->delete('tbl_cart_temp'); 
	}
	
	function search_price($title){
		$this->db->like('name', $title , 'both');
		$this->db->order_by('name', 'ASC');
		$this->db->limit(10);
		return $this->db->get('property')->result();
	}
	
}


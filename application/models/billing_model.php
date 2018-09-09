<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {
    
     // Get all details ehich store in "products" table in database.  


public function get_all()
	{
		//$query = $this->db->get('products');		
		//$this->db->where('status', '1');
		$this->db->order_by('serial','RANDOM');
		$query = $this->db->get('property',100);
		return $query->result_array();
	}

public function get_all_latest()
	{
		//$query = $this->db->get('products');		
		$this->db->where('status', '2');
		$this->db->order_by('serial','RANDOM');
		$query = $this->db->get('property',50);
		return $query->result_array();
	}


	function get_books($num, $offset) {
	  	$this->db->where('type_id', '1');
	  	$this->db->order_by('serial');
	    $query = $this->db->get('property', $num, $offset);	
	    return $query->result_array();
	    return $query;
  	}
    
    // Insert customer details in "customer" table in database.
	public function insert_customer($data)
	{
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
        // Insert order date with customer id in "orders" table in database.
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
        // Insert ordered product detail in "order_detail" table in database.
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}

	public function insert_total_order($data)
	{
		$this->db->insert('tb_totalorder', $data);
	}	

	public function form_checkout($checkout)
	{
		$this->db->insert('tb_checkout',$checkout);
	}

	public function form_shipping($shipping)
	{
		$this->db->insert('tbl_shipping',$shipping);
	}


	public function form_billing($billing)
	{
		$this->db->insert('tbl_billing',$billing);
	}


public function get_idcatmember()
	{
		//$query = $this->db->get('products');		
		//$this->db->where('id', $cat);
		//$this->db->order_by('serial','RANDOM');
		//$query = $this->db->get('tbl_catmember');
		//return $query->result_array();
	}

	public function register_member($inserting){
		$this->db->insert('membership',$inserting);
	}

	public function save_customer($save_customer){
		$this->db->insert('tbl_savecustomer',$save_customer);
	}

	public function insert_order_discount($data)
	{
		$this->db->insert('order_discount', $data);
	}


	public function get_catmember()
	{
		//$id = $this->input->post('id');
		$query = $this->db->get('tbl_catmember');
		return $query->result_array();
	}

	public function get_country()
	{
		//$id = $this->input->post('id');
		$query = $this->db->get('tbl_countries');
		return $query->result_array();
	}

	public function product_view($id)
	{
		//$id = $this->input->post('id');
		$query = $this->db->get('property', $id);
	}

	public function view_checkout($email)
	{
		//$id = $this->input->post('id');
		$query = $this->db->get('tb_checkout', $email);
	}

	public function customer_view($email)
	{
		//$id = $this->input->post('id');
		$query = $this->db->get('tb_checkout', $email);
	}

	public function product_cart()
	{
		//$id = $this->input->post('id');
		$query = $this->db->get('property');
		return $query;
	}	

	public function getcart_view()
	{
			//$query = $this->db->get('products'); 
			//$data = array(				
				//'serial' => $id,
			//);

			//$serial;
			$this->load->view('cart_view');

		//$id = $this->input->post('id');
		//$query = $this->db->get('products', $serial);
	}

	public function getproduct_view($id_key)
	{
			//$query = $this->db->get('products'); 
			$data = array(				
				'id_key' => $id_key,
				//'name' => $name
			);

			//$serial;
			//$data['title'] = ".:: air | X ::.";
			//$this->load->view('product-details',$data);
			//$data['header'] = $this->load->view('header');
			$this->load->view('single-product', $data,1);

		//$id = $this->input->post('id');
		//$query = $this->db->get('products', $serial);
	}

	function order_menu($id)
	{
		$query 	= $this->db->query("SELECT
  *
FROM
  `property`
  INNER JOIN `manufacturers` ON `manufacturers`.`id` =
    `property`.`manufacture_id` GROUP BY
  `manufacturers`.`name`
			");

		return $query->result_array();
	}


	public function getcategory_view($id)
	{
			//$query = $this->db->get('products'); 		

		$query 	= $this->db->query("SELECT `property`.`name` as nama,
  `property`.* FROM `property` INNER JOIN `manufacturers` ON `manufacturers`.`id` = `property`.`manufacture_id` 
WHERE `manufacturers`.`id`='$id' ORDER BY RAND() LIMIT 8");
		return $query->result_array();
			/*
			$data = array(				
				'serial' => $serial,
			);

			//$serial;
			$this->load->view('category_view', $data);
			*/
		//$id = $this->input->post('id');
		//$query = $this->db->get('products', $serial);
	}


	public function get_manufacture($id)
	{
		$this->db->select('*');
		$this->db->where('manufacture_id',$id);
		$this->db->from('property');
		$this->db->join('manufacturers', 'manufacturers.id = property.manufacture_id');
		$this->db->group_by("manufacturers.name"); 		
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_category()
	{
		$this->db->select('*');
		$this->db->from('property');
		$this->db->join('manufacturers', 'manufacturers.id = property.manufacture_id');
		$this->db->group_by("manufacturers.name"); 		
		$query = $this->db->get();		
		return $query->result_array();
	}

///////////////////////////////////////////////////////////		
       
}
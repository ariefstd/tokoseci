<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//load model
			$this->load->model('billing_model');
			$this->load->model('property_model');
			$this->load->library('cart');
		}

	public function index()
		{	
			//Get all data from database
			$data['products'] = $this->billing_model->get_all();
			$data['category_view'] = $this->billing_model->get_category();				
			//send all product data to "shopping_view", which fetch from database.		
			$this->load->view('home', $data);
		}
		
		
	function add()
		{
				  // Set array for send data.
			$flag = TRUE;
			$cart = $this->cart->contents();	
			$data = $_POST;

	        $id = $data['id'];    //get new product id
	        $qty = $data['qty'];     //get quantity if that item          

	        
	        $string = $data['name'];     //get name if that item 
	        //$name = str_replace($replace,$string); 
	        $price = $data['price']; 

            foreach($cart as $item){
                if($item['id'] == $id)     //if the item we're adding is in cart add up those two quantities
                {
                    //$rowid = $item['rowid'];
                    $qty = $item['qty'] + $qty;

					$insert_datas = array(
						'id' => $id,
						'name' => $string,
						'price' => $price,
						'qty' => $qty
					);		

					// This function add items into cart.
					$this->cart->insert($insert_datas);	
					//$this->property_model->save_cart($insert_datas);
					//redirect('collection');	
                }       
            }

			if ($flag) {
				$name = $this->input->post('name');
				$newname = str_replace(array('&', '/')," ",$name); 

				$insert_data = array(
					'id' => $this->input->post('id'),
					'name' => $newname,
					'price' => $this->input->post('price'),
					'qty' => $qty
				);		

				// This function add items into cart.
				$this->cart->insert($insert_data);	
				//$this->property_model->save_cart($insert_data);				
				// This will show insert data in cart.
				//redirect('collection');
			}
			//$this->load->view('cart_view');
			//redirect('collection');
			redirect('mycart');
		 }

	function add_index()
		{
			$email = $this->session->userdata('email_address');
				  // Set array for send data.
			$flag = TRUE;
			$cart = $this->cart->contents();	
			$data = $_POST;

	        $id = $data['id'];    //get new product id
	        $qty = $data['qty'];     //get quantity if that item  
	        $name = $data['name'];     //get name if that item 
	        $price = $data['price']; 

            foreach($cart as $item){
                if($item['id'] == $id)     //if the item we're adding is in cart add up those two quantities
                {
                    //$rowid = $item['rowid'];
                    $qty = $item['qty'] + $qty;

					$insert_datas = array(
						'id' => $id,
						'name' => $name,
						'price' => $price,
						'qty' => $qty
					);		

					// This function add items into cart.
					$this->cart->insert($insert_datas);						
					//redirect('collection');	
                }       
            }

			if ($flag) {
				//$qty = $item['qty'] + $qty;
				$name = $this->input->post('name');
				$newname = str_replace(array('&', '/')," ",$name); 

				$insert_data = array(
					'id' => $this->input->post('id'),
					'name' => $newname,
					'price' => $this->input->post('price'),
					'qty' => $qty
				);		
				
				$datas=array('name'=>$name,'qty'=>'1','price'=>$this->input->post('price'),'serial'=>$this->input->post('id'),'email'=>$email);
				// This function add items into cart.
				$this->cart->insert($insert_data);
					if($this->session->userdata('is_logged_in')){
						$this->db->insert('tbl_cart_temp',$datas);
					}
				// This will show insert data in cart.
				//redirect('collection');
			}
			//$this->load->view('cart_view');
			redirect('mycart');
		 }

	function add_detail()
	{
			$email = $this->session->userdata('email_address');
				  // Set array for send data.
			$flag = TRUE;
			$cart = $this->cart->contents();	
			$data = $_POST;

	        $id = $data['id'];    //get new product id
	        $qty = $data['qty'];     //get quantity if that item  
	        $name = $data['name'];     //get name if that item 
	        $price = $data['price']; 

            foreach($cart as $item){
                if($item['id'] == $id)     //if the item we're adding is in cart add up those two quantities
                {
                    //$rowid = $item['rowid'];
                    //$qty = $item['qty'] + $qty;

					$insert_datas = array(
						'id' => $id,
						'name' => $name,
						'price' => $price,
						'qty' => $qty
					);		

					// This function add items into cart.
					$this->cart->insert($insert_datas);	
					//$this->property_model->save_cart($insert_datas);
					//redirect('collection');	
                }       
            }

			if ($flag) {

				$name = $this->input->post('name');
				$newname = str_replace(array('&', '/')," ",$name);

				$insert_data = array(
					'id' => $this->input->post('id'),
					'name' => $newname,
					'price' => $this->input->post('price'),
					'qty' => $qty
				);		
				$datas=array('name'=>$name,'qty'=>$qty,'price'=>$this->input->post('price'),'serial'=>$this->input->post('id'),'email'=>$email);
				// This function add items into cart.
				$this->cart->insert($insert_data);
					if($this->session->userdata('is_logged_in')){
						$this->db->insert('tbl_cart_temp',$datas);
					}				
				// This function add items into cart.
				//redirect('collection');
			}
			//$this->load->view('cart_view');
			//redirect('collection');
			redirect('mycart');
			//$this->load->view('cart_view');
	}
		 		
	function remove($rowid) {
						// Check rowid value.
			if ($rowid==="all"){
						   // Destroy data which store in  session.
				$this->cart->destroy();
			}else{
						// Destroy selected rowid in session.
				$data = array(
					'rowid'   => $rowid,
					'qty'     => 0
				);
						 // Update cart data, after cancle.
				$this->cart->update($data);
			}
			
					 // This will show cancle data in cart.
			redirect('mycart');
		}


	function hapus() {
		$email_address = $this->session->userdata('email_address');
			//echo $email_address;
		$this->property_model->delete_all_item($email_address);
		redirect('mycart');
		}
		
		function deletes($id) {
			//$id = $this->uri->segment(4);
			$email_address = $this->session->userdata('email_address');
			$this->property_model->delete_cart_temp($id, $email_address);
			//redirect(base_url());
			redirect('mycart');
		}
		
		function updates() {
			//$id = $this->uri->segment(4);
			$cart_info =  $_POST['cart'] ;
			//$this->property_model->update_cart_temp($rowid);
			foreach( $cart_info as $id => $cart)
			{
				$rowid = $cart['rowid'];
				$qty = $cart['qty'];
				
				$data = array(
					'rowid'   => $rowid,
					'qty'     => $qty
				);
				
				//echo $qty;
				$this->db->query("update tbl_cart_temp set qty='".$qty."' where id='".$rowid."'");
				
				//$this->db->where('id',$rowid);
				//$this->db->update('tbl_cart_temp',$data);
			}
			//redirect(base_url());
			redirect('mycart');
		}		

	function update_cart(){
					
			// Recieve post values,calcute them and update
			$cart_info =  $_POST['cart'] ;
			foreach( $cart_info as $id => $cart)
			{	
				$rowid = $cart['rowid'];
				$price = $cart['price'];
				$amount = $price * $cart['qty'];
				$qty = $cart['qty'];
						
				$data = array(
					'rowid'   => $rowid,
					'price'   => $price,
					'amount' =>  $amount,
					'qty'     => $qty
				);
				 
				$this->cart->update($data);
			}
			redirect('mycart');        
		}	

	function billing_view(){
					// Load "billing_view".
			$this->load->view('billing_view');
			}

			
	public function save_order()
		{
			  // This will store all values which inserted  from user.
			$customer = array(
				'name' 		=> $this->input->post('name'),
				'email' 	=> $this->input->post('email'),
				'address' 	=> $this->input->post('address'),
				'phone' 	=> $this->input->post('phone')
			);		
					 // And store user imformation in database.
			$cust_id = $this->billing_model->insert_customer($customer);

			$billing = array(
				'country' => $this->input->post('country'),
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'companyname' => $this->input->post('company'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zip' => $this->input->post('zip'),
				'email_address' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'email2' => $this->input->post('s_email'),
				'address2' => $this->input->post('s_address'),
				'status' => '1'
			);

			$billing_form = $this->billing_model->form_billing($billing);


			$order = array(
				'date' 			=> date('Y-m-d'),
				'customerid' 	=> $cust_id,
				'paymentid'		=> $this->input->post('paymant')
			);	
			$ord_id = $this->billing_model->insert_order($order);
			
			$ids=$this->input->post('id');
			$totalprice=$this->input->post('totalprice');
			$qtys=$this->input->post('qtys');
			//$email_address=$this->input->post('email');
			$email_address = $this->session->userdata('email_address');
			$ongkirs=$this->input->post('ongkirs');
			$totalids=sizeof($ids);
			
			//if ($cart = $this->cart->contents()):
				for($i=0;$i<$totalids;$i++){
					$id=$ids[$i];
					$subtotal=$totalprice[$i];
					$ongkir=$ongkirs[$i];
					$qty=$qtys[$i];
					// Status ordered is not paid yet, make sure customer has payment and get transfered to purchase item as well
					
						$this->db->query("insert into order_detail(orderid,productid,quantity,price,custemail) values('$ord_id','$id','$qty','$subtotal','$email_address')");
						$this->db->query("insert into tbl_statuspaid(id_item,id_ordered,ordered_email,status) values('$id','$ord_id','$email_address','unpaid')");
						$this->db->query("update tbl_cart_temp set status='ordered' where serial='$id' and email='$email_address'");
						$this->db->query("insert into tb_totalorder(id_barang,email_customer,ongkir,totalprice) values ('$id','$email_address','$ongkir','$subtotal')");
					/*
					$order_detail = array(
						'orderid' 		=> $ord_id,
						'productid' 	=> $item['id'],
						'quantity' 		=> $item['qty'],
						'price' 		=> $item['price'],					
						'custemail' 	=> $this->input->post('email')
					);
					*/
				}
					// Insert product imformation with order detail, store in cart also store in database. 					
					 //$cust_id = $this->billing_model->insert_order_detail($order_detail);
				//endforeach;
			//endif;

			//foreach($_POST['user'] as $user)
			
			/* This is the simplest things to do
			foreach ($this->input->post('totalprice') as $totalprice)
			{
				$data = array(
					'email_customer' => $this->input->post('email'),
					'totalprice' => $totalprice
				);
				$this->billing_model->insert_total_order($data);
			}
			*/

			$order_discount = array(				
				'email' 	=> $this->input->post('email'),				
				'discount' 	=> $this->input->post('disc'),
				'grand_total' 	=> $this->input->post('total'),				
				'payment' 	=> $this->input->post('pay'),
				'prod_email' 	=> $this->input->post('email2')
			);			

				// Insert product imformation with order detail, store in cart also store in database.					
				$cust_id = $this->billing_model->insert_order_discount($order_discount);
				// After storing all imformation in database load "billing_success".

/*
if($this->mailer->Send())
{
	*/
	$this->load->view('billing_success');
//}

/*

			$this->email->message($html);
            if ($this->email->send()) {
                //$data['message_display'] = 'Email Successfully Send !';
                $this->load->view('billing_success');
            } else {
                //$data['message_display'] = '<p class="error_msg">Invalid Gmail Account or Password !</p>';
                //$this->load->view('billing_success');
            }

*/
					//$this->load->view('billing_success');
					/*
					$data['products'] = $this->billing_model->get_all();
					$this->load->view('shopping_view', $data);
					*/
	}
		
	public function product_view(){
			// Load "billing_view".
			/*
			$data = array(				
				'serial' => $serial,
			);
			*/
			$this->billing_model->getproduct_view();
			//$serial;
			//$this->load->view('hasil',$data);
	}	
	
}
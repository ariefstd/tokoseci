<?php

?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Collection extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//load model
			$this->load->model('billing_model');
			$this->load->library('cart');
		}

	public function index()
		{	
			//Get all data from database
			$data['products'] = $this->billing_model->get_all();
			//send all product data to "shopping_view", which fetch from database.			
			$this->load->view('shopping_view', $data);
		}
		
		
	function add()
		{
			// Set array for send data.
			$insert_data = array(
				'serial' => $this->input->post('serial'),
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'qty' => $this->input->post('qty')
			);		

			// This function add items into cart.
			$this->cart->insert($insert_data);
			  
			// This will show insert data in cart.
			redirect('product');
		 }

	
	public function detail($serial){
			// Load "billing_view".
			/*
			$data = array(				
				'serial' => $serial,
			);
			*/


			//$this->cart->insert($insert_data);
			$this->billing_model->getproduct_view($serial);
			//$serial;
			//$this->load->view('hasil',$data);
	}
		
}
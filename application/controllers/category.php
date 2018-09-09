<?php

?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

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
			$this->load->view('category_view', $data);
		}
	public function view($id){
			// Load "billing_view".
			/*
			$data = array(				
				'serial' => $serial,
			);
			*/
			//$this->cart->insert($insert_data);
			$data['category']= $this->billing_model->getcategory_view($id);
			$data['get_manufacture'] = $this->billing_model->get_manufacture($id);
			//$catview= $this->billing_model->getcat_view($serial);			
			$this->load->view('category_view',$data);
			//$this->billing_model->getcategory_view($serial);
			//$serial;
			//$this->load->view('hasil',$data);
	}		
}
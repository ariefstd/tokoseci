<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pemodelan extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//load model
			$this->load->model('billing_model');
			$this->load->model('property_model');
			$this->load->library('cart');
		}


	public function huruf()
	{
		$kode = $this->uri->segment(2);
		//$kode="huruf";
		//$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		//if(strpos($url,'puzzle')!==false){
		//}
		//$kode = $this->uri->segment(2);
		$email = $this->session->userdata('email_address');		
		$data['carts'] = $this->property_model->get_cart($email);
		$data['totalprice'] = $this->property_model->get_price($email);
		$data['title'] = "Featured Items";
		$data['productcat']=$kode;
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();

		$email = $this->session->userdata('email_address');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'huruf/';
		$config['total_rows'] = $this->db->count_all('property');
		$config['per_page'] = '100';
		$config['use_page_number']=TRUE;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';

		$this->pagination->initialize($config);
			
		//load the model and get results
		$this->load->model('billing_model');
		$data['results'] = $this->billing_model->get_books($config['per_page'],$this->uri->segment(3));
			
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('ID', 'Title', 'Author', 'Description');
		
    // load the view
    //$this->load->view('books_view', $data);
    //$data['products'] = $this->billing_model->get_all();
                //$data['header'] = $this->load->view('header');

				
		//$data['header'] = $this->load->view('header');
		$this->load->view('add/css');
		$this->load->view('header',$data);
		$this->load->view('pemodelan',$data);
		$this->load->view('footer');
	}

	public function angka()
	{
		$kode="angka";
		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		if(strpos($url,'angka')!==false){
			$data['productcat']=$kode;
		}		
		//$kode = $this->uri->segment(2);
		$email = $this->session->userdata('email_address');		
		$data['carts'] = $this->property_model->get_cart($email);
		$data['totalprice'] = $this->property_model->get_price($email);
		$data['title'] = "Featured Items";
		$data['productcat']=$kode;
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();

		$email = $this->session->userdata('email_address');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'angka/';
		$config['total_rows'] = $this->db->count_all('property');
		$config['per_page'] = '100';
		$config['use_page_number']=TRUE;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';

		$this->pagination->initialize($config);
			
		//load the model and get results
		$this->load->model('billing_model');
		$data['results'] = $this->billing_model->get_books($config['per_page'],$this->uri->segment(3));
			
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('ID', 'Title', 'Author', 'Description');
		
    // load the view
    //$this->load->view('books_view', $data);
    //$data['products'] = $this->billing_model->get_all();
                //$data['header'] = $this->load->view('header');

				
		//$data['header'] = $this->load->view('header');
		$this->load->view('add/css');
		$this->load->view('header',$data);
		$this->load->view('pemodelan',$data);
		$this->load->view('footer');
	}
	public function pesan()
	{
		$kode="pesan";
		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		if(strpos($url,'pesan')!==false){
			$data['productcat']=$kode;
		}		
		//$kode = $this->uri->segment(2);
		$email = $this->session->userdata('email_address');		
		$data['carts'] = $this->property_model->get_cart($email);
		$data['totalprice'] = $this->property_model->get_price($email);
		$data['title'] = "Featured Items";
		$data['productcat']=$kode;
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();

		$email = $this->session->userdata('email_address');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'pesan/';
		$config['total_rows'] = $this->db->count_all('property');
		$config['per_page'] = '100';
		$config['use_page_number']=TRUE;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';

		$this->pagination->initialize($config);
			
		//load the model and get results
		$this->load->model('billing_model');
		$data['results'] = $this->billing_model->get_books($config['per_page'],$this->uri->segment(3));
			
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('ID', 'Title', 'Author', 'Description');
		
    // load the view
    //$this->load->view('books_view', $data);
    //$data['products'] = $this->billing_model->get_all();
                //$data['header'] = $this->load->view('header');

				
		//$data['header'] = $this->load->view('header');
		$this->load->view('add/css');
		$this->load->view('header',$data);
		$this->load->view('pemodelan',$data);
		$this->load->view('footer');
	}
	public function puzzle()
	{
		$kode="puzzle";
		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		if(strpos($url,'puzzle')!==false){
			$data['productcat']=$kode;
		}		
		//$kode = $this->uri->segment(2);
		$email = $this->session->userdata('email_address');		
		$data['carts'] = $this->property_model->get_cart($email);
		$data['totalprice'] = $this->property_model->get_price($email);
		$data['title'] = "Featured Items";
		$data['productcat']=$kode;
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();

		$email = $this->session->userdata('email_address');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'puzzle/';
		$config['total_rows'] = $this->db->count_all('property');
		$config['per_page'] = '100';
		$config['use_page_number']=TRUE;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';

		$this->pagination->initialize($config);
			
		//load the model and get results
		$this->load->model('billing_model');
		$data['results'] = $this->billing_model->get_books($config['per_page'],$this->uri->segment(3));
			
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('ID', 'Title', 'Author', 'Description');
		
    // load the view
    //$this->load->view('books_view', $data);
    //$data['products'] = $this->billing_model->get_all();
                //$data['header'] = $this->load->view('header');

				
		//$data['header'] = $this->load->view('header');
		$this->load->view('add/css');
		$this->load->view('header',$data);
		$this->load->view('pemodelan',$data);
		$this->load->view('footer');
	}	

	public function tradisional()
	{
		$kode="tradisional";
		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		if(strpos($url,'angka')!==false){
			$data['productcat']=$kode;
		}		
		//$kode = $this->uri->segment(2);
		$email = $this->session->userdata('email_address');		
		$data['carts'] = $this->property_model->get_cart($email);
		$data['totalprice'] = $this->property_model->get_price($email);
		$data['title'] = "Featured Items";
		$data['productcat']=$kode;
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();

		$email = $this->session->userdata('email_address');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'tradisional/';
		$config['total_rows'] = $this->db->count_all('property');
		$config['per_page'] = '100';
		$config['use_page_number']=TRUE;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';

		$this->pagination->initialize($config);
			
		//load the model and get results
		$this->load->model('billing_model');
		$data['results'] = $this->billing_model->get_books($config['per_page'],$this->uri->segment(3));
			
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('ID', 'Title', 'Author', 'Description');
		
    // load the view
    //$this->load->view('books_view', $data);
    //$data['products'] = $this->billing_model->get_all();
                //$data['header'] = $this->load->view('header');

				
		//$data['header'] = $this->load->view('header');
		$this->load->view('add/css');
		$this->load->view('header',$data);
		$this->load->view('pemodelan',$data);
		$this->load->view('footer');
	}
	public function modern()
	{
		$kode="modern";
		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		if(strpos($url,'angka')!==false){
			$data['productcat']=$kode;
		}		
		//$kode = $this->uri->segment(2);
		$email = $this->session->userdata('email_address');		
		$data['carts'] = $this->property_model->get_cart($email);
		$data['totalprice'] = $this->property_model->get_price($email);
		$data['title'] = "Featured Items";
		$data['productcat']=$kode;
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();

		$email = $this->session->userdata('email_address');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'modern/';
		$config['total_rows'] = $this->db->count_all('property');
		$config['per_page'] = '100';
		$config['use_page_number']=TRUE;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';

		$this->pagination->initialize($config);
			
		//load the model and get results
		$this->load->model('billing_model');
		$data['results'] = $this->billing_model->get_books($config['per_page'],$this->uri->segment(3));
			
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('ID', 'Title', 'Author', 'Description');
		
    // load the view
    //$this->load->view('books_view', $data);
    //$data['products'] = $this->billing_model->get_all();
                //$data['header'] = $this->load->view('header');

				
		//$data['header'] = $this->load->view('header');
		$this->load->view('add/css');
		$this->load->view('header',$data);
		$this->load->view('pemodelan',$data);
		$this->load->view('footer');
	}
	public function edukasi()
	{
		$kode="edukasi";
		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		if(strpos($url,'angka')!==false){
			$data['productcat']=$kode;
		}		
		$kode = $this->uri->segment(2);
		$email = $this->session->userdata('email_address');		
		$data['carts'] = $this->property_model->get_cart($email);
		$data['totalprice'] = $this->property_model->get_price($email);
		$data['title'] = "Featured Items";
		$data['productcat']=$kode;
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();

		$email = $this->session->userdata('email_address');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'edukasi/';
		$config['total_rows'] = $this->db->count_all('property');
		$config['per_page'] = '100';
		$config['use_page_number']=TRUE;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';

		$this->pagination->initialize($config);
			
		//load the model and get results
		$this->load->model('billing_model');
		$data['results'] = $this->billing_model->get_books($config['per_page'],$this->uri->segment(3));
			
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('ID', 'Title', 'Author', 'Description');
		
    // load the view
    //$this->load->view('books_view', $data);
    //$data['products'] = $this->billing_model->get_all();
                //$data['header'] = $this->load->view('header');

				
		//$data['header'] = $this->load->view('header');
		$this->load->view('add/css');
		$this->load->view('header',$data);
		$this->load->view('pemodelan',$data);
		$this->load->view('footer');
	}	
}
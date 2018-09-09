<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
		{
			parent::__construct();
			//load model
			$this->load->model('billing_model');
			$this->load->helper('url');
			$this->load->library('cart');
			//$this->load->library("pagination");
		}

	public function index()
	{
		$data['title'] = "Featured Items";
		$data['products'] = $this->billing_model->get_all();
		$this->load->view('home',$data);
	}
	public function collection(){
	/*
		$data['title'] = "Collection";
		$data['products'] = $this->billing_model->get_all();
            //$data['pagination'] = $this->billing_model->get_all($pagination['per_page']);
		$this->load->view('collections',$data);
	*/
    $this->load->library('pagination');
    $config['base_url'] = base_url().'index.php/welcome/collection/';
    $config['total_rows'] = $this->db->count_all('property');
    $config['per_page'] = '6';
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

		$this->load->view('collections',$data);		
	}

	public function detail(){
		$this->load->view('single-product');
	}

	public function mycart(){
		$this->load->view('my-cart');

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
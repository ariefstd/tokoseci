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
			$this->load->model('property_model');
			$this->load->helper('url');
			$this->load->library('cart');
			$this->load->library('Currency');
			$CI =& get_instance();
			//$this->load->library("pagination");
		}
	
	
	public function index()
	{
		$email = $this->session->userdata('email_address');		
		$data['carts'] = $this->property_model->get_cart($email);
		$data['totalprice'] = $this->property_model->get_price($email);
		$data['title'] = "Featured Items";
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();

		$email = $this->session->userdata('email_address');
		$this->load->library('pagination');
		$config['base_url'] = site_url().'welcome/index/';
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
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
	public function collection(){
	/*
		$data['title'] = "Collection";
		$data['products'] = $this->billing_model->get_all();
            //$data['pagination'] = $this->billing_model->get_all($pagination['per_page']);
		$this->load->view('collections',$data);
	*/

		//$this->load->view('header',$data);
		//$this->load->view('collections',$data);			
	}


	public function mycart(){
		$email = $this->session->userdata('email_address');
		//$this->load->library('Currency');
		$data['dolar'] = $this->currency->convertCurrency(1, "USD", "IDR");
		$data['carts'] = $this->property_model->get_cart($email);
		$data['prices'] = $this->property_model->get_price($email);
		$this->load->view('add/css');
		$data['header'] = $this->load->view('header',$data);
		$this->load->view('my-cart',$data);
		$this->load->view('footer');

	}

	public function registering(){
		$data['countries'] = $this->billing_model->get_country();
		$data['getmembers'] = $this->billing_model->get_catmember();
		$this->load->view('add/css');
		$this->load->view('header',$data);
		$this->load->view('create-account',$data);
		$this->load->view('footer');
		//$this->load->view('my-account',$data);
	}

	public function myaccount(){
		$email = $this->session->userdata('email_address');
		$data['prices'] = $this->property_model->get_price($email);
		$data['countries'] = $this->billing_model->get_country();
		$data['getmembers'] = $this->billing_model->get_catmember();		
		$this->load->view('header',$data);
		$this->load->view('create-account',$data);
		//$this->load->view('my-account',$data);
	}


	public function insert_register(){
		$email_address = $this->input->post('email');
		//$this->db->where('user_name', $this->input->post('username'));
		$this->db->where('email_address', $email_address);
		$query = $this->db->get('membership');
		//$query = $this->db->get('tb_checkout');

        if($query->num_rows > 0){
        	echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Email already taken";	
			echo '</strong></div>';       		
			redirect('register');
		}else{

			$inserting = array(
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'email_address' => $this->input->post('email'),			
				'user_name' => $this->input->post('email'),
				'pass_word' => md5($this->input->post('password')),
				'category' => $this->input->post('category')						
			);
			$save_customer = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')						
			);
			$shipping = array(
				'country' => $this->input->post('s_country'),
				'first_name' => $this->input->post('s_fname'),
				'last_name' => $this->input->post('s_lname'),
				'companyname' => $this->input->post('s_company'),
				'address' => $this->input->post('s_address'),
				'city' => $this->input->post('s_city'),
				'state' => $this->input->post('s_state'),
				'zip' => $this->input->post('s_zip'),
				'email_address' => $this->input->post('s_email'),
				'phone' => $this->input->post('s_phone'),
				'email2' => $this->input->post('s_email'),
				'address2' => $this->input->post('s_address')
			);
			$checkout = array(
				'country' => $this->input->post('country'),
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'companyname' => $this->input->post('company'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zip' => $this->input->post('postcode'),
				'phone' => $this->input->post('phone'),
				'email_address' => $this->input->post('email'),
				'email2' => $this->input->post('email'),
				'address2' => $this->input->post('address'),
				'status' => "1"
			);			
			
			$insert = $this->db->insert('membership', $inserting);
			$this->billing_model->save_customer($save_customer);
			$this->billing_model->form_shipping($shipping);
			$this->billing_model->form_checkout($checkout);
			redirect(base_url());

		}

	}

// for function about us

	public function aboutus(){
		$email = $this->session->userdata('email_address');
		$data['carts'] = $this->property_model->get_cart($email);
		$this->load->view('header',$data);
		$this->load->view('about-us',$data);
	}

	public function contacto(){
		$this->load->view('add/css');
		$data['header'] = $this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('footer');
	}

    public function Send_Mail() {
        
            
            // Storing submitted values
            //$sender_email = $this->input->post('user_email');
            //$user_password = $this->input->post('user_password');
            $receiver_email = $this->input->post('to_email');
            $username = $this->input->post('name');
            //$subject = $this->input->post('subject');
            $message = $this->input->post('message');
            
            // Configure email library
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = 465;
            $config['smtp_user'] = 'armandevaroe@gmail.com';
            $config['smtp_pass'] = 'gendon123456';

            // Load email library and passing configured values to email library 
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            
            // Sender email address
            $this->email->from('info@edolanan.com', $username);
            // Receiver email address
            $this->email->to($receiver_email);
            // Subject of email
            $this->email->subject('Contact Form');
            // Message in email
	
	        $receiver = $receiver_email;
		    $message = $receiver."\n".$message."\n";
		    $message .= " New line ... ";

            $this->email->message($message);

            if ($this->email->send()) {
                $data['message_display'] = 'Email Successfully Send !';
            } else {
                $data['message_display'] = '<p class="error_msg">Invalid Gmail Account or Password !</p>';
            }
            //$this->load->view('contacto', $data);
            //redirect('index');
            echo '
            	<script>
            	alert("Please check your email, thank you");
            	</script>
            ';
            redirect(site_url());
        
    }
	
	function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->property_model->search_price($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'			=> $row->name,
					'price'	=> number_format($row->price,2),
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
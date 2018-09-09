<?php
class User extends CI_Controller {
    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	

	public function __construct()
		{
			parent::__construct();
			//load model
			$this->load->model('billing_model');
			$this->load->model('menufeed_model');
			$this->load->library('cart');
		}

	function index()
	{
		if($this->session->userdata('is_logged_in')){
			//redirect('admin/products');
			redirect(base_url());
        }else{
			$this->load->view('add/css');
        	$this->load->view('admin/login');
			$this->load->view('footer');
        }
	}

		public function template()
		{
			$this->load->view('includes/template');
		}
	
		public function frontpage()
		{			
			$data['menufeed'] = $this->menufeed_model->menufeed();
		
			$this->load->view('frontpage/front_view',$data);
		}

	
	/**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return md5($password);
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{		
	    ob_start();
		$cart = $this->cart->contents();
		$this->load->model('Users_model');

		$user_name = $this->input->post('user_name');
		$email_address = $this->input->post('email_address');
		$remember = $this->input->post('remember_me');
		$password = $this->__encrip_password($this->input->post('password'));
		$name=$this->input->post('names');
		$id=$this->input->post('ids');
		$price=$this->input->post('prices');
		$qty=$this->input->post('qtys');
		
		$totalnames=sizeof($name);
		//$is_valid = $this->Users_model->validate($user_name, $password);
		$is_valid = $this->Users_model->validate($user_name, $email_address, $password);
		
		
                   
        if ($remember) {
            // Set remember me value in session  
            $this->session->set_userdata('remember_me', TRUE);
        }

		if($is_valid)
		{
			$data = array(
				'user_name' => $user_name,
				'email_address' => $email_address,
				'is_logged_in' => true
			);
					for($i=0;$i<$totalnames;$i++){
						$names=$name[$i];
						$ids=$id[$i];
						$prices=$price[$i];
						$qtys=$qty[$i];
						if(!$qtys==0){
							$this->db->query("insert into tbl_cart_temp(serial,name,price,qty,email) values('$ids','$names','$prices','$qtys','$email_address')");
						}
					}					
					
			$this->session->set_userdata($data);
			//redirect('admin/shopping');
			//redirect('admin/products');
			redirect(base_url());
			//redirect('my-account');
		}
			else // incorrect username or password
		{ ?>

		

		<?php
			//$data['message_error'] = TRUE;
			//$this->load->view('admin/login', $data);	
			redirect('administratoris');
		}
	}	

    /**
    * The method just loads the signup view
    * @return void
    */
	function signup()
	{
		$this->load->view('admin/signup_form');	
	}
	
	function shopping()
	{
			$data['products'] = $this->billing_model->get_all();
					//send all product data to "shopping_view", which fetch from database.		
			$this->load->view('shopping_view', $data);
		//$this->load->view('shopping_view');	
	}

    /**
    * Create new user and store it in the database
    * @return void
    */	
	function create_member()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/signup_form');
		}
		
		else
		{			
			$this->load->model('Users_model');
			
			if($query = $this->Users_model->create_member())
			{
				$this->load->view('admin/signup_successful');			
			}
			else
			{
				$this->load->view('admin/signup_form');			
			}
		}
		
	}
	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$email = $this->session->userdata('email_address');
			$sqlStr  = $this->db->query("SELECT * FROM membership WHERE email_address = '$email' LIMIT 1");
			foreach ($sqlStr->result() as $row){
				$fname = $row->first_name;
			}
			$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
				if(strpos($url,$fname)!==false){
					$this->session->sess_destroy();
					redirect(base_url());
				}else{
					echo "logout no exist";
				}
		//$this->session->sess_destroy();
		//redirect(base_url());
		//redirect('admin');
	}
}
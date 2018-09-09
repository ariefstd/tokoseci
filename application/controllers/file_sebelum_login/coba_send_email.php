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
	public function index()
	{

    $config['protocol'] = 'smtp';
	$config['smtp_host'] = 'smtp.gmail.com';
	$config['smtp_port'] = '465'; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.

	$config['smtp_crypto'] = 'tls';
	$config['smtp_user'] = 'pisakakris@gmail.com';
	$config['smtp_pass'] = 'adm1n1234';
	$config['charset'] = 'utf-8';
	$config['mailtype'] = 'html';
	$config['newline'] = "\r\n";
         
        //$this->email->initialize($config);

  $this->load->library('email'); 
  $this->email->from('ariefstd.2006@gmail.com', 'Sender Name');
  $this->email->to('pisakakris@gmail.com','Recipient Name');
  $this->email->subject('Your Subject');
  $this->email->message('Your Message'); 
  try{
    $this->email->send();
    echo 'Message has been sent.';
    $this->load->view('welcome_message');
  }catch(Exception $e){
    echo $e->getMessage();
  }



		//$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
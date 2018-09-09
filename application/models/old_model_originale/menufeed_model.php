<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menufeed_model extends CI_Model {

	public function __construct()
	    {
	        $this->load->database();
	    }

	public function menufeed(){

		$query = $this->db->get('tb_menufeed');
		return $query->result_array();
	}    
}

?>
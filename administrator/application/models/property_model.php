<?php
class Property_model extends CI_Model{

	function get_all_blog(){
		$result=$this->db->get('property');
		return $result;
	}

	function search_property($title){
		$this->db->like('name', $title , 'both');
		$this->db->order_by('name', 'ASC');
		$this->db->limit(10);
		return $this->db->get('property')->result();
	}

}
<?php
 class PencarianModel extends CI_Model
 {
    function __construct()
    {
        parent::__construct();
    } 
  /* Menampilkan Hasil Pencarian */
  function SearchResult($perPage,$uri,$ringkasan)
  {
	//$ringkasan = mysql_real_escape_string($_POST['ringkasan']);
   //$this->db->select('*')->from('products');
   $this->db->select('*')->from('property');

   //$this->db->from('users');
   if(!empty($ringkasan)) {
   //$ringkasan = htmlentities($this->input->post('ringkasan'));
    $this->db->like('web', $ringkasan); 
	$this->db->or_like('name', $ringkasan); 
  }
  // PUT explode here ... 
   //$this->db->order_by('id','asc');
   $this->db->order_by('id','RANDOM');
   
   $getData = $this->db->get('', $perPage, $uri);
 
   if($getData->num_rows() > 0)
    return $getData->result_array();
   else
    return null;
  }
 }

<?php
class Property extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('property_model');
		error_reporting(0);
	}

	function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->property_model->search_property($_GET['term']);
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
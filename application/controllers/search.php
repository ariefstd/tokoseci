<?php
    class Search extends CI_Controller
    {
    function __construct()
    {
        parent::__construct();
        $this->load->model('pencarianmodel');
        $this->load->library('cart');
    } 
        function index()
        {
			if(isset($_POST['submit']))
            {                
			$data['ringkasan'] = $this->input->post('ringkasan'); 
			//set session user data untuk pencarian, untuk paging pencarian
			$this->session->set_userdata('sess_ringkasan', $data['ringkasan']);
            } else {
			$data['ringkasan'] = $this->session->userdata('sess_ringkasan');
            }
			//$this->db->where('address', $data['ringkasan']);
            $this->db->like('description', htmlentities(htmlspecialchars($data['ringkasan'])));
            $this->db->from('property');
 
            //Pagination init
            $pagination['base_url']     = base_url().'search/index/page/';
            $pagination['total_rows']   = $this->db->count_all_results();
            $pagination['full_tag_open'] = "<p><div class=\"pagination\">";
            $pagination['full_tag_close'] = "</div></p>";
            $pagination['cur_tag_open'] = "<span class=\"current\">";
            $pagination['cur_tag_close'] = "</span>";
            $pagination['num_tag_open'] = "<span class=\"disabled\">";
            $pagination['num_tag_close'] = "</span>";
            $pagination['per_page']     = "10";
            // for link page
			$pagination['uri_segment'] = 4;
			$pagination['num_links']    = 4;
			$pagination['first_link'] = 'First';
			$pagination['last_link'] = 'Last';
			$pagination['use_page_numbers'] = TRUE;

 
            $this->pagination->initialize($pagination);
 
            $data['ListBerita'] = $this->pencarianmodel->SearchResult($pagination['per_page'],$this->uri->segment(4,0),$data['ringkasan']);
 
            $this->load->vars($data);
            //$this->load->view('search_result');
            $this->load->view('result_search');
        }
    }

	function home(){
		$this->load->view('welcome_message');
	}
 
    /* End of file berita.php */
    /* Location: ./system/application/controllers/berita.php */
?>

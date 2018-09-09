<?php
class Admin_products extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->model('manufacturers_model');
		$this->load->helper(array('form', 'url'));	
		$this->load->library('image_lib');

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {
	
        //all the posts sent by the view
        $manufacture_id = $this->input->post('manufacture_id');        
        $search_string = $this->input->post('search_string');        
        $order = $this->input->post('order'); 
        $order_type = $this->input->post('order_type'); 

        //pagination settings
        $config['per_page'] = 10;
        $config['base_url'] = base_url().'admin/products';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;
            $config['full_tag_open'] = "<p><div class=\"pagination\">";
            $config['full_tag_close'] = "</div></p>";
            $congif['num_tag_open'] = "<span class=\"disabled\">";
            $config['num_tag_close'] = "</span>";
            $config['cur_tag_open'] = "<span class=\"current\">";
            $config['cur_tag_close'] = "</span>";

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        } 

        //if order type was changed
        if($order_type){
            $filter_session_data['order_type'] = $order_type;
        }
        else{
            //we have something stored in the session? 
            if($this->session->userdata('order_type')){
                $order_type = $this->session->userdata('order_type');    
            }else{
                //if we have nothing inside session, so it's the default "Asc"
                $order_type = 'Asc';    
            }
        }
        //make the data type var avaible to our view
        $data['order_type_selected'] = $order_type;        


        //we must avoid a page reload with the previous session data
        //if any filter post was sent, then it's the first time we load the content
        //in this case we clean the session filter data
        //if any filter post was sent but we are in some page, we must load the session data

        //filtered && || paginated
        if($manufacture_id !== false && $search_string !== false && $order !== false || $this->uri->segment(3) == true){ 
           
            /*
            The comments here are the same for line 79 until 99

            if post is not null, we store it in session data array
            if is null, we use the session data already stored
            we save order into the the var to load the view with the param already selected       
            */

            if($manufacture_id !== 0){
                $filter_session_data['manufacture_selected'] = $manufacture_id;
            }else{
                $manufacture_id = $this->session->userdata('manufacture_selected');
            }
            $data['manufacture_selected'] = $manufacture_id;

            if($search_string){
                $filter_session_data['search_string_selected'] = $search_string;
            }else{
                $search_string = $this->session->userdata('search_string_selected');
            }
            $data['search_string_selected'] = $search_string;

            if($order){
                $filter_session_data['order'] = $order;
            }
            else{
                $order = $this->session->userdata('order');
            }
            $data['order'] = $order;

            //save session data into the session
            $this->session->set_userdata($filter_session_data);

            //fetch manufacturers data into arrays
            $data['manufactures'] = $this->manufacturers_model->get_manufacturers();

            $data['count_products']= $this->products_model->count_products($manufacture_id, $search_string, $order);
            $config['total_rows'] = $data['count_products'];

            //fetch sql data into arrays
            if($search_string){
                if($order){
                    $data['property'] = $this->products_model->get_products($manufacture_id, $search_string, $order, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['property'] = $this->products_model->get_products($manufacture_id, $search_string, '', $order_type, $config['per_page'],$limit_end);           
                }
            }else{
                if($order){
                    $data['property'] = $this->products_model->get_products($manufacture_id, '', $order, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['property'] = $this->products_model->get_products($manufacture_id, '', '', $order_type, $config['per_page'],$limit_end);        
                }
            }

        }else{

            //clean filter data inside section
            $filter_session_data['manufacture_selected'] = null;
            $filter_session_data['search_string_selected'] = null;
            $filter_session_data['order'] = null;
            $filter_session_data['order_type'] = null;
            $this->session->set_userdata($filter_session_data);

            //pre selected options
            $data['search_string_selected'] = '';
            $data['manufacture_selected'] = 0;
            $data['order'] = 'id';

            //fetch sql data into arrays
            $data['manufactures'] = $this->manufacturers_model->get_manufacturers();
            $data['count_products']= $this->products_model->count_products();
            $data['property'] = $this->products_model->get_products('', '', '', $order_type, $config['per_page'],$limit_end);        
            $config['total_rows'] = $data['count_products'];

        }//!isset($manufacture_id) && !isset($search_string) && !isset($order)

        //initializate the panination helper 
        $this->pagination->initialize($config);   

        //load the view
        $data['main_content'] = 'admin/products/list';
        $this->load->view('includes/template', $data);  

    }//index

    public function add()
    {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
            //$this->form_validation->set_rules('stock', 'stock', 'required|numeric');
            $this->form_validation->set_rules('price', 'price', 'required|numeric');
            //$this->form_validation->set_rules('property_price', 'cost_price', 'required|numeric');
            //$this->form_validation->set_rules('property_address', 'sell_price', 'required');
            $this->form_validation->set_rules('manufacture_id', 'manufacture_id', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');

				$config['upload_path'] = './upload/produk/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '1000';
				$config['max_width']  = '1200';
				$config['max_height']  = '1200';
				$config['encrypt_name'] = TRUE;
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;				

				$this->load->library('upload', $config);

				$upload_data = $this->upload->do_upload('gambar_produk'); 
				//$file_name =   $upload_data['file_name'];

				if ( ! $upload_data)
				{
					$error = array('error' => $this->upload->display_errors());
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dok = $this->upload->data();
					$foto = $dok['file_name'];
					$file_name =   $upload_data['file_name'];
					//$this->load->view('index'); => it's work to put any function here ...
					//$this->admin_products->update();

            //if the form has passed through the validation
				if ($this->form_validation->run())
				{	
					$file_name =   $upload_data['file_name'];
					//$item = $upload_data['file_name'];
					$data_to_store = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'image_name' => $foto,
						'email_address' => $this->input->post('email_address'),
						//'stock' => $this->input->post('stock'),
						//'property_price' => $this->input->post('property_price'),
						'price' => $this->input->post('price'),
						//'property_address' => $this->input->post('property_address'),          
						'manufacture_id' => $this->input->post('manufacture_id')
					);
					//if the insert has returned true then we show the flash message
					if($this->products_model->store_product($data_to_store)){
						$data['flash_message'] = TRUE; 
					}else{
						$data['flash_message'] = FALSE; 
					}
				}

			 }

		}
        //fetch manufactures data to populate the select field
        $data['manufactures'] = $this->manufacturers_model->get_manufacturers();
        //load the view
        $data['main_content'] = 'admin/products/add';
        $this->load->view('includes/template', $data);  
    }       

	/**
    * Update item by his id
    * @return void
    */
    public function update()
    {
        //product id 
        $id = $this->uri->segment(4);
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            //form validation
            $this->form_validation->set_rules('description', 'description', 'required');
            //$this->form_validation->set_rules('stock', 'stock', 'required|numeric');
           // $this->form_validation->set_rules('property_price', 'property_price', 'required|numeric');
            //$this->form_validation->set_rules('property_address', 'property_address', 'required');
            $this->form_validation->set_rules('manufacture_id', 'manufacture_id', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
    
                $data_to_store = array(
                    'description' => $this->input->post('description'),
                    //'stock' => $this->input->post('stock'),
                    //'property_price' => $this->input->post('property_price'),
                    //'property_address' => $this->input->post('property_address'),          
                    'manufacture_id' => $this->input->post('manufacture_id')
                );
                //if the insert has returned true then we show the flash message
                if($this->products_model->update_product($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/products/update/'.$id.'');

            }//validation run

        }

        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data

        //product data 
        $data['product'] = $this->products_model->get_product_by_id($id);
        //fetch manufactures data to populate the select field
        $data['manufactures'] = $this->manufacturers_model->get_manufacturers();
        //load the view
        $data['main_content'] = 'admin/products/edit';
        $this->load->view('includes/template', $data);            

    }//update

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    {
        //product id 
        $id = $this->uri->segment(4);
        $this->products_model->delete_product($id);
        redirect('admin/products');
    }//edit


	public function submit_edit_produk(){
	$id = $this->input->post('id');
	
	$this->form_validation->set_rules('description','Deskripsi', 'required|xss_clean|max_length[255]|trim|strip_tags');
	//$this->form_validation->set_rules('property_price','Property price', 'required|xss_clean|max_length[255]');
	$this->form_validation->set_rules('id_kategori','Kategori', 'required|xss_clean|trim|strip_tags');
	if($this->form_validation->run() == TRUE){ 
		   
		   $config['upload_path'] = './upload/produk/';
           $config['allowed_types'] = 'gif|jpeg|png|jpg';
           $config['max_size'] = 2000;
           $config['max_height'] = 2000;
           $config['max_width'] = 2000;
		   $config['encrypt_name'] = TRUE;
		   $this->upload->initialize($config);
		   
			if ($this->upload->do_upload('gambar_produk')) {
			//unlink gambar
			$query = $this->product_model->get_products($id)->row();						
			if ($query->file_name != "" || $query->file_name != NULL ){
				if(file_exists('./upload/produk/' . $query->file_name)) {
					$do = unlink('./upload/produk/'. $query->file_name); //menghapus gambar semula di folder
					//$do = unlink('./upload/produk/thumb/'. $query->file_name); //menghapus gambar semula di folder
				}
			} 
				$dok = $this->upload->data();
				//$this->_resize_produk($dok['file_name']);
				//$this->_create_thumb_produk($dok['file_name']);
				
			$foto = $dok['file_name'];
			
			$description = $this->input->post('description');
			//$property_price= $this->input->post('property_price');
			//$property_address= $this->input->post('property_address');
			$manufacture_id= $this->input->post('manufacture_id');

			$ganti = array("'");
			$oleh = "&#039;";
			
			//$nama_produk = str_replace($ganti, $oleh, $input_nama_produk);
			//$url_title = url_title($nama_produk);
			//$deskripsi = str_replace($ganti, $oleh, $input_deskripsi);
			
			$this->product_model->update_product($id, $description, $property_price, $foto, $manufacture_id);
			
			$this->session->set_flashdata('info', "Produk berhasil diubah, gambar diubah.");
			//redirect('admin/produk');
			}
		}
	}


}
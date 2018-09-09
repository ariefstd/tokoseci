<?php
class View_cart extends CI_Controller {

    public function __construct()
    {

        parent::__construct();
        $this->load->model('products_model');
        $this->load->model('manufacturers_model');
		$this->load->helper(array('form', 'url'));	
		$this->load->library('image_lib');
            //load model
            $this->load->model('billing_model');
            $this->load->library('cart');        
       
    }

    function index(){
        //$data['main_content'] = 'admin/products/list_view';
        $this->load->view('checkout');  
    }
    function add()
        {
                  // Set array for send data.
            $insert_data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'qty' => $this->input->post('qty')
            );      

                     // This function add items into cart.
            $this->cart->insert($insert_data);
              
                    // This will show insert data in cart.
            redirect('viewcart');
            //$this->load->view('cart_view');
         }

                
    function remove($rowid) {
                        // Check rowid value.
            if ($rowid==="all"){
                           // Destroy data which store in  session.
                $this->cart->destroy();
            }else{
                        // Destroy selected rowid in session.
                $data = array(
                    'rowid'   => $rowid,
                    'qty'     => 0
                );
                         // Update cart data, after cancle.
                $this->cart->update($data);
            }
            
                     // This will show cancle data in cart.
            redirect('viewcart');
        }
        
    function update_cart(){
                    
            // Recieve post values,calcute them and update
            $cart_info =  $_POST['cart'] ;
            foreach( $cart_info as $id => $cart)
            {   
                $rowid = $cart['rowid'];
                $price = $cart['price'];
                $amount = $price * $cart['qty'];
                $qty = $cart['qty'];
                        
                $data = array(
                    'rowid'   => $rowid,
                    'price'   => $price,
                    'amount' =>  $amount,
                    'qty'     => $qty
                );
                 
                $this->cart->update($data);
            }
            redirect('viewcart');        
        }     

            
    public function save_order()
        {
              // This will store all values which inserted  from user.
            $customer = array(
                'name'      => $this->input->post('name'),
                'email'     => $this->input->post('email'),
                'address'   => $this->input->post('address'),
                'phone'     => $this->input->post('phone')
            );      
                     // And store user imformation in database.
            $cust_id = $this->billing_model->insert_customer($customer);

            $order = array(
                'date'          => date('Y-m-d'),
                'customerid'    => $cust_id
            );      

            $ord_id = $this->billing_model->insert_order($order);
            
            if ($cart = $this->cart->contents()):
                foreach ($cart as $item):
                    $order_detail = array(
                        'orderid'       => $ord_id,
                        'productid'     => $item['id'],
                        'quantity'      => $item['qty'],
                        'price'         => $item['price']
                    );      
                    // Insert product imformation with order detail, store in cart also store in database.                  
                     $cust_id = $this->billing_model->insert_order_detail($order_detail);
                endforeach;
            endif;

            $order_discount = array(                
                'email'     => $this->input->post('email'),             
                'discount'  => $this->input->post('disc'),
                'grand_total'   => $this->input->post('total'),             
                'payment'   => $this->input->post('pay'),
                'prod_email'    => $this->input->post('email2')
            );          

                                // Insert product imformation with order detail, store in cart also store in database. 
                    
                     $cust_id = $this->billing_model->insert_order_discount($order_discount);

              
                    // After storing all imformation in database load "billing_success".
                    $this->load->view('billing_success');
                    /*
                    $data['products'] = $this->billing_model->get_all();
                    $this->load->view('shopping_view', $data);
                    */
        }

        
}
?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//load model
			$this->load->model('billing_model');
			$this->load->library('cart');
		}

	public function index()
		{	
					//Get all data from database
			$data['products'] = $this->billing_model->get_all();
			$data['category_view'] = $this->billing_model->get_category();				
					//send all product data to "shopping_view", which fetch from database.		
			$this->load->view('home', $data);
		}
		
		
	function add()
		{
				  // Set array for send data.
		$data = $_POST;
        $id = $data['id'];    //get new product id
        $qty = $data['qty'];     //get quantity if that item  
        $name = $data['name'];     //get name if that item 
        $price = $data['price'];     //get price if that item

            $exists = false;             //lets say that the new item we're adding is not in the cart
            $rowid = '';

        $cart = $this->cart->contents();

            foreach($cart as $item){
                if($item['id'] == $id)     //if the item we're adding is in cart add up those two quantities
                {
                    $exists = true;
                    //$rowid = $item['rowid'];
                    $qty = $item['qty'] + $qty;

					$insert_data = array(
						'id' => $id,
						'name' => $name,
						'price' => $price,
						'qty' => $qty
					);		

					// This function add items into cart.
					$this->cart->insert($insert_data);	
					redirect('welcome/collection');	
			
                }       
	  
			// This will show insert data in cart.
            }

            redirect('welcome/collection');
			//$this->load->view('cart_view');
		 }

	function add_index()
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
			redirect(base_url());
			//$this->load->view('cart_view');
		 }

	function add_detail()
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
			redirect('collection');
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
			redirect('mycart');
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
			redirect('mycart');        
		}	

	function billing_view(){
					// Load "billing_view".
			$this->load->view('billing_view');
			}

			
	public function save_order()
		{
			  // This will store all values which inserted  from user.
			$customer = array(
				'name' 		=> $this->input->post('name'),
				'email' 	=> $this->input->post('email'),
				'address' 	=> $this->input->post('address'),
				'phone' 	=> $this->input->post('phone')
			);		
					 // And store user imformation in database.
			$cust_id = $this->billing_model->insert_customer($customer);

			$billing = array(
				'country' => $this->input->post('country'),
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'companyname' => $this->input->post('company'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zip' => $this->input->post('zip'),
				'email_address' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'email2' => $this->input->post('s_email'),
				'address2' => $this->input->post('s_address'),
				'status' => '1'
			);

			$billing_form = $this->billing_model->form_billing($billing);


			$order = array(
				'date' 			=> date('Y-m-d'),
				'customerid' 	=> $cust_id,
				'paymentid'		=> $this->input->post('paymant')
			);		

			$ord_id = $this->billing_model->insert_order($order);
			
			if ($cart = $this->cart->contents()):
				foreach ($cart as $item):
					$order_detail = array(
						'orderid' 		=> $ord_id,
						'productid' 	=> $item['id'],
						'quantity' 		=> $item['qty'],
						'price' 		=> $item['price'],					
						'custemail' 	=> $this->input->post('email')
					);

					// Insert product imformation with order detail, store in cart also store in database. 					
					 $cust_id = $this->billing_model->insert_order_detail($order_detail);
				endforeach;
			endif;

			//foreach($_POST['user'] as $user)
			foreach ($this->input->post('totalprice') as $totalprice)
			{
				$data = array(
					'email_customer' => $this->input->post('email'),
					'totalprice' => $totalprice
				);
				$this->billing_model->insert_total_order($data);
			}

			$order_discount = array(				
				'email' 	=> $this->input->post('email'),				
				'discount' 	=> $this->input->post('disc'),
				'grand_total' 	=> $this->input->post('total'),				
				'payment' 	=> $this->input->post('pay'),
				'prod_email' 	=> $this->input->post('email2')
			);			

					// Insert product imformation with order detail, store in cart also store in database.					
					$cust_id = $this->billing_model->insert_order_discount($order_discount);
					// After storing all imformation in database load "billing_success".

$email = $this->input->post('email');
$this->load->library('mailer');
/*

            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = 465;
            $config['smtp_user'] = 'pisakakris@gmail.com';
            $config['smtp_pass'] = 'adm1n1234';
            $config['mailtype'] = 'html';

            // Load email library and passing configured values to email library 
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            
            // Sender email address
            $this->email->from($email, 'JEWEL OF EQUATOR ');
            // Receiver email address
            $this->email->to('pisakakris@gmail.com');
            $this->email->cc('ariefstd.2006@gmail.com');
            // Subject of email
            $this->email->subject('JEWEL OF EQUATOR - ENQUERY');
*/
            // Message in email
            //$this->email->message($order_detail);
            //$message = $this->input->post('message');

$this->load->library('mailer');

$this->mailer->IsSMTP(); // telling the class to use SMTP
$this->mailer->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$this->mailer->protocol   = 'mail';
$this->mailer->SMTPAuth   = true;                  // enable SMTP authentication
$this->mailer->SMTPSecure = 'tls';
$this->mailer->Host       = "smtp.gmail.com"; // sets the SMTP server
$this->mailer->Port       = 587;                    // set the SMTP port for the GMAIL server
$this->mailer->Username   = "pisakakris@gmail.com"; 	// SMTP account username
$this->mailer->Password   = "adm1n1234";  

$personal_mail = 'pisakakris@gmail.com';
$personal_name = 'Mr. Gendonz Wemz';
//$this->mailer->AddAddress($personal_mail,'Mesute',' ','Odzille');
$this->mailer->AddAddress('pisakakris@gmail.com','Gendon',' Wemz');
$this->mailer->AddCC($personal_mail, $personal_name);
$this->mailer->SetFrom($this->mailer->Username, 'Info jewelofequator');
$this->mailer->AddReplyTo($this->mailer->Username, 'Info jewelofequator');
$this->mailer->Subject='JEWEL OF EQUATOR - ENQUERY';

		//$query = $this->db->get('tb_checkout');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            //$email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $paymant = $this->input->post('paymant');

            $receiver = $this->input->post('email');

			$query 	= $this->db->query("SELECT   `property`.`web` AS `code`,
  
  `property`.`name` as `name`,
  `order_detail`.`quantity` AS `qty`,
  `order_detail`.`price` as`unitprice`,
  `property`.`image_name` as `image`
  FROM     `orders`
  INNER JOIN `order_detail` ON `orders`.`serial` = `order_detail`.`orderid`
  INNER JOIN `property` ON `property`.`serial` = `order_detail`.`productid` WHERE `order_detail`.`custemail`='$receiver'");
			//$query = $this->billing_model->customer_view($email);

			$html = "
<table border=0 cellpadding=4 style=font-family:Arial, Helvetica, sans-serif;font-size:13px;>
	<tr>
		<td colspan=3><b>Enquiry From :</b></td>
	</tr>
	<tr>
		<td width=120>Name </td>
		<td width=10>: </td>
		<td>$fname  $lname</td>
	</tr>
	<tr>
		<td>Address </td>
		<td>: </td>
		<td>$address</td>
	</tr>
	<tr>
		<td>Email </td>
		<td>: </td>
		<td>$email</td>
	</tr>
	<tr>
		<td>Phone Number </td>
		<td>: </td>
		<td>$phone</td>
	</tr>

	";
		if ($cart = $this->cart->contents()):
		endif;
		$j=0;
        $grand_total = 0;
             $i = 1;
          $qty = 0;

                    foreach ($cart as $item):

                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
		$i++;
		$name = $item['name'];
		$sub_total = $item['subtotal'];
		$grand_total = $grand_total + $item['subtotal'];
		$qty = $qty + $item['qty'];
		$total_qty =+ $item['qty'];

		//endforeach;
		endforeach;
			//}

	$html .="
	<tr>
		<td>Total Payment</td>
		<td>: </td>
		<td>$ $grand_total</td>
	</tr>

	<tr>
		<td>Payment Method </td>
		<td>: </td>";

$query3 	= $this->db->query("SELECT * FROM payment WHERE `id`='$paymant'");
foreach ($query3->result() as $bar){
	$payname = $bar->name;
$html .="
		<td>$payname</td>";
	}

$html .="
	</tr>		
	<tr>
		<td colspan=3>&nbsp;</td>
	</tr>
	<tr>
		<td colspan=3><b>Enquiry Detail</b></td>
	</tr>";

$html .="
	<tr>
		<td colspan=3>";


		$html .="
			<table border=0  cellpadding=8 cellspacing=1 width=100% style=font-family:Arial, Helvetica, sans-serif;font-size:13px;>
				<tr style=color:#464646;font-size:12px;font-weight:bold;background-color:#84d8d1;>
					<td align=center>NO</td>
					<td align=center>IMAGE</td>
					<td align=center>PRODUCT</td>
					<td align=center>CODE</td>
					<td align=center>UNIT PRICE</td>
					<td align=center>QUANTITY</td>
					<td align=center>TOTAL</td>
				</tr>";
		if ($cart = $this->cart->contents()):
		endif;
		$j=0;
        $grand_total = 0;
             $i = 1;
          $qty = 0;

                    foreach ($cart as $item){
                    	$j=$j+1;
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);

		$i++;
		$unit_price = $item['price'];
		$name = $item['name'];
		$sub_total = $item['subtotal'];
		$grand_total = $grand_total + $item['subtotal'];
		$qty = $qty + $item['qty'];
		$total_qty =+ $item['qty'];

		//$sqlStr	= $this->db->query("select * from property");
		$this->db->where('serial', $item['id']);
		$sqlStr = $this->db->get('property');
		foreach ($sqlStr->result() as $bar)
		{

		$html .= "
				<tr>
					<td align=center bgcolor=f0f0f0>$j</td>
					<td align=center bgcolor=#f0f0f0 ><img src=http://jewelofequator.com/images/$bar->image_name width=100px height=100px /></td>
					<td align=left bgcolor=#f0f0f0>$name</td>
					<td align=left bgcolor=#f0f0f0>$bar->web</td>
					<td align=right bgcolor=#f0f0f0>$ $unit_price</td>
					<td bgcolor=#f0f0f0 align=center>$total_qty</td>
					<td bgcolor=#f0f0f0 align=center>$ $sub_total</td>
				</tr>";
			}	
		}

		$html .= "		
				<tr  style=color:#464646;font-size:12px;font-weight:bold;background-color:#cacaca;>
					<td colspan=5 align=right><b>ENQUIRY SUMMARY</b> </td>";
		$html .="			
					<td align=center>$qty</td>";
		$html .="
					<td align=right>$ $grand_total</td>";
		$html .="
				</tr>	
			</table>";


$html .="
		</td>
	</tr>		
";

/*
$html .= "

	<tr>
		<td colspan=3>&nbsp;</td>
	</tr>

	<tr>
		<td colspan=3><b>Enquiry Result : </b></td>
	</tr>
	<tr>
		<td colspan=3>";
		$html .="
			<table border=0  cellpadding=8 cellspacing=1 width=100% style=font-family:Arial, Helvetica, sans-serif;font-size:13px;>
				<tr style=color:#464646;font-size:12px;font-weight:bold;background-color:#84d8d1;>
					<td align=center>NO</td>
					<td align=center>IMAGE</td>
					<td align=center>PRODUCT</td>
					<td align=center>CODE</td>
					<td align=center>UNIT PRICE</td>
					<td align=center>QUANTITY</td>
					<td align=center>TOTAL</td>
				</tr>";
				$i=0;
				foreach ($query->result() as $row){
					$i=$i+1;
					$total_price = (($row->qty) * ($row->unitprice));
					//$query2	= $this->db->query("SELECT SUM(qty) AS totalqty FROM order_detail WHERE custemail='$receiver'

		$html .= "
				<tr>
					<td align=center bgcolor=f0f0f0>$i</td>
					<td align=center bgcolor=#f0f0f0 ><img src=http://jewelofequator.com/images/$row->image width=100px height=100px /></td>
					<td align=left bgcolor=#f0f0f0>$row->name</td>
					<td align=left bgcolor=#f0f0f0>$row->code</td>
					<td align=right bgcolor=#f0f0f0>$ $row->unitprice</td>
					<td bgcolor=#f0f0f0 align=center>$row->qty</td>
					<td bgcolor=#f0f0f0 align=center>$ $total_price</td>
				</tr>";
				};    

			if ($cart = $this->cart->contents()):
                    $grand_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        //echo '<input type="text" name="cart[1][id]" value="'.$item['name'].'" />';
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);

                        $grand_total = $grand_total + $item['subtotal'];
                        endforeach;
                        endif;
        //echo $qty;
        //echo "<br>";
        //echo number_format($grand_total, 2);

		$html .= "		
				<tr  style=color:#464646;font-size:12px;font-weight:bold;background-color:#cacaca;>
					<td colspan=5 align=right><b>ENQUIRY SUMMARY</b> </td>";

			$query2	= $this->db->query("SELECT SUM(quantity) AS totalqty FROM order_detail WHERE custemail='$receiver'");
				foreach ($query2->result() as $row2){

		$html .="			
					<td align=center>$row2->totalqty</td>";
				}

			$query3	= $this->db->query("SELECT SUM(totalprice) AS total FROM tb_totalorder WHERE email_customer='$receiver'");
				foreach ($query3->result() as $row3){

		$html .="
					<td align=right>$ $row3->total</td>";
				}
				
		$html .="
				</tr>
			</table>";
				

		$html .= "
		</td>
	</tr>
*/
	
$html .= "
</table>	";

$this->mailer->MsgHTML($html);

if($this->mailer->Send())
{
	$this->load->view('billing_success');
}


/*

			$this->email->message($html);
            if ($this->email->send()) {
                //$data['message_display'] = 'Email Successfully Send !';
                $this->load->view('billing_success');
            } else {
                //$data['message_display'] = '<p class="error_msg">Invalid Gmail Account or Password !</p>';
                //$this->load->view('billing_success');
            }

*/
					//$this->load->view('billing_success');
					/*
					$data['products'] = $this->billing_model->get_all();
					$this->load->view('shopping_view', $data);
					*/
		}
		
	public function product_view(){
			// Load "billing_view".
			/*
			$data = array(				
				'serial' => $serial,
			);
			*/
			$this->billing_model->getproduct_view();
			//$serial;
			//$this->load->view('hasil',$data);
	}	
	
}
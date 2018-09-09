<?php 
$email = $this->session->userdata('email_address'); 

?>


    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
</head>

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>

<?php //$this->load->view('header') ?>

        <div class="ct-contentWrapper">

<?php if(!$this->session->userdata('is_logged_in')){ ?> 
                    <div class="col-md-8">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Belum punya akses ? <a href="../register.pl"><span class="ct-u-colorGrey">Register</span></a></h4>
                        
                        <form class="form-horizontal form-signin ct-u-paddingBottom20" method="post" action="<?php echo base_url(); ?>admin/login/validate_credentials/">
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Email: </label>
                                <div class="col-sm-10">
                                    <input type="text" name="email_address" placeholder="Email" class="form-control" id="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="pull-left ct-rememberPassword">
                                        <div class="checkbox">
                                            <input type="checkbox" id="rememberPassword" name="remember_me">
                                            <label for="rememberPassword">
                                                <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Pengingat password</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="pull-right ct-forgotPassword">
                                        <a href="#" class="ct-forgotPassword-text">Lupa password?</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10"> 
                                <?php
                                    if(isset($message_error) && $message_error){
                                        echo '<div class="alert alert-error">';
                                          echo '<a class="close" data-dismiss="alert">×</a>';
                                          echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
                                        echo '</div>';             
                                    }
                                ?>                                   
                                    <input type="submit" name="submit" value="Login" class="btn btn-large btn-default" />
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Follow Us</h4>
                        <div class="ct-u-paddingBottom20 ct-u-paddingTop30">
                            <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                  <li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                            </ul>
                        </div>
                        <div class="tweets_display">

                        </div>
                    </div>                    


<?php }else{ ?>

        <form name="billing" method="post" action="<?php echo base_url() . 'shopping/save_order' ?>">
            <div class="container">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Checkout</h4>
                <div class="row">
                    <div class="col-md-8">
                        <div class="ct-u-size16 ct-fw-600 ct-u-paddingBottom20 ct-u-paddingTop30">Billing Details</div>
						<table class="table table-striped">
						<?php
							
                           $sqlStr  = $this->db->query("SELECT *,
								  `tb_checkout`.`email_address` AS `email`,
								  `tb_checkout`.`first_name`,
								  `tb_checkout`.`last_name`
								FROM
								  `membership`
								  INNER JOIN `tb_checkout` ON `membership`.`email_address` =
									`tb_checkout`.`email_address`
								  INNER JOIN `tbl_countries` ON `tbl_countries`.`code` = `tb_checkout`.`country`
								WHERE
								  `membership`.`email_address` = '$email'");
                            foreach ($sqlStr->result() as $row){
                                $cat = $row->category;
								
                        ?>
							<tr>
                                <th>Name</th>
                                <td>
									<input type="hidden" class="form-control" name="fname" id="b_fname" value="<?php echo $row->first_name ?>">
									<input type="hidden" class="form-control" name="lname" id="b_lname" value="<?php echo $row->last_name ?>">
									<input type="hidden" class="form-control" id="firstname" name="fname" value="<?php echo $row->first_name ?>" >                                
									<input type="hidden" class="form-control" id="lastname" name="lname" value="<?php echo $row->last_name ?>" >
                                <?php echo $row->first_name." ".$row->last_name ?></td>
								</tr>
							<tr>
                                <th>Email</th>                               
                                <td>
									<input type="hidden" class="form-control" name="email" id="b_email" value="<?php echo $email ?>">                                
									<input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email ?>" >
                                <?php echo $email ?></td>                    
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>
									<input type="hidden" class="form-control" id="b_phone" name="phone" value="<?php echo $row->phone ?>">                                
									<input type="hidden" class="form-control" id="phone" name="phone" value="<?php echo $row->phone ?>" >
                                <?php echo $row->phone ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>
									<input type="hidden" class="form-control" id="address" name="address" value="<?php echo $row->address2 ?>" >
									<input type="hidden" class="form-control" id="b_address" name="address" placeholder="Street Address" value="<?php echo $row->address2 ?>" >
                                <?php echo $row->address2 ?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>
									<input type="hidden" class="form-control" id="b_city" name="city" value="<?php echo $row->city ?>">
									<input type="hidden" class="form-control" id="city" name="city" value="<?php echo $row->city ?>" >
                                <?php echo $row->city ?></td>
                            </tr>
                            <tr>
                                <th>Zip Code</th>
                                <td>
									<input type="hidden" class="form-control" id="b_zip" name="postcode" value="<?php echo $row->zip ?>">
									<input type="hidden" class="form-control" id="zip" name="zip" value="<?php echo $row->zip ?>" >
                                <?php echo $row->zip ?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>
									<input type="hidden" class="form-control" id="country" name="country" value="<?php echo $row->code ?>" >
                                <?php echo $row->name ?></td>
                            </tr> 
<tr>
                                <th>You are as</th>
                        <?php 
                            //$Sql  = $this->db->query("SELECT * FROM tbl_catmember WHERE id='$cat'");
                                $this->db->where('id', $cat);
                                $query = $this->db->get('tbl_catmember');
                                foreach ($query->result() as $getidmember){
                                $catname = $getidmember->category;
                        ?>
                                <td style="text-transform: capitalize;"><?php echo $catname ?></td>
                        <?php } ?>
                            </tr>							
                            <?php } ?>
						</table>
                        <form class="ct-u-paddingTop10" action="#">

                            <div class="ct-u-size16 ct-fw-600 ct-u-paddingTop40 ct-u-paddingBottom30">Shipping Address</div>
                            <div class="form-group ct-u-paddingBottom10">
                                <div class="checkbox ct-js-differentAddress">
                                    <input type="checkbox" id="differentAddress">
                                    <label for="differentAddress">
                                        <span class="ct-u-size16">Ship To A Different Address?</span>
                                    </label>
                                </div>
                            </div>

                            <div class="ct-differentShippingAddress is-notActive">
                            <div class="form-group">
                            <?php
                            /*
                                foreach ($cart as $item):

                                    echo form_input('cart[' . $item['id'] . '][id]', $item['id']);
                                        echo "<br>";
                                    
                                    echo form_input('cart[' . $item['id'] . '][name]', $item['name']);
                                    echo "<br>";
                                    echo form_input('cart[' . $item['id'] . '][price]', $item['price']);
                                    echo "<br>";
                                    echo form_input('cart[' . $item['id'] . '][qty]', $item['qty']);
                                    echo "<br>";
                                    */

                                ?>
                                    
                                    
                            <?php    
                                
                                //echo "<br>".$grand_total = $grand_total + $item['subtotal'];
                                // endforeach;
                            ?>    
                                <label for="country2" class="control-label">Country*</label>
                                <select class="ct-select ct-select--full" id="country2" name="">
                                    <option value="0">&nbsp;</option>
                        <?php
                            $sqlStr  = $this->db->query("SELECT * FROM tbl_countries");
                            foreach ($sqlStr->result() as $baris){
                                $cd = $baris->code;
                                $name = $baris->name;
                        ?>
                                    <option value="<?php echo $cd ?>"><?php echo $name ?></option>
                        <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="firstname" class="control-label">First Name*</label>
                                        <input type="text" class="form-control" name="s_fname" id="s_fname">
                                        <input type="hidden" class="form-control" name="" id="fname" >
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lastname" class="control-label change-label">Last Name*</label>
                                        <input type="text" class="form-control" name="s_lname" id="s_lname">
                                        <input type="hidden" class="form-control" id="lastname" name="" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="company" class="control-label">Company Name</label>
                                <input type="text" class="form-control" name="" id="company">
                            </div>
                            <div class="form-group">
                                <label for="streetaddress" class="control-label">Your Address*</label>
                                <input type="text" class="form-control" id="s_address" name="s_address">
                                <input type="hidden" class="form-control" name="" id="streetaddress" placeholder="Street Address" >
                                <div class="ct-u-paddingTop10">
                                    <input type="hidden" class="form-control" name="" placeholder="Apartment, Unit, Suite, etc." >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="control-label">Town/City*</label>
                                <input type="text" class="form-control" name="s_city" id="s_city">
                                <input type="hidden" class="form-control" name="" id="city" >
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="region" class="control-label">State*</label>
                                        <input type="text" class="form-control" name="" id="city" >
                                        <!--
                                        <select class="ct-select ct-select--full" id="region" name="address">
                                            <option value="AB">Alabama</option>
                                            <option value="AR">Arizona</option>
                                            <option value="CF">California</option>
                                            <option value="FD">Florida</option>
                                            <option value="ID">Indiana</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NY">New York</option>
                                            <option value="OH">Ohio</option>
                                            <option value="TX">Texas</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    -->
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="email" class="control-label">Email Address*</label>  
                                        <input type="email" class="form-control" name="s_email" id="s_email" >                                     
                                        <input type="hidden" class="form-control" name="" id="email" >
                                        <!--
                                        <select class="ct-select ct-select--full" id="email">
                                            <option value="firstemail">example@yahoo.com</option>
                                            <option value="secondemail">second.example@yahoo.com</option>
                                            <option value="thirdemail">third.example@yahoo.com</option>
                                        </select>
                                        -->
                                    
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="phone" class="control-label change-label">Phone*</label>
                                        <input type="text" class="form-control" name="s_phone" id="s_phone">
                                        <input type="hidden" class="form-control" name="" id="phone" >
                                    </div>
                                </div>
                            </div>

                                <div class="form-group">
                                    <label for="notes" class="control-label">Town/City*</label>
                                    <textarea id="notes" class="form-control" rows="4" name="" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="col-md-4">
                        <div class="ct-cartRightSection ct-cartRightSection--bordered ct-u-marginTop30">

                            <div class="ct-u-paddingBottom30">
                                <div class="ct-u-size16 ct-fw-600 pull-left">Order Summary</div>
                                <div class="ct-u-size14 pull-right"><a href="<?php echo base_url() ?>mycart/" class="ct-u-editCart">Edit Cart</a></div>
                                <div class="clearfix"></div>
                            </div>
							
            <?php  //$cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             //if(empty($cart_check)) {
             //echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
             ?>
             <!-- <p align="center">Your Cart is empty</p> -->
             <?php
             //}  ?>                             



             <?php //if(!empty($cart_check)) { ?>
                <div class="table-responsive">
                <table id="table" border="0" cellpadding="5px" cellspacing="1px" align="center">
                  <?php
                  // All values of cart store in "$cart". 
                  //if ($cart = $this->cart->contents()): ?>
                    <tr id= "main_heading">
                        
                        <td width="25%">&nbsp</td>
                        <td width="75%">&nbsp</td>
                        <!-- <td>Description</td> -->                  
                    </tr>
                    <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    //echo form_open('cart/update_cart');
                    $grand_total = 0;
                    $i = 1;
					$qty_barang=0;
                    $total_ongkir=0;
					
					foreach($carts as $rowcart){ 
						$id = $rowcart['serial'];
						$name = $rowcart['name'];
						$qty = $rowcart['qty'];
						$price = $rowcart['price'];	
						$rowid=$rowcart['serial'];
						$subtotal=$price*$qty;	
						$ongkir=15000;						
						$totalongkir = $ongkir*$qty;
                        ?>                        
                        
                        <input type="hidden" name="totalprice[]" value="<?php echo $subtotal ?>">
                        <input type="hidden" name="id[]" value="<?php echo $id ?>">
						<input type="hidden" name="qtys[]" value="<?php echo $qty ?>">
						<input type="hidden" name="ongkirs[]" value="<?php echo $totalongkir ?>">
                        <tr>
                            <?php
                                $this->db->where('serial', $id);
                                $query = $this->db->get('property');

                                foreach ($query->result() as $row)
                                {
                            ?>
                            <td>
                            <div class="ct-cartRightSection-currentCart">
                                <div class="ct-u-paddingTop10">
                       <a href="<?php echo base_url(); ?>productdetail/<?php echo $row->serial ?>">
                       <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" width="150%" height="auto" alt="Wishlist Product 1">
                       </a>
                                </div>
                            </div>

                       <?php //echo $i++; ?>
                            <?php //} ?>
                            </td>
                            <td>
                            <div class="ct-cartRightSection-currentCart" style="float:left;margin-top:-50px">
                                <div class="ct-u-paddingTop10">                      
                                  <div class="ct-u-size14 ct-u-paddingTop10"><a href="<?php echo base_url(); ?>product/product_view/<?php echo $row->serial ?>"><?php echo $name; ?></a></div>
                                </div>
                            </div>
                                <?php
                                    //$totalprice = (($item['price']) * ($item['qty']));
                                ?>
								
								<?php $qty_barang = $qty_barang+$qty; ?>
								<?php $qty_barang; ?>
								<?php $total_ongkir=$qty_barang*$ongkir; ?>
								
                                <div class="ct-u-size16 ct-u-paddingTop20" style="float:left;margin-top:-10px">								  
									<span class="ct-fw-600">[<?php echo $qty; ?>]x Rp. <?php echo number_format($price, 2); ?></span><br />
									<!-- <span class="ct-u-size14">x</span><?php //echo $qty; ?> <span class="ct-u-size14"> = </span> -->
									Rp. <?php echo number_format($subtotal, 2); ?><br />
									Ongkir : Rp. <?php echo number_format(($ongkir)*$qty,2); ?>
									<?php $ongkir = ($ongkir*$qty); ?>
								</div>
                            </td>
							
                            <!--
                           <td>
						<?php echo $row->description; ?>
                            </td>
                            -->
                        <?php } ?>


                        <?php $grand_total = $grand_total + $subtotal; ?>

                            
						<?php }; ?>
                    </tr>
                    <tr>                      
                        
                        <?php // "clear cart" button call javascript confirmation message ?>                        
                        
                        <td colspan="6" align="right">
							<!--<b>Order Total: Rp. <?php //echo number_format($grand_total, 2); ?><?php //$grand_total_idr=$grand_total+$dolar; echo number_format($grand_total_idr,2,'.',',');  ?></b><br>
							<b>Ongkir : <?php //echo 'Rp. '.number_format($total_ongkir, 2, '.', ','); ?></b><br /> -->
                            <b>Total bayar: Rp. <?php //echo number_format($grand_total, 2); ?><?php $grand_total_idr=$grand_total+$total_ongkir; echo number_format($grand_total_idr,2,'.',',');  ?></b>                                                      
                        </td>

                    </tr>
                    <tr>
                        <?php // "clear cart" button call javascript confirmation message ?>
                        
                        <td colspan="6" align="right">
                        <!-- <input type="button" class ='btn btn-warning' value="Clear Cart" onclick="clear_cart()"> -->
                            
                            <?php //submit button. ?>
                            <!-- <input type="submit" class ='btn btn-info' value="Update Cart"> -->
                            
                            <?php //echo form_close(); ?>
                            
                            <!-- "Place order button" on click send "billing" controller  -->
                            <!--<input type="button" class ='btn btn-info' value="Place Order" onclick="window.location = '<?php echo base_url() ?>index.php/cart/billing_view'"> -->
                        </td>
                        
                    </tr>

			<?php //endif; ?>
            </table>
        </div> 
 
                            <div class="ct-u-size16 ct-fw-600 ct-u-paddingTop40 ct-u-paddingBottom10">Cara Pembayaran</div>
                            <div class="ct-u-paddingTop20">
                                <div class="radio">
                                    <input type="radio" id="directBank" name="paymant" checked value="1">
                                    <label for="directBank">
                                        <span class="ct-u-size15 ct-fw-600">Transfer Rekening</span>
                                    </label>
                                    <div class="ct-u-size15 ct-u-paddingLeft34 ct-u-paddingBoth20 text-justify">
                                        Silahkan Anda melakukan pembayaran sejumlah Rp. <?php $grand_total_idr=$grand_total+$total_ongkir; echo number_format($grand_total_idr,2,'.',',');  ?> kenomor rekening BCA 1234567890 a/n Sofia Azizah
                                    </div>
                                </div>
                                <!--
                                <hr>
                                <div class="radio ct-u-paddingTop20">
                                    <input type="radio" id="cheque" name="paymant" value="2">
                                    <label for="cheque">
                                        <span class="ct-u-size15 ct-fw-600">Cheque Payment</span>
                                    </label>
                                    <div class="ct-u-size15 ct-u-paddingLeft34 ct-u-paddingBoth20 text-justify">
                                        Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                    </div>
                                </div>
                            -->
                                <hr>
                                <div class="radio ct-u-paddingTop20">
                                    <input type="radio" id="paypal" name="paymant" value="3">
                                    <label for="paypal">
                                        <span class="ct-u-size15 ct-fw-600">Paypal <img src="<?php echo base_url() ?>images/paypal.jpg" alt="Paypal"></span>
                                    </label>
                                    <div class="ct-u-size15 ct-u-paddingLeft34 ct-u-paddingBoth20 text-justify">
                                        Mohon maaf, pilihan pembayaran ini belum tersedia, silahkan menggunakan pilihan pertama. Terima kasih
                                    </div>
                                </div>
                            </div>

            <?php  //$cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             //if(empty($cart_check)) {
             //echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
             ?>

            <div class="ct-finishOrder ct-u-paddingTop30">            
                <a href="<?php echo base_url() ?>">
                    <input type="button" class="btn btn-default" value="Continue cart" />
                </a>            
            </div>             
			<div class="ct-finishOrder ct-u-paddingTop30">
                <button type="submit" class="btn btn-default">Place Order<i class="fa fa-long-arrow-right fa-fw ct-u-paddingLeft10"></i></button>
            </div>
             <?php
             //}else{  ?>     
				<!--
                            <div class="ct-finishOrder ct-u-paddingTop30">
                                <button type="submit" class="btn btn-default">Place Order<i class="fa fa-long-arrow-right fa-fw ct-u-paddingLeft10"></i></button>
                            </div>
				-->
            <?php //} ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>

<?php } ?>

            <!-- PreFOOTER -->
            <div class="container">
                <div class="ct-dividedSection ct-u-paddingTop60">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="ct-dividedSection-left">
                                
                            </div>
                        </div>
						
                        
						
                    </div>
                    <div class="ct-tooltips text-center ct-u-paddingTop50 ct-u-paddingBottom40">
					<!--
                        <ul class="list-unstyled list-inline">
                            <li data-toggle="tooltip" title="75,000+ customers trusted us to create their rings."><i class="fa fa-heart fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Pay by cash, credit card, bank transfer or store."><i class="fa fa-dollar fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Fully protected, all payments secured."><i class="fa fa-lock fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Double guarantee for gold and diamonds."><i class="fa fa-certificate fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="24/7 support at your service."><i class="fa fa-headphones fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Latest news collections directly on your email."><i class="fa fa-envelope fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Free & easy returns in 48h."><i class="fa fa-circle-o-notch fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Free Delivery and Assurance."><i class="fa fa-truck fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Your data is fully protected."><i class="fa fa-folder fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Find your measurements for your ring."><i class="fa fa-pencil-square-o fa-fw fa-6x"></i></li>
                        </ul>
					-->
                    </div>
                </div>
            </div>
        </div>

<!-- FOOTER -->
        <footer class="ct-footer ct-u-paddingTop210 ct-u-paddingBottom90">
            <div class="container">
                
                <div class="row">
                    <div class="ct-u-bottomFooterBar ct-u-paddingTop40 ct-u-marginTop50">
                        <div class="col-sm-6">
                            <div class="ct-rights">
                                <a href="#/">EDolanan .com</a> © Copyright 2017
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ct-iconPayments pull-right">
                                <ul class="list-inline list-unsyled">
                                    <li><i class="fa fa-cc-visa fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-mastercard fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-discover fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-amex fa-fw fa-2x"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
</div>

    <!-- JavaScripts files -->

    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-ui/jquery-ui.js"></script>

    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/device.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.browser.min.js"></script>
    <script src="<?php echo base_url(); ?>js/snap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.appear.js"></script>

    <script src="<?php echo base_url(); ?>plugins/headroom/headroom.js"></script>
    <script src="<?php echo base_url(); ?>plugins/headroom/jQuery.headroom.js"></script>
    <script src="<?php echo base_url(); ?>plugins/headroom/init.js"></script>

    <script src="<?php echo base_url(); ?>form/js/contact-form.js"></script>

    <script src="<?php echo base_url(); ?>js/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/stacktable/stacktable.js"></script>


    <script src="<?php echo base_url(); ?>plugins/owl/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/owl/init.js"></script>

    <script src="<?php echo base_url(); ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url(); ?>js/elevate-zoom/init.js"></script>

    <script src="<?php echo base_url(); ?>js/main.js"></script>    

</body>

<!-- Mirrored from diana.html.themeplayers.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:44:16 GMT -->
</html>
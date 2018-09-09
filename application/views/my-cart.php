<?php 
$email = $this->session->userdata('email_address'); 

?>



    <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>

        <script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('Apakah anda yakin akan menghapus seluruh belanja anda ?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>shopping/remove/all";
                } else {
                    return false; // cancel button
                }
            }
        </script>
		
		<script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart_member() {
                var result = confirm('Apakah anda yakin akan menghapus seluruh belanja anda ?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>shopping/hapus";
                } else {
                    return false; // cancel button
                }
            }
        </script>
</head>


<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php //$this->load->view('header'); ?>

<?php
							$grand_total=0;							
							$qty_barang=0;
							$total_ongkir=0;
						?>
        <div class="ct-contentWrapper">
            <div class="container">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">My Cart</h4>
				
								
				<div class="col-md-12"> 
										
					<div class="col-md-9">
					<table class="ct-wishList77 ct-js-wishList ct-js-cartShop ct-u-marginBoth30" width="100%">
                        <thead>                    
                            <tr>
                                <th width="15%">#</th>
                                <th width="20%">Nama barang</th>
                                <th width="20%">Harga barang</th>
                                <th width="10%">Qty</th>
                                <th width="20%">Total harga</th>
                                <th>Hapus | Edit</th>
                            </tr>
                        </thead>
						
						<?php if(!$this->session->userdata('is_logged_in')){ ?>
						
						<?php
						  // All values of cart store in "$cart". 
						  if ($cart = $this->cart->contents()): ?> 						
                        <tbody>
							<?php
							 // Create form and send all values in "shopping/update_cart" function.
							echo form_open('shopping/update_cart');
							
							$grand_total = 0;
							$i = 1;
							$qty_barang=0;

							foreach ($cart as $item):
								//   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
								//  Will produce the following output.
								//echo '<input type="text" name="cart[1][id]" value="'.$item['name'].'" />';
								
								echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
								echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
								echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
								echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
								echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
								?>
							<tr>
									<?php
										$this->db->where('serial', $item['id']);
										$query = $this->db->get('property');

										foreach ($query->result() as $row)
										{
									?>
                            <td>
							   <a href="<?php echo base_url(); ?>productdetail/<?php echo $row->id_key ?>">
							   <img src="<?php echo base_url() ."images/". $row->image_name ?>" width="65" height="65"/>
							   </a>

							<?php //echo $i++; ?>
                            <?php //} ?>
                            </td>
                            <td>
                                <?php echo $item['name']; ?>
                            </td>
                            <!--
                            <td>
                                <?php //echo $row->description; ?>
                            </td>
                            -->
                            <?php } ?>
                            <td>
							
								<?php $qty_barang = $qty_barang+$item['qty']; ?>
								<?php $qty_barang; ?>								
								<?php $ongkir=15000; ?>
								<?php $total_ongkir=$qty_barang*$ongkir; ?>

                                <?php echo "Rp. ".number_format((($item['price'])), 2); ?><br />								
								<?php //echo 'US$1 = IDR '.number_format($dolar, 2, '.', ','); ?>
								
								<?php 
									$harga = $item['price'];
									$harga = $ongkir+$harga;
								//echo 'Rp. '.number_format($harga, 2, '.', ','); 
								?>
                            </td>
							
                            <td>
                            <?php //echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
							<?php echo $item['qty']; ?>
                            </td>
							
                                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td align="left">
                                Rp. <?php echo number_format($item['subtotal'], 2) ?><br />
								<!-- Ongkir : Rp. <?php //echo number_format(($ongkir)*$item['qty'],2); ?> -->
								
								<?php //$subtotal = (($item['subtotal']));echo number_format($subtotal,2,'.',',');  ?>
                            </td>
                            <td>
                            <a href="<?php echo base_url(); ?>shopping/remove/<?php echo $item['rowid']; ?>">
                            <img src="<?php echo base_url(); ?>images/cart_cross.jpg" width='25px' height='20px' />
                            </a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="<?php echo base_url(); ?>productdetail/<?php echo $row->id_key ?>">
                            <img src="<?php echo base_url(); ?>images/update_cross.png" width='25px' height='20px' />
                            </a>
							<?php 
                            // cancle image.
                            //$path = "<img src='http://localhost/php_ci_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                            //echo anchor('cart/remove/' . $item['rowid'], $path); ?>
							
                            </td>
							
						<?php endforeach; ?>
						</tr>
						<tr>                      
							
							<?php // "clear cart" button call javascript confirmation message ?>                        
							
							<td colspan="6" align="left">
								<!-- Total Cart and delivered -->
							</td>

						</tr>
						<tr>
							<?php // "clear cart" button call javascript confirmation message ?>
							
							<td colspan="6" align="left">
							<!-- <input type="button" class ='btn btn-warning' value="Clear Cart" onclick="clear_cart()"> -->
								<!--
								<input type="submit" class ='btn90 btn-info90' value="Update Cart">
								-->
								<?php //submit button. ?>
								<!-- <input type="submit" class ='btn btn-info' value="Update Cart"> -->
								
								<?php echo form_close(); ?>                           
								
								<!-- "Place order button" on click send "billing" controller  -->
								<!--<input type="button" class ='btn btn-info' value="Place Order" onclick="window.location = '<?php echo base_url() ?>index.php/cart/billing_view'"> -->
							</td>
							
						</tr>
                        </tbody>
						
						<?php endif; ?>
						
						<?php }else{ ?>
						
						
						<tbody>
							<?php
							 // Create form and send all values in "shopping/update_cart" function.
							echo form_open('shopping/updates');
							
							$grand_total = 0;
							$i = 1;
							$qty_barang=0;
							$total_ongkir=0;
							
							
							foreach($carts as $rowcart){ 
								$id = $rowcart['serial'];
								$name = $rowcart['name'];
								$qty = $rowcart['qty'];
								$price = $rowcart['price'];	
								$rowid=$rowcart['id'];
								$subtotal=$price*$qty;
								
							?>
							<tr>
									<?php
										$this->db->where('serial', $id);
										$query = $this->db->get('property');

										foreach ($query->result() as $row)
										{
									?>
                            <td>
							   <a href="<?php echo base_url(); ?>productdetail/<?php echo $row->id_key ?>">
							   <img src="<?php echo base_url() ."images/". $row->image_name ?>" width="65" height="65"/>
							   </a>

							<?php //echo $i++; ?>
                            <?php //} ?>
                            </td>
                            <td>
                                <?php echo $name; ?>
                            </td>
                            <!--
                            <td>
                                <?php //echo $row->description; ?>
                            </td>
                            -->
                            <?php } ?>
                            <td>
							
								<?php $qty_barang = $qty_barang+$qty; ?>
								<?php $qty_barang; ?>								
								<?php $ongkir=15000; ?>
								<?php $total_ongkir=$qty_barang*$ongkir; ?>
								
								<?php echo "Rp. ".number_format((($price)), 2); ?><br />								
								<?php //echo 'US$1 = IDR '.number_format($dolar, 2, '.', ','); ?>
								
								<?php 
									$harga = $price;
									$harga = $ongkir+$harga;
								//echo 'Rp. '.number_format($harga, 2, '.', ','); 
								?>
                            </td>
							
                            <td>
                            <?php
								$style=array(
									'width'=>'5'
								);
							?>
							<?php //echo form_input('cart[' . $rowcart['id'] . '][qty]',$rowcart['qty']) ?>
							<!-- <input type="text" name="cart[27][qty]" value="1"  /> -->
							<!-- <input type="text" style="width:35px; text-align:right" disabled value="<?php //echo $rowcart['qty']; ?>" name="<?php //echo 'cart[' . $rowcart['id'] . '][qty]' ?>" /> -->
							<?php //echo form_hidden('cart[' . $rowcart['id'] . '][rowid]',$rowcart['id']) ?>
							<!-- <input type="text" name="cart[3][qty]" value="1" maxlength="3" size="1" style="text-align: right" /> -->
							<!-- <input type="text" name="rowid[27][id]" value="27"  />	 -->
							<?php echo $qty; ?>
                            </td>
							
                                <?php $grand_total = $grand_total + $subtotal; ?>
								
								
                            <td align="left">
                                Rp. <?php echo number_format($subtotal, 2) ?><br />
								<!-- Ongkir : Rp. <?php //echo number_format(($ongkir)*$qty,2); ?> -->
								
								<?php //$subtotal = (($item['subtotal']));echo number_format($subtotal,2,'.',',');  ?>
                            </td>
                            <td>
                            <a href="<?php echo base_url(); ?>shopping/deletes/<?php echo $id; ?>">
								<img src="<?php echo base_url(); ?>images/cart_cross.jpg" width='25px' height='20px' />
                            </a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="<?php echo base_url(); ?>productdetail/<?php echo $row->id_key ?>">
                            <img src="<?php echo base_url(); ?>images/update_cross.png" width='25px' height='20px' />
                            </a>
							<!--
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="submit" style="border:0; background:transparent"><img src="<?php //echo base_url(); ?>images/update_cross.png" width="25" height="25"></button>
                           -->
						   <?php 
                            // cancle image.
                            //$path = "<img src='http://localhost/php_ci_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                            //echo anchor('cart/remove/' . $item['rowid'], $path); ?>
							
                            </td>
							
						<?php } ?>
						</tr>
						<tr>                      
							
							<?php // "clear cart" button call javascript confirmation message ?>                        
							
							<td colspan="6" align="left">
								<!-- <b>Rp. <?php //echo number_format($grand_total, 2); ?><?php //$grand_total_idr=$grand_total+$dolar; echo number_format($grand_total_idr,2,'.',',');  ?></b><br> -->
								<!-- <b>Ongkir : <?php //echo 'Rp. '.number_format($total_ongkir, 2, '.', ','); ?></b><br /> -->
								<!-- <b>Total Bayar : Rp. <?php //$grand_total_idr=$grand_total+$total_ongkir; echo number_format($grand_total_idr,2,'.',',');  ?></b> -->
							</td>

						</tr>
						<tr>
							<?php // "clear cart" button call javascript confirmation message ?>
							
							<td colspan="6" align="left">
							<!-- <input type="button" class ='btn btn-warning' value="Clear Cart" onclick="clear_cart()"> -->
								
								<?php //submit button. ?>
								<!--
								<input type="submit" class ='btn89 btn-in89fo' value="Update Cart">
								-->
								<?php echo form_close(); ?>                           
								
								<!-- "Place order button" on click send "billing" controller  -->
								<!--<input type="button" class ='btn btn-info' value="Place Order" onclick="window.location = '<?php echo base_url() ?>index.php/cart/billing_view'"> -->
							</td>
							
						</tr>

						<?php //endif; ?>  
                        </tbody>						
                        
						
						
						<?php } ?>
                    </table>
					</div>
					<div class="col-md-3" style="background-color:#fff111;border:0px solid white;border-radius:25px">
						<?php if(!$this->session->userdata('is_logged_in')){ ?>
						
							<br />
						<h4><b>Risalah Pemesanan</b></h4>
						<br /><br />
						<table width="100%" style="margin:0 5px">
							<tr>
								<td width="45%"><b> Total </b></td>
								<td width="5%"> : </td>
								<td width="50%">Rp. <?php echo number_format($grand_total, 2); ?><?php //$grand_total_idr=$grand_total+$dolar; echo number_format($grand_total_idr,2,'.',',');  ?></td>
							</tr>
								<?php $disk_ongkir=$total_ongkir; 
										if(($grand_total >= 250000 && $grand_total <= 450000)){
											$disk_ongkir = $total_ongkir - ($total_ongkir * (5/100));
											$variable="Ongkir(-5%)";
										}elseif($grand_total >= 450000 and $grand_total <= 750000){
											$disk_ongkir = $total_ongkir - ($total_ongkir * (15/100));
											$variable="Ongkir(-15%)";											
										}elseif($grand_total > 750000){
											$disk_ongkir = $total_ongkir - ($total_ongkir * (17/100));
											$variable="Ongkir(-17%)";
										}else{
											$variable="Ongkir";
										}
								?>
							<tr>
								<td><b> <?php echo $variable ?> </b></td>
								<td>:</td>
								<td><?php echo 'Rp. '.number_format($disk_ongkir, 2, '.', ','); ?></td>
							</tr>
							
							<tr>
								<td>&nbsp;</td>
								<td colspan="2"><hr></td>
							</tr>
							<tr>
								<td><b> Total Bayar </b></td>
								<td>:</td>
								<td><b>Rp. <?php $grand_total_idr=$grand_total+$disk_ongkir; echo number_format($grand_total_idr,2,'.',',');  ?></b></td>
							</tr>
													
						</table>
						<br /><br />
						<h4>Catatan </h4>
						Silahkan melakukan pembayaran dengan menekan tombol checkout
						<br /><br />
							<div class="ct-u-paddingBottom40ss">
								<a href="<?php echo site_url() ?>cart/"><button class="btn btn-default btn-md pull-right">Checkout <i class="fa fa-long-arrow-right fa-fw"></i></button></a>
								<div class="clearfix"></div>
							</div>
						<br /><br />
						
						
						
						<?php }else{ ?>
						<br />
						<h4><b>Risalah Pemesanan</b></h4>
						<br /><br />
						<table width="100%" style="margin:0 5px">
							<tr>
								<td width="45%"><b> Total </b></td>
								<td width="5%"> : </td>
								<td width="50%">Rp. <?php echo number_format($grand_total, 2); ?><?php //$grand_total_idr=$grand_total+$dolar; echo number_format($grand_total_idr,2,'.',',');  ?></td>
							</tr>
								<?php $disk_ongkir=$total_ongkir; 
										if(($grand_total >= 250000 && $grand_total <= 450000)){
											$disk_ongkir = $total_ongkir - ($total_ongkir * (5/100));
											$variable="Ongkir(-5%)";
										}elseif($grand_total >= 450000 and $grand_total <= 750000){
											$disk_ongkir = $total_ongkir - ($total_ongkir * (15/100));
											$variable="Ongkir(-15%)";											
										}elseif($grand_total > 750000){
											$disk_ongkir = $total_ongkir - ($total_ongkir * (17/100));
											$variable="Ongkir(-17%)";
										}else{
											$variable="Ongkir";
										}
								?>
							<tr>
								<td><b> <?php echo $variable ?> </b></td>
								<td>:</td>
								<td><?php echo 'Rp. '.number_format($disk_ongkir, 2, '.', ','); ?></tr>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan="2"><hr></td>
							</tr>
							<tr>
								<td><b> Total Bayar </b></td>
								<td>:</td>
								<td><b>Rp. <?php $grand_total_idr=$grand_total+$disk_ongkir; echo number_format($grand_total_idr,2,'.',',');  ?></b></td>
							</tr>
							
						</table>
						<br /><br />
						<h4>Catatan </h4>
						Silahkan melakukan pembayaran dengan menekan tombol checkout
						<br /><br />
							<div class="ct-u-paddingBottom40ss">
								<a href="<?php echo site_url() ?>cart/"><button class="btn btn-default btn-md pull-right">Checkout <i class="fa fa-long-arrow-right fa-fw"></i></button></a>
								<div class="clearfix"></div>
							</div>
						<br /><br />
							<?php //echo number_format($grand_total, 2); ?>
						<?php } ?>
					</div>
					
				</div>
						<div class="ct-u-paddingBottom40 ct-cartRightSection-buttons">
						<br /><br /><br />
                            <a href="<?php echo site_url() ?>"><button class="btn btn-default btn-md pull-left" style="margin-right:15px"> Tambah belanja <i class="fa fa-long-arrow-right fa-fw"></i></button></a>
							<?php if(!$this->session->userdata('is_logged_in')){ ?>
							<button class="btn btn-default btn-md pull-left" onclick="clear_cart()"> Hapus cart <i class="fa fa-long-arrow-right fa-fw"></i></button>
							<?php }else{ ?>
							<button class="btn btn-default btn-md pull-left" onclick="clear_cart_member()"> Hapus cart <i class="fa fa-long-arrow-right fa-fw"></i></button>
							<?php } ?>
                                <!-- <input type="button" class ='btn btn-warning' value="Clear Cart" onclick="clear_cart()"> -->
                            <div class="clearfix"></div>
                        </div>

					
                    <!-- this div will appear if we will close each element in this table or there won't be any element here in the beggining. This is generating by JS in main.js-->
                    <!-- <div class="ct-wishList-noProducts ct-u-size15 ct-u-paddingBottom30">Tidak ada produk didalam cart.</div> -->
                    <div class="ct-shopSections">
                        <div class="row">
						<!--
                            <div class="col-sm-7">
                                <div class="ct-cartLeftSection">
                                    <input type="text" class="form-control ct-stickedInput" placeholder="Coupon Code"><button class="btn btn-default">Apply <i class="fa fa-long-arrow-right fa-fw ct-u-paddingLeft10"></i></button>
                                </div>
                            </div>
						-->
                            <div class="col-sm-5">
							<!--
                                <div class="ct-cartRightSection">
                                    <div class="ct-u-paddingBottom40 ct-cartRightSection-buttons">
                                        <a href="<?php echo site_url() ?>"><button class="btn btn-default btn-md pull-left" style="margin-right:15px"> Tambah belanja <i class="fa fa-long-arrow-right fa-fw"></i></button></a>
										<button class="btn btn-default btn-md pull-left" onclick="clear_cart()"> Hapus cart <i class="fa fa-long-arrow-right fa-fw"></i></button>
							-->
                                        <!-- <input type="button" class ='btn btn-warning' value="Clear Cart" onclick="clear_cart()"> -->
                                        <!-- <div class="clearfix"></div>
                                    </div>
                                    
                                </div>
							-->
                            </div>
                        </div>
                    </div>
                
            </div>

            <!-- PreFOOTER -->
            <div class="container">
                <div class="ct-dividedSection ct-u-paddingTop60">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="ct-dividedSection-left">
                                <h3>Daftarkan newsletter pada kami</h3>
                                <div class="ct-contactForm">
                                    <div class="successMessage alert alert-success" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Terima kasih!
                                    </div>
                                    <div class="errorMessage alert alert-danger" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Maaf! Kesalahan terjadi. Silahkan ulangi lagi.
                                    </div>									
									<form action="//edolanan.us12.list-manage.com/subscribe/post?u=8fd087afc74f071f74c3f81da&amp;id=b8da00d05e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										<div id="mc_embed_signup_scroll">
											<div class="mc-field-group  input-group">
												<input type="email" placeholder="Your Email Address" value="" required name="EMAIL" class="required email form-control" id="mce-EMAIL">
												<span class="input-group-btn"><input type="submit" value="Subscribse" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-default btn-sm"></span>
											</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>   <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										</div>
									</form>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-md-5 col-sm-12">
                            <div class="ct-dividedSection-right">
                                <img src="<?php echo base_url() ?>images/prefooter-diamond.png" class="text-right pull-left" alt="Diamond Ring">
                                <h3 class="text-uppercase text-right">Anda punya pertanyaan untuk kami ?</h3>
                                Silahkan hubungi kami langsung untuk pertanyaan seputar permainan edukasi <a href="#">Hubungi langsung</a> 
                                <div class="ct-dividedSection-right-triangle hidden-sm hidden-xs"></div>
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

        

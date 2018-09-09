<?php 
$email = $this->session->userdata('email_address'); 

?>

            <?php  $cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             if(empty($cart_check)) {
             //echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
       ?>
       
       <?php
             }  ?>     
              
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?> 
    <?php endif; ?>

<?php
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
                        ?>
                        
                       <?php $i++; ?>
                           
              <!--
                           
                                $ <?php echo number_format($item['price'], 2); ?>
                                <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>                            
              <?php $grand_total = $grand_total + $item['subtotal']; ?>
              <?php $qty = $qty + $item['qty']; ?>
              <?php $total_qty =+ $item['qty']; ?>                          
                                $ <?php echo number_format($item['subtotal'], 2) ?> 
                -->
                     <?php endforeach; ?> 
					
		
    <nav class="ct-menuMobile">
        <ul class="ct-menuMobile-navbar">
            <li><a href="<?php echo base_url() ?>"><i class="fa fa-home fa-fw"></i> Home</a></li>
			<li class="dropdown">
                <a href="#"><i class="fa fa-list-ol fa-fw"></i> Produk</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url()?>v/huruf"><i class="fa fa-angle-right fa-fw"></i> Huruf-huruf Ajaib</a></li>
                    <li><a href="<?php echo base_url()?>v/angka"><i class="fa fa-angle-right fa-fw"></i> Angka yang pintar</a></li>
					<li><a href="<?php echo base_url()?>v/pesan"><i class="fa fa-angle-right fa-fw"></i> Pesan yang bermanfaat</a></li>
                </ul>
            </li>
			<!--
			<li class="dropdown">
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Koleksi Permainan</a>
                <ul class="dropdown-menu">
					<li><a href="<?php echo base_url()?>v/puzzle"><i class="fa fa-angle-right fa-fw"></i> Permainan Puzzle</a></li>
					<li><a href="<?php echo base_url()?>v/tradisional"><i class="fa fa-angle-right fa-fw"></i> Permainan Tradisional</a></li>
					<li><a href="<?php echo base_url()?>v/modern"><i class="fa fa-angle-right fa-fw"></i> Permainan Modern</a></li>
					<li><a href="<?php echo base_url()?>v/edukasi"><i class="fa fa-angle-right fa-fw"></i> Permainan Edukasi</a></li>
				</ul>
            </li>
			-->
            <li>
                <a href="#"><i class="fa fa-dot-circle-o fa-fw"></i> Perihal</a>                
            </li>
            <li><a href="#"><i class="fa fa-phone-square fa-fw"></i> Kontak</a></li>
        </ul>
    </nav>

    <div class="ct-shopMenuMobile">
        <!-- Language Dropdown -->
        
        <!-- Currency Dropdown -->
        
        <nav class="ct-shopMenuMobile-navbar">
            <ul class="list-unstyled">
                <?php if(!$this->session->userdata('is_logged_in')){ ?>
                <li><a href="<?php echo base_url() ?>administratoris.pl"><i class="fa fa-user fa-fw"></i> Login</a></li>
                <li><a href="<?php echo base_url() ?>register.pl"><i class="fa fa-pencil fa-fw"></i> Buat akses</a></li>
                <li><a href="<?php echo base_url(); ?>mycart/"><i class="fa fa-archive fa-fw"></i> Keranjang</a></li>					
                    <?php }else{ ?>
                        <?php
                            $sqlStr  = $this->db->query("SELECT * FROM membership WHERE email_address = '$email'");
                            foreach ($sqlStr->result() as $row){
                                $fname = $row->first_name;
                                $lname = $row->last_name;
                        ?>	
							<li><a href="#"><i class="fa fa-user fa-fw"></i> Hi, <?php echo $fname; ?></a></li>
							
                            <!-- <li><a href="<?php echo base_url() ?>my-account/"><i class="fa fa-pencil fa-fw"></i>My Account</a></li> -->
						<?php } ?>
                    <?php } ?>

                    <?php
                    if(!$this->session->userdata('is_logged_in')){ ?>                      
                        <li><a href="<?php echo base_url(); ?>cart/"><i class="fa fa-heart-o"></i>Checkout</a></li>
                    <?php }else{ ?>
						<li><a href="<?php echo base_url(); ?>"><i class="fa fa-cog fa-fw"></i> Shopping</a></li>
						<li><a href="<?php echo base_url(); ?>mycart/"><i class="fa fa-archive fa-fw"></i> Keranjang</a></li>
                        <li><a href="<?php echo base_url(); ?>cart/"><i class="fa fa-heart-o"></i>Checkout</a></li>
						<?php
                            $sqlStr  = $this->db->query("SELECT * FROM membership WHERE email_address = '$email'");
                            foreach ($sqlStr->result() as $row){
                                $fname = $row->first_name;
                        ?>
							<!-- <li><a href="<?php //echo base_url(); ?>logout/<?php //echo $fname ?>">Logout</a></li> -->
						<?php } ?>
                    <?php } ?>  
					

            </ul>
        </nav>
		
		<?php if(!$this->session->userdata('is_logged_in')){ ?>
		<!-- Clear this is for mobile menus -->
        <div class="ct-shopMenuMobile-basket">
            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Cart : <span class="ct-topBar-basket-quantity">(<?php echo $qty; ?> items)</span></a>
            <div class="ct-shopMenuMobile-basketContainer">
                <ul class="ct-shopMenuMobile-basketProducts list-unstyled">
                <?php if ($cart = $this->cart->contents()): ?>
                    <?php
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
                        ?>
                       
                            <?php
                                $this->db->where('serial', $item['id']);
                                $query = $this->db->get('property');

                                foreach ($query->result() as $row)
                                {
                            ?> 	
                    <li class="ct-shopMenuMobile-basketProduct">
                        <a href="<?php echo base_url() ?>productdetail/<?php echo $item['id']; ?>">
                            <img class="pull-left" width="25%" height="10%" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
						</a>
                            <div class="ct-shopMenuMobile-basketProductContent">
                                <div class="ct-shopMenuMobile-basketProductTitle"><?php echo $row->name; ?></div>
                                <div class="ct-shopMenuMobile-basketProductPrice ct-fw-600">
                                    Rp. <?php echo number_format($item['price'], 2); ?> x <?php echo $item['qty']; ?>
                                    <a href="<?php echo base_url(); ?>shopping/remove/<?php echo $item['rowid']; ?>">
                                        <img style="float:right" src="<?php echo base_url(); ?>images/delete.png" />
                                    </a>								
								</div>
                            </div>
                            <div class="clearfix"></div>
                        
                    </li>
						<?php } ?>
						<?php $grand_total = $grand_total + $item['subtotal']; ?>
						<?php endforeach; ?>
                        <?php //echo form_close(); ?>
                        <?php endif; ?>						
                </ul>
                <div class="ct-shopMenuMobile-basketWrap ct-shopMenuMobile-subTotal ct-fw-600">
                    <div class="pull-left text-uppercase">Subtotal</div>
                    <div class="pull-right"><?php echo "Rp. ".number_format($grand_total, 2); ?></div>
                    <div class="clearfix"></div>
                </div>				
				
            </div>
        </div>
		<?php }else{ ?>

						
        <div class="ct-shopMenuMobile-basket">
<?php
    $this->db->where('email', $email);
	$this->db->where('status', 'unpaid');
    $this->db->select('*');
    $this->db->select_sum('qty');
    $this->db->from('tbl_cart_temp');

    $query = $this->db->get();
    foreach ($query->result() as $rows)
    {
		$qtys = $rows->qty;
?>                        	
            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Cart : <span class="ct-topBar-basket-quantity">(<?php echo $qtys; ?> items)</span></a>
<?php } ?>
						
            <div class="ct-shopMenuMobile-basketContainer">
                <ul class="ct-shopMenuMobile-basketProducts list-unstyled">
				<?php 
					$grand_total = 0;
					$qty_barang=0;	
					$total_ongkir=0;
					
					foreach($carts as $rowcart){ 
						$id = $rowcart['serial'];
						$name = $rowcart['name'];
						$qtys = $rowcart['qty'];
						$prices = $rowcart['price'];
						$total=$prices*$qtys;	
						$rowid=$rowcart['id'];
						$ongkir = 15000;
				?>
				<?php $qty_barang = $qty_barang+$qtys; ?>
				<?php $total_ongkir=$qty_barang*$ongkir; ?>
				
                        <?php
                            $this->db->where('serial', $id);
                            $query = $this->db->get('property');

                            foreach ($query->result() as $row)
                            {
                            ?>		
		
		
						<?php } ?>				
                    <li class="ct-shopMenuMobile-basketProduct">
                        <a href="<?php echo base_url() ?>productdetail/<?php echo $id; ?>">
                            <img class="pull-left" width="25%" height="10%" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
                        </a>    
							<div class="ct-shopMenuMobile-basketProductContent">
                                <div class="ct-shopMenuMobile-basketProductTitle"><?php echo $row->name; ?></div>
                                <div class="ct-shopMenuMobile-basketProductPrice ct-fw-600">
								<?php
								/*
								    $this->db->select('*');
									$this->db->select_sum('qty');
									$this->db->from('tbl_cart_temp');
									$this->db->where('serial', $id);
									$this->db->group_by('name');
									$query = $this->db->get();
									foreach ($query->result() as $teot)
									{
										$qtys=$teot->qty;
										$prices=$teot->price;
										$total=$prices*$qtys;
										$rowid=$teot->serial;
								*/
								?>
                                    Rp. <?php echo number_format($prices, 2); ?> x <?php echo $qtys; ?><br />
									Rp. <?php echo number_format($total,2); ?><br />
									Ongkir : Rp. <?php echo number_format((($ongkir)*$qtys),2); ?>
								<?php //} ?>
                                    <a href="<?php echo base_url(); ?>shopping/deletes/<?php echo $id; ?>">
                                        <img style="float:right" src="<?php echo base_url(); ?>images/delete.png" />
                                    </a>								
								</div>
                            </div>
                            <div class="clearfix"></div>
                        
                    </li>
					<?php } ?>
				</ul>
				<?php 
				/*
					foreach($totalprice as $rowprice){
						$grand_total=$rowprice['price'];
					}
				*/
					$this->db->select('*');
					$this->db->select_sum('price');
					$this->db->from('tbl_cart_temp');
					$this->db->where('status', 'unpaid');
					$this->db->where('email',$email);
					$query = $this->db->get();
					foreach ($query->result() as $rowprice)
					{
						$grand_total=$rowprice->price;
					}	
				?>
                <div class="ct-shopMenuMobile-basketWrap ct-shopMenuMobile-subTotal ct-fw-600">
                    <div class="pull-left text-uppercase">Subtotal</div>
                    <div class="pull-right"><?php echo "Rp. ".number_format($grand_total, 2); ?></div>
                    <div class="clearfix"></div>
                
                    <div class="pull-left text-uppercase">Ongkir</div>
                    <div class="pull-right"><?php echo "Rp. ".number_format($total_ongkir, 2); ?></div>
                    <div class="clearfix"></div>
                    <div class="pull-left text-uppercase">Total bayar</div>
                    <div class="pull-right"><?php echo "Rp. ".number_format(($grand_total+$total_ongkir), 2); ?></div>
                    <div class="clearfix"></div>					
                </div>				
				
            </div>
        </div>
		
	<?php } ?>	
					
    </div>

    <div id="ct-js-wrapper" class="ct-pageWrapper">
        <!-- navbar + logo menu -->
        <div class="ct-navbarMobile">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			<!--
            <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/logo.png" alt="EDolanan"> </a>
			-->
            <button type="button" class="navbarShop-toggle">
                <i class="fa fa-fw fa-user"></i>
            </button>
        </div>

        <!-- TOPBAR -->
        <div class="ct-topBar">
            <div class="container">
                <div class="ct-topBar-navigation pull-left">				
                    
                </div>

				<?php if(!$this->session->userdata('is_logged_in')){ ?>
					
                <div class="pull-right">
                    <div class="ct-topBar-basket">                        
<!---           -->
                
                        
						<!-- Clear this is for desktop menus -->
                        <!-- <a href="#"><span class="ct-topBar-basket-cart"><i class="fa fa-fw fa-shopping-cart"></i> Cart : </span><span class="ct-topBar-basket-quantity"><?php //echo $qty; ?> item(s)</span><span class="ct-topBar-basket-price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo number_format($grand_total, 2); ?></span></a> -->
                        <div class="ct-topBar-basket-info">

                <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
                    
                    <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    echo form_open('cart/update_cart');
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
                        ?>
                       
                            <?php
                                $this->db->where('serial', $item['id']);
                                $query = $this->db->get('property');

                                foreach ($query->result() as $row)
                                {
                            ?>

                            <div class="ct-cartItem">
                                <div class="ct-cartItem-image pull-left">
								<a href="<?php echo base_url() ?>productdetail/<?php echo $item['id']; ?>">
                                    <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
								</a>	
                                </div>
                                <div class="ct-cartItem-title">
                                    <?php echo $row->name; ?>
                                </div>
                                <div class="ct-cartItem-price">
                                    Rp. <?php echo number_format($item['price'], 2); ?> x <?php echo $item['qty']; ?>
                                    <a href="<?php echo base_url(); ?>shopping/remove/<?php echo $item['rowid']; ?>">
                                        <img style="float:right" src="<?php echo base_url(); ?>images/delete.png" />
                                    </a>
                                </div>
                                
                                <div class="clearfix"></div>
                            </div>

                            <?php } ?>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            
                        <?php endforeach; ?>
                        <?php echo form_close(); ?>
                        <?php endif; ?>
                            <!--
                            <div class="ct-cartSubtotal">
                                <div class="pull-left ct-fw-600">Subtotal</div>
                                <div class="pull-right ct-fw-600">Rp. <?php //echo number_format($grand_total, 2); ?></div>
                                <div class="clearfix"></div>
                            </div>
							-->
                            <div class="ct-cartGoNext text-uppercase ct-u-paddingBoth20">
                                <a class="btn btn-default ct-u-width-49pc" href="<?php echo base_url(); ?>mycart/" role="button">View Cart <i class="fa fa-angle-double-right fa-fw"></i></a>
                                <a class="btn btn-default pull-right ct-u-width-49pc" href="<?php echo base_url(); ?>cart/" role="button">Checkout <i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>


                    </div>
					
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <!-- &nbsp; &nbsp;&nbsp;<span class="caret"></span> -->
                        </button>
						<!--
                        <ul class="dropdown-menu" role="menu">
                            
                        </ul>
						-->
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <!-- &nbsp;&nbsp;&nbsp; <span class="caret"></span> -->
                        </button>
						<!--
                        <ul class="dropdown-menu" role="menu">
                            
                        </ul>
						-->
                    </div>
					
                </div>
				<?php }else{ ?>

                <div class="pull-right">
                    <div class="ct-topBar-basket">
						<!-- Clear this is for desktop menus -->
						<?php
							$this->db->where('status', 'unpaid');
							$this->db->where('email', $email);
							$this->db->select('*');
							$this->db->select_sum('qty');
							$this->db->from('tbl_cart_temp');

							$query = $this->db->get();
							foreach ($query->result() as $rows)
							{
								$qtys = $rows->qty;
						?> 						
                        <!-- <a href="#"><span class="ct-topBar-basket-cart"><i class="fa fa-fw fa-shopping-cart"></i> Cart : </span><span class="ct-topBar-basket-quantity"><?php echo $qtys; ?> item(s)</span><span class="ct-topBar-basket-price"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo number_format($grand_total, 2); ?></span></a> -->
						<?php } ?>
                        <div class="ct-topBar-basket-info">
						<?php 
							$grand_total = 0;
							$qty_barang=0;	
							$total_ongkir=0;
							
							foreach($carts as $rowcart){ 
								$id = $rowcart['serial'];
								$name = $rowcart['name'];
								$qtys = $rowcart['qty'];
								$prices = $rowcart['price'];
								$total=$prices*$qtys;	
								$rowid=$rowcart['id'];
								$ongkir = 15000;
						?>
						<?php $qty_barang = $qty_barang+$qtys; ?>
						<?php $total_ongkir=$qty_barang*$ongkir; ?>						
                            <?php
                                $this->db->where('serial', $id);
                                $query = $this->db->get('property');

                                foreach ($query->result() as $row)
                                {
                            ?>

                            <div class="ct-cartItem">
                                <div class="ct-cartItem-image pull-left">
								<a href="<?php echo base_url() ?>productdetail/<?php echo $id; ?>">
                                    <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
								</a>
                                </div>
                                <div class="ct-cartItem-title">
                                    <?php echo $row->name; ?>
                                </div>
                                <div class="ct-cartItem-price">
                                    Rp. <?php echo number_format($prices, 2); ?> x <?php echo $qtys; ?>
                                    <a href="<?php echo base_url(); ?>shopping/deletes/<?php echo $id; ?>">
                                        <img style="float:right" src="<?php echo base_url(); ?>images/delete.png" />
                                    </a>
                                </div>
                                
                                <div class="clearfix"></div>
                            </div>

                            <?php } ?>
							<?php } ?>
                        
                            <!--
                            <div class="ct-cartSubtotal">
                                <div class="pull-left ct-fw-600">Subtotal</div>
                                <div class="pull-right ct-fw-600">Rp. <?php //echo number_format($grand_total, 2); ?></div>
                                <div class="clearfix"></div>
                            </div>
							-->
                            <div class="ct-cartGoNext text-uppercase ct-u-paddingBoth20">
                                <a class="btn btn-default ct-u-width-49pc" href="<?php echo base_url(); ?>mycart/" role="button">View Cart <i class="fa fa-angle-double-right fa-fw"></i></a>
                                <a class="btn btn-default pull-right ct-u-width-49pc" href="<?php echo base_url(); ?>cart/" role="button">Checkout <i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>


                    </div>
					
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <!-- &nbsp; &nbsp;&nbsp;<span class="caret"></span> -->
                        </button>
                        <!--
						<ul class="dropdown-menu" role="menu">
                            
                        </ul>
						-->
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <!--&nbsp;&nbsp;&nbsp; <span class="caret"></span> -->
                        </button>
						<!--
                        <ul class="dropdown-menu" role="menu">
                            
                        </ul>
						-->
                    </div>
                </div>				
					
				<?php } ?>
				
            </div>
        </div>

        
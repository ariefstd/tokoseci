 
            <!-- 
            
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

                    <?php
                     // Create form and send all values in "product/update_cart" function.
                    //echo form_open('product/update_cart');
                    $grand_total = 0;
                    $i = 1;

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
                       <?php //echo $i++; ?>
                      <?php echo $item['name']; ?>
                                $ <?php echo number_format($item['price'], 2); ?>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                         
                                $ <?php echo number_format($item['subtotal'], 2) ?>
                              
                            <?php 
                            // cancle image.
                            $path = "<img src='http://localhost/php_ci_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                            echo anchor('shopping/remove/' . $item['rowid'], $path); ?>
                     <?php endforeach; ?>

		<?php endif; ?>
        -->
<style type="text/css">
	.nav > li > a{
	padding-top:15px;width: auto;
}
.list-group-item-menu{
	border:1px solid #ddd;margin-bottom:-1px;padding:10px 15px;display: block;position: relative;
	margin-right:10px;
	margin-left: 5px;
}
</style>
         
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/logo.png" alt="" class="img-flexible" /></a>
            	<!-- <a class="navbar-brand" href="<?php echo base_url(); ?>shopping"><img src="<?php echo base_url(); ?>images/logo.png" alt="" class="img-flexible" /></a> -->
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                <!-- <li><a href="#">FREE SHIPPING</a></li> -->
                
                <li><a href="<?php echo base_url(); ?>shopping">SHOPPING</a></li>
                
				   <!--
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY<b class="caret"></b></a>
                    
                        <ul class="dropdown-menu">
	<?php
		//$this->db->count_all_results('property');
		//$this->db->where('serial', $serial);
		//$this->db->select_sum('property.manufacture_id');
		$this->db->from('property');
		$this->db->join('manufacturers', 'manufacturers.id = property.manufacture_id');
		$this->db->group_by("manufacturers.name"); 		
		$query = $this->db->get();
			foreach ($query->result() as $product)
			{
				
                $id = $product->serial;
                $name = $product->name;
                $description = $product->description;
                $price = $product->price;
                
                
		//$this->db->select('*');
		//$query = $this->db->get();
	?>
                        	<li style="text-transform:capitalize;"><a href="<?php echo base_url(); ?>category/category_view/<?php echo $id ?>"><?php  echo $name; ?></a></li>
	<?php } ?>
							<li class="divider"></li>
                            <li><a href="http://member.airkali.com/" onClick="centeredPopup(this.href,'myWindow','550','475','no');return false">Register member</a></li>                            
                            <li class="divider"></li>
							<li><a href="<?php echo base_url(); ?>admin">My Admin Room 13414</a></li>                            
                            
                        </ul>
                    </li>
					-->
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
                    <!-- <li><a href="<?php echo base_url(); ?>cart/cart_view/<?php //echo $id; ?>">CART&nbsp;&nbsp;<span class="badge pull-right" style="margin-top: 2px"><?php echo $qty; ?></span></a></li> -->
                </ul>
            </div>
        </nav>
        
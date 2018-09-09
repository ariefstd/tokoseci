
    <style>
		.ct-specialsDescription .btn {
			position:relative;
			padding:10px 5px;
		}
		.ct-specialsDescriptions .btn {
			float:right;
			padding:10px 5px;
			margin:10px;
		}		
		.ct-productShop--smaller{
			max-width:261px;
		}
		.list-inline > li{
			padding:0px;
		}
		.list-inline{
			margin-left:25px;
		}
		.ct-productShop{
			border-right:0px;
		}
    </style>
    <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>
</head>

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php //$this->load->view('header'); ?>

        <div class="ct-contentWrapper">
            <div class="container">
                <!-- FIRST SHOP ELEMENTS SLIDER - FEATURED ITEMS -->
                <div class="row">
					<?php  ?>
					<div class="col-md-3">
                        <div class="ct-u-marginBoth20">
                            <div class="widget">
								<div class="widget-inner">
									<h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop35">Brands</h4>
									<ul class="ct-productCategories ct-u-paddingTop30">
										<li><a href="#">Huruf-huruf Ajaib - </a><span>(7)</span></li>
										<li><a href="#">Angka yang pintar - </a><span>(5)</span></li>
										<li><a href="#">Pesan yang bermanfaat - </a><span>(1)</span></li>                                    
									</ul>
								</div>
							</div>
							<div class="widget">
                            <div class="widget-inner">
                                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left">Specials</h4>
                                <div class="ct-specials ct-u-marginBoth20">
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/wraper.jpg" data-zoom-image="images/specials-item-large.jpg" alt="">
                                    <div class="ct-specialsDescriptions">																		
                                        <div class="texte" style="padding:10px">
										<br />
											<h4>Hiasan Pengingat</h4>
											Rp. <del>150.00</del> Rp. 12,500.00
										</div>
                                        <a class="btn btn-default" href="#" role="button"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
							</div>
                        </div>
                    </div>
					<?php ?>
					<div class="col-md-9">
						<div class="ct-u-marginBoth20">
							<div class="widget">
								<div class="widget-inner">
									<h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop35">
										<?php if($productcat=='huruf'){echo "Huruf-huruf Ajaib";} ?>
										<?php if($productcat=='angka'){echo "Angka yang Pintar";} ?>
										<?php if($productcat=='pesan'){echo "Pesan yang Baik";} ?>
										<?php if($productcat=='puzzle'){echo "Koleksi Permainan Puzzle";} ?>
										<?php if($productcat=='tradisional'){echo "Koleksi Permainan Tradisional";} ?>
										<?php if($productcat=='modern'){echo "Koleksi Permainan Modern";} ?>
										<?php if($productcat=='edukasi'){echo "Koleksi Permainan Edukasi";} ?>
									</h4>
									<ul class="ct-productsList list-unstyled list-inline">
									<?php
									
									// "$products" send from "shopping" controller,its stores all product which available in database. 
									foreach ($results as $product) {
										$id = $product['serial'];
										$name = $product['name'];
										$description = $product['description'];
										$price = $product['price'];
										$imagename = $product['image_name'];
										$id_key = $product['id_key'];
										$web = $product['web'];
									?> 
									<?php //echo $id; echo "<br>"; ?>                               
										
										<li>
											<div class="ct-productShop ct-productShop--zoom ct-productShop--smaller">
												<div class="ct-productShop-category">
													<span class="ct-productShop-h5"><?php echo $web; ?></span>
													<div class="clearfix"></div>
													<div class="text-center">                                                
														<img class="ct-js-zoomImage-" src="<?php echo base_url() ."images/". $product['image_name'] ?>" width="225" height="200">
													</div>
												</div>
												<form action="<?php echo base_url(); ?>shopping/add_index" method="post">
												<div class="ct-productShop-content">
													<div class="ct-productShop-content-description">
														
														<a href="<?php echo base_url() ?>productdetail/<?php echo $id_key ?>">
															<h3>"<?php echo $name; ?>"<br></h3>
															<span>Rp. <?php echo number_format($price,2); ?></span>
														</a>
														
														<span class="ct-productShop-shopCart">
															<?php
																/*
																echo form_type('id', $id);
																echo form_hidden('name', $name);
																echo form_hidden('price', $price);
																echo form_hidden('description', $description);
																*/
															?>

															<input type="hidden" name="id" value="<?php echo $id ?>" />
															<input type="hidden" name="name" value="<?php echo $name ?>" />
															<input type="hidden" name="price" value="<?php echo $price ?>" />
															<input type="hidden" name="description" value="<?php echo $description ?>" />
															<input type="hidden" name="qty" value="1" style="width: 75px"/>															
														</span>														
													</div>													
												</div>
												<div class="ct-productShop-content">
													<div class="ct-specialsDescription" style="width:100%">
														<button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart fa-fw"></i></button>
													</div>
												</div>
												</form>
												
												<div class="clearfix"></div>
												<?php //echo $this->pagination->create_links(); ?>
											</div>
										</li>
									<?php } ?>
									</ul>
									<div class="ct-pages pull-right">
									<ul class="ct-numerPages list-unstyled list-inline">                                        
                                        <li><a href="#"><?php echo $this->pagination->create_links(); ?></a></li>
                                    </ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>						
					
                
                <!-- SECOND SHOP ELEMENTS SLIDER - LATEST PRODUCTS -->
                <h4 class="ct-headerBox ct-u-borderBottom3 text-center ct-u-paddingBottom15 ct-u-paddingTop55">Barang terbaru</h4>
                <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
            <?php
            
            // "$products" send from "shopping" controller,its stores all product which available in database. 
            foreach ($latests as $latest) {
                $id = $latest['serial'];
                $name = $latest['name'];
                $description = $latest['description'];
                $price = $latest['price'];
                $imagename = $latest['image_name'];
				$id_key = $latest['id_key'];
                $web = $latest['web'];
            ?> 
                        <div class="item">
                            <div class="ct-productShop ct-productShop-zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5"><?php echo $web; ?></span>
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url() ?>productdetail/<?php echo $id_key ?>">
										<img height="250px" src="<?php echo base_url() ?>images/<?php echo $imagename; ?>">
									</a>
                                </div>
								<form action="<?php echo base_url(); ?>shopping/add_index" method="post">
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="<?php echo base_url() ?>productdetail/<?php echo $id_key ?>">
                                            <h3><?php echo $name; ?> </h3>
                                            <span>Rp. <?php echo number_format($price,2); ?></span>
                                        </a>
                                        <span class="ct-productShop-shopCart"> 
											
												<?php
                                                        /*
                                                        echo form_type('id', $id);
                                                        echo form_hidden('name', $name);
                                                        echo form_hidden('price', $price);
                                                        echo form_hidden('description', $description);
                                                        */
                                                        ?>
                                                        <input type="hidden" name="id" value="<?php echo $id ?>" />
                                                        <input type="hidden" name="name" value="<?php echo $name ?>" />
                                                        <input type="hidden" name="price" value="<?php echo $price ?>" />
                                                        <input type="hidden" name="description" value="<?php echo $description ?>" />
                                                        <input type="hidden" name="qty" value="1" style="width: 75px"/> 

														<?php
															$this->db->where('productid', $id);
															$this->db->select('*');
															$this->db->select_sum('quantity');
															$this->db->from('order_detail');
															$this->db->join('property', 'property.serial = order_detail.id');

															$query = $this->db->get();
															foreach ($query->result() as $rows)
															{
																$total_qty = $rows->quantity;
																$qty = $rows->qty;
																//echo $total_qty;
																//echo "<br>".$qty;
																if ($total_qty > $qty){

																}else{
														?>
														<?php 
																} 
															}
														?>								
																					
                                            <!--<a class="btn btn-default btn-hidden" href="#" role="button"><i class="fa fa-chain fa-fw"></i></a>-->
                                        </span>
                                    </div>
                                </div>
								<div class="ct-productShop-content">
									<div class="ct-specialsDescription" style="width:100%">
										<button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart fa-fw"></i></button>
									</div>
								</div>
								</form>									
                            </div>
							
                        </div>
            <?php } ?>

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

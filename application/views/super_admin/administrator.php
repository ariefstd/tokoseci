

    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
</head>


            

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php $this->load->view('super_admin/header'); ?>

        <div class="ct-contentWrapper">


            <div class="container">
                <div class="row">
                    <div class="col-md-8">

				<?php
                  // All values of cart store in "$cart". 
                  //if ($cart = $this->cart->contents()): ?>				
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Administrator </h4>
                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">Administrator control room management and user website </div>
                        
                        <form class="form-horizontal form-signin ct-u-paddingBottom20" method="post" action="<?php echo base_url(); ?>admin/administrator">
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
                                                <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Remember my password</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="pull-right ct-forgotPassword">
                                        <a href="#" class="ct-forgotPassword-text">Lost your Password?</a>
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
                    
                </div>
            </div>


            <!-- PreFOOTER -->
            <div class="container">
                <div class="ct-dividedSection ct-u-paddingTop60">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
							
                            <div class="ct-dividedSection-left">
                                <!-- <h3>Daftarkan newsletter pada kami</h3> -->
                                <div class="ct-contactForm">
                                    <div class="successMessage alert alert-success" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Terima kasih!
                                    </div>
                                    <div class="errorMessage alert alert-danger" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Maaf! Kesalahan terjadi. Silahkan ulangi lagi.
                                    </div>	
									<!--
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
										<!--										
										</div>
									</form>
									-->
                                </div>
                            </div>
							
                        </div>
						
                        <div class="col-md-5 col-sm-12">
							<!--
                            <div class="ct-dividedSection-right">
                                <img src="<?php //echo base_url() ?>images/prefooter-diamond.png" class="text-right pull-left" alt="Diamond Ring">
                                <h3 class="text-uppercase text-right">Anda punya pertanyaan untuk kami ?</h3>
                                Silahkan hubungi kami langsung untuk pertanyaan seputar permainan edukasi <a href="#">Hubungi langsung</a> 
                                <div class="ct-dividedSection-right-triangle hidden-sm hidden-xs"></div>
                            </div>
							-->
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


    </div>


    <!-- JavaScripts files -->


</body>

</html>
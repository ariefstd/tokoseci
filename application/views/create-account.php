<?php $email = $this->session->userdata('email_address'); ?>

    
    <script src='https://www.google.com/recaptcha/api.js'></script>

   <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->


    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script>
    function sameAsAbove(){    
      if($('#sameas').is(":checked")) {
            $("#s_fname").val($("#b_fname").val());
            $("#s_lname").val($("#b_lname").val());
            $("#s_email").val($("#b_email").val());
            $("#s_phone").val($("#b_phone").val());
            $("#s_address").val($("#b_address").val());
            $("#s_city").val($("#b_city").val());
            $("#s_zip").val($("#b_zip").val());
            $("#s_country").val($("#b_country").val());
            
          }
          else{
            $("#s_fname").val('');
            $("#s_lname").val('');
            $("#s_phone").val('');
            $("#s_address").val('');
            $("#s_city").val('');
            $("#s_zip").val('');
            $("#s_country").val('');           
          }       
    }    
    </script>

    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
</head>
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

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php //$this->load->view('header'); ?>

        <div class="ct-contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Menjadi Member</h4>
                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">Sangat mudah...</div>


                        <form class="form-horizontal" action="<?php echo base_url() ?>insert_reg/" method="post">
                            <div class="form-group">
                                <label for="b_fname" class="col-sm-2 control-label">Nama Depan*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fname" id="b_fname" required>
                                </div>                                 
                            </div>
                            <div class="form-group">
                                <label for="b_lname" class="col-sm-2 control-label">Nama Belakang*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lname" id="b_lname" required>
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="b_phone" class="col-sm-2 control-label">Phone*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="b_phone" name="phone" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_email" class="col-sm-2 control-label">Email*</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="b_email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_password" class="col-sm-2 control-label">Password*</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="b_password" name="password" required>
                                </div>
                            </div>      
                            <div class="form-group">
                                <label for="company" class="col-sm-2 control-label">Company</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_address" class="col-sm-2 control-label">Alamat*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="b_address" name="address" placeholder="Street Address" required>
                                    <div class="ct-u-paddingTop10">
                                        <input type="text" class="form-control" placeholder="Apartment, Unit, Suite, etc." name="addr" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_city" class="col-sm-2 control-label">Kota*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="b_city" name="city" required>
                                </div>
                            </div> 
                           <div class="form-group">
                                <label for="b_zip" class="col-sm-2 control-label">Zip Code*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="b_zip" name="postcode" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="b_country" class="col-sm-2 control-label">Negara*</label>
                                <div class="col-sm-10">
                                    <select class="ct-select ct-select--full" id="b_country" name="country">
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
                            </div>


                            <div class="form-group">
                                <label for="country" class="col-sm-2 control-label">Kategori*</label>
                                <div class="col-sm-10">
                                    <select class="ct-select ct-select--full" id="category" name="category">                                        
                                        <?php                            
                                            foreach ($getmembers as $member){
                                                $cd = $member['id'];
                                                $name = $member['category'];
                                        ?>                                        
                                        <option value="<?php echo $cd ?>"><?php echo $name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
 

                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">Alamat pengiriman</div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-left ct-rememberPassword">
                                    <div class="checkbox">
                                        <input type="checkbox" id="sameas" value="1" onclick="sameAsAbove()">                                       
                                        <label for="sameas">
                                            <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Jika sama dengan diatas</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="s_fname" class="col-sm-2 control-label">Nama Depan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_fname" id="s_fname">
                            </div>                                 
                        </div>  
                        <div class="form-group">
                            <label for="s_lname" class="col-sm-2 control-label">Nama Belakang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_lname" id="s_lname">
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="s_email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="s_email" id="s_email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="s_phone" class="col-sm-2 control-label">No HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_phone" id="s_phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="s_address" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_address" id="s_address" placeholder="Street Address">                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="s_city" class="col-sm-2 control-label">Kota</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_city" id="s_city">
                            </div>
                        </div> 
                       <div class="form-group">
                            <label for="s_zip" class="col-sm-2 control-label">Zip Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="s_zip" id="s_zip" >
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="s_country" class="col-sm-2 control-label">Negara*</label>
                                <div class="col-sm-10">
                                    <select class="form-control ct-select--full" id="s_country" name="s_country">
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
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <!--<div class="g-recaptcha" data-sitekey="6Ld7mxITAAAAAF0YBK_BuauP_bYNoGg0C1Nh9heB"></div>-->
                                    <!-- <div id="html_element"></div> -->
                                    <!-- <div class="g-recaptcha" data-sitekey="6LfXyCwUAAAAAG6ZxZnSeK5q-RPcBZEyyo5ze2Ou"></div> -->
                                </div>
                            </div>  

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">
                                        Registrasi <i class="fa fa-long-arrow-right fa-fw"></i>
                                    </button>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="ct-privacy">
                                        Dengan ini saya menyatakan setuju dengan ketentuan yang berlaku, saya menerima segala ketentuan yang dikeluarkan oleh <a href="product-policies#">EDolanan .com Terms and Conditions</a> and <a href="privacy#">Privacy Policy</a>.
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="col-md-4">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Ikuti kami diInternet</h4>
                        <div class="ct-u-paddingBottom20 ct-u-paddingTop30">
                            <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                  <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                            </ul>
                        </div>
                        <div class="tweets_display">

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


    
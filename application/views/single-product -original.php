<?php 
//$email = $this->session->userdata('email_address'); 

?>
<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from diana.html.themeplayers.net/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:45:36 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="EDolanan .com">
    <meta name="author" content="EDolanan .com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>images/favicon/apple-icon-180x180.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>images/favicon/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="<?php echo base_url(); ?>images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url() ?><?php echo base_url(); ?>images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>EDolanan .com</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/select2.css">

   <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->


    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
	<style>
		.ct-specialsDescription .btn {
			position:relative;
			padding:10px 5px;
		}
	</style>
</head>

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php //$this->load->view('header'); ?>

        <div class="ct-contentWrapper">
            <div class="container">

    <?php
        $this->db->where('serial', $serial);
        $query = $this->db->get('property');
            $hasil = $query->result();

            foreach ($hasil as $product)
            {
                $id = $product->serial;
                $web = $product->web;
                $name = $product->name;
                $description = $product->description;
                $price = $product->price;
                //$cond = $product->cond;
                //$condition = $product->condition;
    ?>

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop40"><?php echo $web ?></h4>
                        <div class="ct-productSection ct-u-paddingBoth50">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="ct-productGallery ct-js-popupGallery" data-snap-ignore="true">
                                        <div id="sync1" class="owl-carousel">
<?php
//  put code for many of detail if you have ...
////////////////////////////////////////////////
        $this->db->where('serial', $serial);
        $query1 = $this->db->get('property');
    
    foreach ($query1->result() as $row1)
    {
        $image = $row1->image_name;
                                ?>

<?php
for ( $counter = 1; $counter <= 6; $counter ++) {

?>
                                            <div class="item">
                                                <a href="<?php echo base_url(); ?>images/<?php echo $image; ?>" class="ct-js-magnificPopupImage"><img src="<?php echo base_url(); ?>images/<?php echo $image; ?>" alt="Product 1" width="461" height="449"></a>
                                            </div>
<?php } ?>
    <?php } ?>                                        
                                        </div>
                                        <div id="sync2" class="owl-carousel ct-u-paddingBoth20">
<?php
//  put code for many of detail if you have ...
////////////////////////////////////////////////

        $this->db->where('serial', $serial);
        $query2 = $this->db->get('property');
    foreach ($query2->result() as $row2)
    {
        $image = $row2->image_name;
		$id=$row2->id_key;
                                ?>                                             

<?php
for ( $counter = 1; $counter <= 6; $counter ++) {

?>

                                            <div class="item">
                                                <img src="<?php echo base_url(); ?>images/<?php echo $image; ?>" alt="Product 3" width="96" height="90">
                                            </div>
<?php } ?>

    <?php } ?>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-7">
                                    <div class="ct-productCustomization">
                                        <h3><?php echo $name ?></h3>
										<p><?php echo $id ?></p>
                                        <div class="ct-categoryDivider">
                                            <button class="btn btn-sm btn-default">Tambahkan ke wishlist</button>
                                        </div>
                                        <div class="ct-price">
                                            <span class="ct-u-size24"><del>&nbsp;</del></span>
                                            <span class="ct-u-colorBlack ct-u-size40">Rp. <?php echo number_format($price,2) ?></span><br />
											<span class="ct-u-size24"><del>&nbsp;</del></span>
											<span class="ct-u-colorBlack ct-u-size20"><?php echo "Rp. ".number_format($ongkir=15000,2); ?> ongkir*</span>
                                            <span class="ct-u-size15">&nbsp;</span>
                                        </div>
                                        <div class="ct-code ct-u-paddingBoth20">
                                            <div class="pull-left ct-u-paddingRight15">
                                                <span class="ct-code-black">Kode</span><span class="ct-code-grey"><?php echo $web ?></span>
                                            </div>
                                            
                                            <div class="clearfix"></div>
                                        </div>
                                        <!--<div class="ct-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star ct-u-colorGrey"></i>
                                            <i class="fa fa-star ct-u-colorGrey"></i>
                                            <div class="ct-reviews">
                                                <a href="#">2 customer reviews</a>
                                            </div>
                                        </div>-->
                                        <!--<form action="#">
                                            <div class="ct-pincode ct-u-paddingBoth20">
                                                <div class="ct-pincodeBox">
                                                    <span>Check Availability At:</span><input type="text" class="form-control" placeholder="enter your pincode">
                                                </div>
                                                <button class="btn btn-default btn-sm" type="submit">Check</button>
                                                <div class="clearfix"></div>
                                            </div>
                                        </form>-->

                                        <form action="<?php echo base_url(); ?>shopping/add_detail" method="post">
                                            <!--<div class="ct-productSize">
                                                <div class="ct-u-size16 ct-u-paddingBottom10">Select Size:</div>
                                                <div class="">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <span>5</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <span>6</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> <span>7</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"> <span>8</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5"> <span>9</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6"> <span>10</span>
                                                    </label>
                                                    <a href="#" class=""><i class="fa fa-fw fa-file-text-o"></i> Ring Size Guide</a>
                                                </div>
                                            </div>-->
                                            <!--<div class="ct-u-size16 ct-u-paddingTop10">Select Color:</div>
                                            <select class="ct-js-colorSelector">
                                                <option value="0" data-color="#d2a48a" selected="selected">salmon</option>
                                                <option value="1" data-color="#e1c99b">yellow</option>
                                                <option value="2" data-color="#deddd9">grey</option>
                                            </select>-->

                                            <input type="hidden" name="id" value="<?php echo $id ?>" />
                                            <input type="hidden" name="name" value="<?php echo $name ?>" />
                                            <input type="hidden" name="price" value="<?php echo $price ?>" />
                                            <input type="hidden" name="description" value="<?php echo $description ?>" />                                    
                                            
                                            <div class="ct-productQuantity">
                                                <div class="ct-u-size16 ct-u-paddingBottom10">Jumlah :</div>
                                                <div class="">

                                                    <select class="ct-select ct-select--small" name="qty">
                                                    <?php
                                                        $i=0;
                                                        $j=5;
                                                        for ($i=1; $i<=10 ; $i++){
                                                    ?>
                                                        <option value="1"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ct-speedbuy ct-u-paddingBoth20">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart fa-fw"></i></button>
                                                <div class="ct-or text-uppercase ct-u-paddingBottom20">
                                                    Add to Cart
                                                </div>
                                                
                                            </div>
                                        </form>


										<div class="ct-u-size16 ct-u-paddingBottom10">More Info:</div>
										<p>Permainan kayu pilihan. Dibuat dengan bahan yang bermutu tinggi dan bahan yang digunakan tidak berbahaya dan aman untuk anak-anak.<br>
                                            Produk yang disarankan.<br>
                                            Silahkan hubungi kami untuk keterangan produk lebih lanjut.
                                        </p>
										<div class="ct-socialSection ct-u-paddingTop10">
                                        <span>Share this product:</span>
                                        <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                            <li><a href="#" data-toggle="tooltip" title="Email to a friend."><i class="fa fa-envelope"></i></a></li>
                                              <li><a href="#" data-toggle="tooltip" title="Share on facebook."><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Share on twitter."><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                               
                    </div>
                </div>
				<?php } ?>
<!--                                            -->
				
<div class="ct-u-paddingBottom50 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTopRight" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                        
                                <?php
		//$this->db->where('status', '2');
		$this->db->order_by('serial','RANDOM');
		$sqlStr = $this->db->get('property',50);

    foreach ($sqlStr->result() as $rows)
    {
    	$id = $rows->serial;
        $image = $rows->image_name;
        $name = $rows->name;
        $web = $rows->web;
        $price = $rows->price;
        $old_price = $price + (0.15*($price));

                                ?> 

                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5"><?php echo $web; ?></span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage--" src="<?php echo base_url(); ?>images/<?php echo $image ?>" data-zoom-image="<?php echo base_url(); ?>images/<?php echo $image ?>" alt="" width="225" height="225">
                                </div>
								<form action="<?php echo base_url(); ?>shopping/add" method="post">
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="<?php echo base_url() ?>productdetail/<?php echo $id ?>">
                                            <h3><?php echo $name; ?></h3>
                                            <span><del>Rp. <?php echo number_format($old_price,2) ?></del> <br />Rp. <?php echo number_format($price,2) ?></span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
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
                            </div>
                        </div>
	<?php } ?>                        
                        
                        
                    </div>
                </div>				
				
            </div>

            <!-- No padding here for ct-prefooter - disabled ct-u-paddingTop60 -->

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

        <!-- FOOTER -->
        <footer class="ct-footer ct-u-paddingTop210 ct-u-paddingBottom90">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="ct-footer-image">
                            <img src="<?php echo base_url() ?>images/footer-necklace.png" alt="Golden Necklace">
                        </div>
                    </div>
                                        <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">Pelayanan Customer</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="#">Pemesanan dan Pengiriman</a></li>
                                <li><a href="#">Syarat dan ketentuan</a></li>
                                <li><a href="#">Model pembayaran</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">EDolanan .com</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="about-us.html">Memahami tentang kami</a></li>
                                <li><a href="our-mission.html">Keamanan individu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18 ct-u-paddingBottom20">Media Online</h5>
                        <ul class="ct-socials ct-socials--large ct-socials--white list-inline list-unstyled">
                            <li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="ct-u-bottomFooterBar ct-u-paddingTop40 ct-u-marginTop50">
                        <div class="col-sm-6">
                            <div class="ct-rights">
                                <a href="#">EDolanan .com</a> © Copyright 2017
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

    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>

    <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url() ?>js/device.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.browser.min.js"></script>
    <script src="<?php echo base_url() ?>js/snap.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.appear.js"></script>

    <script src="<?php echo base_url() ?>plugins/headroom/headroom.js"></script>
    <script src="<?php echo base_url() ?>plugins/headroom/jQuery.headroom.js"></script>
    <script src="<?php echo base_url() ?>plugins/headroom/init.js"></script>

    <script src="<?php echo base_url() ?>form/js/contact-form.js"></script>

    <script src="<?php echo base_url() ?>js/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>js/stacktable/stacktable.js"></script>


    <script src="<?php echo base_url() ?>plugins/owl/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>plugins/owl/thumbnail-init.js"></script>
    <script src="<?php echo base_url() ?>plugins/owl/init.js"></script>

    <script src="<?php echo base_url() ?>js/color-selector/colorselector.js"></script>
    <script src="<?php echo base_url() ?>js/color-selector/init.js"></script>

    <script src="<?php echo base_url() ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url() ?>js/elevate-zoom/init.js"></script>

    <script src="<?php echo base_url() ?>js/nouislider/jquery.nouislider.all.js"></script>
    <script src="<?php echo base_url() ?>js/nouislider/init.js"></script>

    <script src="<?php echo base_url() ?>js/magnific-popup/jquery.magnific-popup.min.js"></script>


    <script src="<?php echo base_url() ?>js/stars-rating/rating.js"></script>

    <script src="<?php echo base_url() ?>js/main.js"></script>
<!-- Mirrored from diana.html.themeplayers.net/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:46:15 GMT -->
</html>
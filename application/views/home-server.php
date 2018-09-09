<?php 
$email = $this->session->userdata('email_address'); 

?>
<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from diana#.themeplayers.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:40:41 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Jewel of Equator">
    <meta name="author" content="DeForme">
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
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Jewel of Equator</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/select2.css">

    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->

    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>
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

    <nav class="ct-menuMobile">
        <ul class="ct-menuMobile-navbar">
            <li><a href="<?php echo base_url() ?>"><i class="fa fa-home fa-fw"></i> Home</a></li>
            <li class="dropdown">
                <a href="<?php echo base_url() ?>collection/"><i class="fa fa-list-ol fa-fw"></i> Collections</a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> JAI Jewelry</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Dynamic Silver</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Adi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Learn</a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> About Us</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Our Mission</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Testimonials</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Pricing</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Our services</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Our Designers</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> FAQ</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-dot-circle-o fa-fw"></i> About</a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                    <li><a href="r#"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
                </ul>
            </li>
            <li><a href="contact#"><i class="fa fa-phone-square fa-fw"></i> Contact</a></li>
        </ul>
    </nav>

    <div class="ct-shopMenuMobile">
        <!-- Language Dropdown -->
        <div class="btn-group">
            <button type="button" class="btn btn-white btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                EN <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">FR</a></li>
                <li><a href="#">ES</a></li>
                <li><a href="#">DE</a></li>
            </ul>
        </div>
        <!-- Currency Dropdown -->
        <div class="btn-group">
            <button type="button" class="btn btn-white btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                $ <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">EUR €</a></li>
                <li><a href="#">GBP £</a></li>
            </ul>
        </div>
        <nav class="ct-shopMenuMobile-navbar">
            <ul class="list-unstyled">
                <li><a href="<?php echo base_url() ?>administratoris/"><i class="fa fa-user fa-fw"></i> Login</a></li>
                <li><a href="<?php echo base_url() ?>register/"><i class="fa fa-pencil fa-fw"></i> Create an account</a></li>
                <li><a href="<?php echo base_url() ?>my-account/"><i class="fa fa-cog fa-fw"></i> My Account</a></li>
                <li><a href="<?php echo base_url() ?>cart/"><i class="fa fa-archive fa-fw"></i> Checkout</a></li>
            </ul>
        </nav>

        <div class="ct-shopMenuMobile-basket">
            <a href="my-cart#">
            <i class="fa fa-shopping-cart fa-fw"></i> My Basket <span class="ct-topBar-basket-quantity"><?php echo $qty; ?></span></a>
                <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>

            <div class="ct-shopMenuMobile-basketContainer">
                    <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    //echo form_open('cart/update_cart');
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

                <ul class="ct-shopMenuMobile-basketProducts list-unstyled">
                    <li class="ct-shopMenuMobile-basketProduct">
                        <a href="single-product#">
                            <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
                            <div class="ct-shopMenuMobile-basketProductContent">
                                <div class="ct-shopMenuMobile-basketProductTitle"><?php echo $item['name']; ?></div>
                                <div class="ct-shopMenuMobile-basketProductPrice ct-fw-600">$<?php echo number_format($item['price'], 2); ?></div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
                        <?php } ?>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                    <?php endforeach; ?>
                <div class="ct-shopMenuMobile-basketWrap ct-shopMenuMobile-subTotal ct-fw-600">
                    <div class="pull-left text-uppercase">Subtotal</div>
                    <div class="pull-right">$<?php echo number_format($grand_total, 2); ?></div>
                    <div class="clearfix"></div>
                </div>
            </div>

                 <?php endif; ?>
        </div>


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
            <a class="navbar-brand" href="index#"><img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo"> </a>
            <button type="button" class="navbarShop-toggle">
                <i class="fa fa-fw fa-user"></i>
            </button>
        </div>

        <!-- TOPBAR -->
        <div class="ct-topBar">
            <div class="container">
                <div class="ct-topBar-navigation pull-left">
                    <ul class="list-unstyled">
                        <!--<li><i class="fa fa-fw fa-phone"></i> Call us: 012 345-6789</li>-->
                    <?php
                    if(!$this->session->userdata('is_logged_in')){ ?>                      
                        <li><a href="<?php echo base_url() ?>administratoris/"><i class="fa fa-fw fa-user"></i> <?php echo "Login" ?></a></li>
                        <li><a href="<?php echo base_url() ?>register/"><i class="fa fa-fw fa-pencil"></i> Register</a></li>
                   <?php }else{ ?>
                        <?php
                            $sqlStr  = $this->db->query("SELECT * FROM membership WHERE email_address = '$email'");
                            foreach ($sqlStr->result() as $row){
                                $fname = $row->first_name;
                                $lname = $row->last_name;
                        ?>
                        <li><i class="fa fa-fw fa-user"></i> <?php echo "H, ".$fname ?></li>                        
                        <?php } ?>
                        <li><a href="<?php echo base_url() ?>register/"><i class="fa fa-fw fa-pencil009"></i> &nbsp;</a></li>
                    <?php } ?>    

                    </ul>
                </div>

                <div class="pull-right">
                    <div class="ct-topBar-basket">                        
<!---           -->
                <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
                    
                    <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    //echo form_open('cart/update_cart');
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
                       
                            <?php } ?>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                        <?php endforeach; ?>
                        <?php endif; ?>

                        <a href="#"><span class="ct-topBar-basket-cart"><i class="fa fa-fw fa-shopping-cart"></i> Cart: </span><span class="ct-topBar-basket-quantity"><?php echo $qty; ?> item(s)</span><span class="ct-topBar-basket-price"> - $<?php echo number_format($grand_total, 2); ?></span></a>
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
                                <a href="single-product#">
                                    <div class="ct-cartItem-image pull-left">
                                        <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" alt="Wishlist Product 1">
                                    </div>
                                    <div class="ct-cartItem-title">
                                        <?php echo $item['name']; ?>
                                    </div>
                                    <div class="ct-cartItem-price">
                                        $<?php echo number_format($item['price'], 2); ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>

                            <?php } ?>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            
                        <?php endforeach; ?>
                        <?php echo form_close(); ?>
                        <?php endif; ?>

                            
                            <div class="ct-cartSubtotal">
                                <div class="pull-left ct-fw-600">Subtotal</div>
                                <div class="pull-right ct-fw-600">$<?php echo number_format($grand_total, 2); ?></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ct-cartGoNext text-uppercase ct-u-paddingBoth20">
                                <a class="btn btn-default ct-u-width-49pc" href="<?php echo base_url(); ?>mycart/" role="button">View Cart <i class="fa fa-angle-double-right fa-fw"></i></a>
                                <a class="btn btn-default pull-right ct-u-width-49pc" href="<?php echo base_url(); ?>cart/" role="button">Checkout <i class="fa fa-angle-double-right fa-fw"></i></a>
                            </div>
                        </div>


                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            EN <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">FR</a></li>
                            <li><a href="#">ES</a></li>
                            <li><a href="#">DE</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            $ <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">EUR €</a></li>
                            <li><a href="#">GBP £</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ct-headerWrapper ct-u-paddingBottom40">
            <div class="container">

                <div class="ct-header ct-header--default ct-u-paddingTop30 ct-u-paddingBottom50">
                    <div class="ct-header-navigation">
                        <ul class="list-unstyled list-inline">
                    <?php
                    if(!$this->session->userdata('is_logged_in')){ ?>
                    <?php }else{ ?>
                            <li><a href="<?php echo base_url() ?>my-account/">My Account</a></li>
                    <?php } ?>

                    <?php
                    if(!$this->session->userdata('is_logged_in')){ ?>                      
                        <li><a href="<?php echo base_url(); ?>cart/">Checkout</a></li>
                    <?php }else{ ?>
                        <li><a href="<?php echo base_url(); ?>cart/">Checkout</a></li>
                        <li><a href="<?php echo base_url(); ?>logout/">Logout</a></li>
                    <?php } ?>                            
                            
                        </ul>
                    </div>
                    <div class="ct-header-logo">
                        <a href="index#">
                            <img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo">
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar yamm">
                <div class="container">
                    <ul class="nav navbar-nav ct-navbar--fadeIn">
                        <li class="active">
                            <a href="<?php echo base_url(); ?>">Home</a>                            
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url() ?>collection">Collections</a>
                            <!--        We need here padding-bottom 0 to display properly the image inside this content. Please, don't change paddingBottom.        -->
                            <ul class="dropdown-menu ct-u-paddingBottom0">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>JAI</strong><br><small>Jewelry</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="my-cart#"><i class="fa fa-angle-right fa-fw"></i> Earings</a></li>
                                                    <li><a href="checkout#"><i class="fa fa-angle-right fa-fw"></i> Rings</a></li>
                                                    <li><a href="wishlist#"><i class="fa fa-angle-right fa-fw"></i> Necklaces &amp; Pendants</a></li>
                                                    <li><a href="create-account#"><i class="fa fa-angle-right fa-fw"></i> Bracelets</a></li>
                                                    <li><a href="login#"><i class="fa fa-angle-right fa-fw"></i> Wedding Bands</a></li>
                                                    <li><a href="lost-password#"><i class="fa fa-angle-right fa-fw"></i> Charms</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Dynamic</strong><br><small>Silver</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="my-cart#"><i class="fa fa-angle-right fa-fw"></i> Earings</a></li>
                                                    <li><a href="checkout#"><i class="fa fa-angle-right fa-fw"></i> Rings</a></li>
                                                    <li><a href="wishlist#"><i class="fa fa-angle-right fa-fw"></i> Necklaces &amp; Pendants</a></li>
                                                    <li><a href="create-account#"><i class="fa fa-angle-right fa-fw"></i> Bracelets</a></li>
                                                    <li><a href="login#"><i class="fa fa-angle-right fa-fw"></i> Wedding Bands</a></li>
                                                    <li><a href="lost-password#"><i class="fa fa-angle-right fa-fw"></i> Charms</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 hidden-sm">
                                                <div class="ct-collectionRightPicture">
                                                    <img src="<?php echo base_url() ?>images/main-menu-collection-right-bg.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="about-us#">Learn</a>
 <ul class="dropdown-menu text-uppercase">
                        <li><a href="about-us#">About Us</a></li>
                        <li><a href="our-mission#">Our Mission</a></li>
                        <li><a href="testimonials#">Testimonials</a></li>
                        <li><a href="pricing#">Pricing</a></li>
                        <li><a href="our-services#">Our Services</a></li>
                        <li><a href="our-team#">Our Designers</a></li>
                        <li><a href="faq#">FAQ</a></li>
                    </ul>
                        </li>
                        <li><a href="portfolio-masonry#">About</a></li>                        
                        <li><a href="contact#">Contact</a></li>
                    </ul>
                    <div id="ct-js-navSearch" class="ct-navbar-navSearch navbar-search pull-right">
                        <i class="fa fa-fw fa-search"></i>
                    </div>
                    <div class="ct-navbar-search">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Please type keywords..." required>
                            </div>
                            <button class="ct-navbar-search-button" type="submit">
                                <i class="fa fa-search fa-fw"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="ct-js-owl owl-carousel ct-mainCarousel ct-mainCarousel--arrowsMiddle" data-snap-ignore="true" data-pagination="false" data-items="1" data-autoPlay="false" data-bg="true" data-animations="true" data-height="525" data-navigation="true">
            <div class="item" data-bg="<?php echo base_url() ?>images/slider-image.jpg">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h1 class="ct-u-colorBlack">
                                    <span class="animated" data-fx="fadeIn">Customized Diamond</span>
                                    <br>
                                    <span class="ct-u-colorWhite animated" data-fx="fadeIn" data-time="200">& Wedding Rings</span></h1>
                                <div class="text-center ct-u-paddingTop15 ct-u-paddingBottom30">
                                    <hr class="hr-slider animated" data-fx="fadeIn">
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-blackTransparent animated" data-fx="fadeInUp" href="collections#" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="ct-btn-shadowBar text-left animated" data-fx="fadeInUp">
                        <div class="container">
                            <i class="fa fa-angle-right fa-fw"></i> View all Christmas Offers
                        </div>
                    </a>
                </div>
            </div>
            <div class="item" data-bg="<?php echo base_url() ?>images/slider-image2.jpg">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4 col-sm-12">
                                <h1 class="ct-u-colorBlack text-right animated" data-fx="fadeInRight">Experience The Breathtaking</h1>
                                <h2 class="ct-u-colorWhite text-right animated" data-fx="fadeInRightBig">JAI Collections</h2>
                                <div class="text-right ct-mobileCenter ct-u-paddingTop40">
                                   <a class="btn btn-blackTransparent btn-blackTransparent--white animated" data-fx="bounceInUp" href="collections#" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="ct-btn-shadowBar text-left animated" data-fx="fadeInUp">
                        <div class="container">
                            <i class="fa fa-angle-right fa-fw"></i> View all JAI Offers
                        </div>
                    </a>
                </div>
            </div>
            <div class="item" data-bg="<?php echo base_url() ?>images/slider-image3.jpg">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4 col-sm-12">
                                <h1 class="text-right ct-u-colorWhite animated" data-fx="fadeInRight">Inspired By Past, Designed</h1>
                                <h2 class="text-right ct-u-colorWhite animated" data-fx="fadeInRightBig">For Future</h2>
                                <div class="text-right ct-mobileCenter ct-u-paddingTop40">
                                   <a class="btn btn-blackTransparent btn-blackTransparent--white animated" data-fx="bounceInUp" href="collections#" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="ct-btn-shadowBar text-left animated" data-fx="fadeInUp">
                        <div class="container">
                            <i class="fa fa-angle-right fa-fw"></i> View all Nickelodeon Offers
                        </div>
                    </a>
                </div>
            </div>
            <div class="item" data-bg="<?php echo base_url() ?>images/slider-image4.jpg">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h1 class="ct-u-colorWhite animated" data-fx="fadeInLeft">Unique Jewelry</h1>
                                <h2 class="ct-u-colorWhite animated" data-fx="fadeInLeftBig">Large Selection</h2>
                                <div class="text-left ct-mobileCenter ct-u-paddingTop40">
                                    <a class="btn btn-transparentWhite animated" data-fx="bounceInUp" href="collections#" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="ct-btn-shadowBar text-left animated" data-fx="fadeInUp">
                        <div class="container">
                            <i class="fa fa-angle-right fa-fw"></i> View all Nickelodeon Offers
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="ct-contentWrapper">
            <div class="container">
                <!-- FIRST SHOP ELEMENTS SLIDER - FEATURED ITEMS -->
                <h4 class="ct-headerBox text-center ct-u-borderBottom3 ct-u-paddingBottom15 ct-u-paddingTop55">Featured Items</h4>
                
                <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">

            <?php
            
            // "$products" send from "shopping" controller,its stores all product which available in database. 
            foreach ($products as $product) {
                $id = $product['serial'];
                $name = $product['name'];
                $description = $product['description'];
                $price = $product['price'];
                $imagename = $product['image_name'];
                $web = $product['web'];
            ?>                                                 
                        
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5"><?php echo $web; ?></span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/<?php echo $imagename; ?>" data-zoom-image="<?php echo base_url() ?>images/<?php echo $imagename; ?>" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="<?php echo base_url() ?>collection/detail/<?php echo $id ?>">
                                            <h3><?php echo $name; ?> </h3>
                                            <span>$<?php echo $price; ?></span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                                    <form action="<?php echo base_url(); ?>shopping/add_index" method="post">
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

                                                        <button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart fa-fw"></i></button>
                                                    </form>                                            
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } ?>

                    </div>
                </div>



                <!-- HIGHLIGHTS SECTION -->
                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom15 text-center ct-u-paddingTop55">Highlights</h4>
                <section class="ct-u-paddingTop10">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="ct-u-marginBoth20">
                                <a href="#">
                                    <div class="ct-highlightsItem">
                                        <div class="ct-highlightsItem-content" data-bg="<?php echo base_url() ?>images/highlights-background.jpg">
                                            <span class="ct-highlightsItem-content-firstTitle ct-u-size30 text-uppercase">Free</span>
                                            <br>
                                            <span class="ct-highlightsItem-content-secondTitle ct-u-size34 text-uppercase ct-fw-600">Shipping</span>
                                            <br>
                                            <span class="ct-highlightsItem-content-thirdTitle ct-u-size16">Orders over $200</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ct-u-marginBoth20">
                                <a href="#">
                                    <div class="ct-highlightsItem">
                                        <div class="ct-highlightsItem-content" data-bg="<?php echo base_url() ?>images/highlights-background.jpg">
                                            <span class="ct-highlightsItem-content-firstTitle ct-u-size30 text-uppercase">Get up to</span>
                                            <br>
                                            <span class="ct-highlightsItem-content-secondTitle ct-u-size34 text-uppercase ct-fw-600">20% off</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ct-u-marginBoth20">
                                <a href="#">
                                    <div class="ct-highlightsItem">
                                        <div class="ct-highlightsItem-content" data-bg="<?php echo base_url() ?>images/highlights-background.jpg">
                                            <span class="ct-highlightsItem-content-firstTitle ct-u-size35 text-uppercase">40% off</span>
                                            <br>
                                            <span class="ct-highlightsItem-content-secondTitle ct-u-size28">Mega <span class="ct-fw-600">Sale</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECOND SHOP ELEMENTS SLIDER - LATEST PRODUCTS -->
                <h4 class="ct-headerBox ct-u-borderBottom3 text-center ct-u-paddingBottom15 ct-u-paddingTop55">Latest Products</h4>
                <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Earrings</span>
                                    <div class="clearfix"></div>
                                    <img class="" src="<?php echo base_url() ?>images/latest-item1.jpg" data-zoom-image="<?php echo base_url() ?>images/latest-item1-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Leslie Greene 18K Whiting Gold Square Aria Drop Earrings</h3>
                                            <span>$255.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Earrings</span>
                                    <div class="clearfix"></div>
                                    <img class="" src="<?php echo base_url() ?>images/latest-item2.jpg" data-zoom-image="<?php echo base_url() ?>images/latest-item2-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Frederica Sterlings Silver & 18K Yellow Gold Amethyst</h3>
                                            <span>$289.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="" src="<?php echo base_url() ?>images/latest-item3.jpg" data-zoom-image="<?php echo base_url() ?>images/latest-item3-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Charles Krypell Sterling Silver & 14K Two Tone Gold</h3>
                                            <span>$139.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5-new">New</span>
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="" src="<?php echo base_url() ?>images/latest-item4.jpg" data-zoom-image="<?php echo base_url() ?>images/latest-item4-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Charles Krypell Sterlingoi Silver Cobblestone Textured</h3>
                                            <span>$159.50</span>
                                        </a>
                                       <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Earrings</span>
                                    <div class="clearfix"></div>
                                    <img class="" src="<?php echo base_url() ?>images/latest-item1.jpg" data-zoom-image="<?php echo base_url() ?>images/latest-item1-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Leslie Greene 18K Whiting Gold Square Aria Drop Earrings</h3>
                                            <span>$255.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Earrings</span>
                                    <div class="clearfix"></div>
                                    <img class="" src="<?php echo base_url() ?>images/latest-item2.jpg" data-zoom-image="<?php echo base_url() ?>images/latest-item2-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Frederica Sterlings Silver & 18K Yellow Gold Amethyst</h3>
                                            <span>$289.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="" src="<?php echo base_url() ?>images/latest-item3.jpg" data-zoom-image="<?php echo base_url() ?>images/latest-item3-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Charles Krypell Sterling Silver & 14K Two Tone Gold</h3>
                                            <span>$139.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5-new">New</span>
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="" src="<?php echo base_url() ?>images/latest-item4.jpg" data-zoom-image="<?php echo base_url() ?>images/latest-item4-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Charles Krypell Sterlingoi Silver Cobblestone Textured</h3>
                                            <span>$159.50</span>
                                        </a>
                                       <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- THIRD SHOP ELEMENTS SLIDER - TOP RATED PRODUCTS -->
                <h4 class="ct-headerBox text-center ct-u-borderBottom3  ct-u-paddingBottom15 ct-u-paddingTop55">Top Rated Products</h4>

                <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/rated-item1.jpg" data-zoom-image="<?php echo base_url() ?>images/rated-item1-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Princess-Cut  Framed Milgrain Ring in 14K White Gold</h3>
                                            <span>$245.90</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/rated-item2.jpg" data-zoom-image="<?php echo base_url() ?>images/rated-item2-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Diamond Vintage-Style Ring in 14K White Gold</h3>
                                            <span>$299.00</span>
                                        </a>
                                       <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/rated-item3.jpg" data-zoom-image="<?php echo base_url() ?>images/rated-item3-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Frame Princess Cut Diamond Engagement Ring in 14K White</h3>
                                            <span>$167.90</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/rated-item4.jpg" data-zoom-image="<?php echo base_url() ?>images/rated-item4-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Charles Krypell Sterling Silver & 18K Yellow Gold Python</h3>
                                            <span>$233.50</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/rated-item1.jpg" data-zoom-image="<?php echo base_url() ?>images/rated-item1-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Princess-Cut  Framed Milgrain Ring in 14K White Gold</h3>
                                            <span>$245.90</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/rated-item2.jpg" data-zoom-image="<?php echo base_url() ?>images/rated-item2-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Diamond Vintage-Style Ring in 14K White Gold</h3>
                                            <span>$299.00</span>
                                        </a>
                                       <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/rated-item3.jpg" data-zoom-image="<?php echo base_url() ?>images/rated-item3-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Frame Princess Cut Diamond Engagement Ring in 14K White</h3>
                                            <span>$167.90</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/rated-item4.jpg" data-zoom-image="<?php echo base_url() ?>images/rated-item4-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product#">
                                            <h3>Charles Krypell Sterling Silver & 18K Yellow Gold Python</h3>
                                            <span>$233.50</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart#" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
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
                                <h3>Sign up for our newsletter</h3>
                                <div class="ct-contactForm">
                                    <div class="successMessage alert alert-success" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Thank You!
                                    </div>
                                    <div class="errorMessage alert alert-danger" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Ups! An error occured. Please try again later.
                                    </div>                                  
                                    <form action="//jewelofequator.us12.list-manage.com/subscribe/post?u=8fd087afc74f071f74c3f81da&amp;id=b8da00d05e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
                                <h3 class="text-uppercase text-right">Have a jewelry inquiry?</h3>
                                If you have any  questions regarding our jeweleries please <a href="#">contact us directly</a> or use our contact form to get in touch.
                                <div class="ct-dividedSection-right-triangle hidden-sm hidden-xs"></div>
                            </div>
                        </div>
                    </div>
                    <div class="ct-tooltips text-center ct-u-paddingTop50 ct-u-paddingBottom40">
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
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">Customer service</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="#">Order and Delivery</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Payment Method</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">Jewel of Equator</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="about-us#">About Us</a></li>
                                <li><a href="our-mission#">Privacy and Security</a></li>
                                <li><a href="blog#">Our Guarantee</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18 ct-u-paddingBottom20">Connect With Us</h5>
                        <ul class="ct-socials ct-socials--large ct-socials--white list-inline list-unstyled">
                            <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                            <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="ct-u-bottomFooterBar ct-u-paddingTop40 ct-u-marginTop50">
                        <div class="col-sm-6">
                            <div class="ct-rights">
                                <a href="http://www.deformeinc.com/">DeForme</a> © Copyright 2015
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
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

    

</body>

<!-- Mirrored from diana#.themeplayers.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:44:16 GMT -->
</html>
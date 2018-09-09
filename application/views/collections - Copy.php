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

<!-- Mirrored from diana.html.themeplayers.net/collections.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:45:36 GMT -->
<head lang="en">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>images/favicon/apple-icon-180x180.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>images/favicon/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="<?php echo base_url() ?>images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url() ?>images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Jewel of Equator</title>
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
    <style>
div.pagination {
    font-family:Verdana,Tahoma,Arial,Helvetica,Sans-Serif;
    font-size: 13px;
    text-align:center;
    padding:4px 6px 4px 0;
    background-color:#fff;
    color:#313031;
}
 
div.pagination a {
    color:#0030ce;
    text-decoration:none;
    padding:5px 6px 4px 5px;
    margin:0 3px 0 3px;
    border:1px solid #b7d8ee;
}
 
div.pagination a:hover, div.pagination a:active {
    color:#0066a7;
    border:1px solid #b7d8ee;
    background-color:#d2eaf6;
}
div.pagination span.current {
    padding:5px 6px 4px 5px;
    margin:0 3px 0 3px;
    border:1px solid #b7d8ee;
    font-weight:bold;
    color:#444444;
    background-color:#d2eaf6;
}
    </style>
    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
</head>

 

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php //$this->load->view('header'); ?>

        <div class="ct-contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop55">Dynamic Silver</h4>
                        <p class="ct-u-paddingTop30 ct-u-paddingBottom20 ct-u-size15 text-justify">
                            Every woman loves to accessorize her wardrobe with jewelry. When you shop jewelry online at us, you'll discover a huge assortment of women's jewelry, including the finest and fashion rings, bracelets, necklaces, earrings, charms, pendants, and pins. You'll find fabulous jewelry designs in 14K and 18K gold, stainless steel, bronze, and more.
                        </p>                        
                        <form action="#">
                            <div class="ct-sortingBar ct-u-paddingRight10 ct-u-paddingLeft10">
                                <ul class="ct-sortBy list-inline list-unstyle pull-left ct-u-paddingBoth15">
                                    <li class="ct-showElements is-active" id="ct-js-showTiles">
                                        <a href="#">
                                            <i class="fa fa-th fa-fw"></i>
                                        </a>
                                    </li>
                                    <li class="ct-showElements" id="ct-js-showList">
                                        <a href="#">
                                            <i class="fa fa-th-list fa-fw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <span class="ct-sortBy-text ct-u-paddingRight10">Sort By:</span>
                                        <select class="ct-select ct-select--default">
                                            <option value="price">Price</option>
                                            <option value="newness">Newness</option>
                                            <option value="rating">Rating</option>
                                            <option value="popularity">Popularity</option>
                                        </select>
                                        <span id="test"></span>
                                    </li>
                                </ul>
                                <ul class="ct-showPages list-inline list-unstyled pull-right ct-u-paddingBoth15">
                                    <li>
                                        <span class="ct-u-paddingRight10">Show:</span>
                                        <select class="ct-select ct-select--small">
                                            <option value="nine">9</option>
                                            <option value="eighteen">15</option>
                                            <option value="eighteen">21</option>
                                            <option value="twentyseven">36</option>
                                            <option value="fourtyfive">45</option>
                                            <option value="ninety">90</option>
                                        </select>
                                        <span class="ct-u-paddingLeft10">per page</span>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ct-searchBox ct-u-marginBottom60">
                                <div class="ct-searchBookmark">
                                    <a href="#" class="ct-js-filter">
                                        <div class="ct-searchBookmark-header">Filter by: Price, Silver</div>
                                    </a>
                                    <div class="ct-searchContent">
                                        <div class="ct-searchContent-category ct-searchContent-category--transparent">Price</div>
                                        <div class="ct-searchContent-description">
                                            <div class="ct-searchContent-slider">
                                                <div class="ct-js-noUiSliderPrice ct-u-marginBottom40"></div>
                                                <input type="text" class="form-control" id="lower-value">
                                                <input type="text" class="form-control" id="upper-value">
                                            </div>
                                        </div>
                                        <div class="ct-searchContent-category">Metal</div>
                                        <div class="ct-searchContent-description">
                                            <!-- labels have to be next to each other -->
                                            <label for="checkbox1">
                                                <input type="checkbox" id="checkbox1"><span>18k Yellow Gold</span>
                                            </label><label for="checkbox2">
                                                <input type="checkbox" id="checkbox2"><span>18k White Gold</span>
                                            </label><label for="checkbox3">
                                                <input type="checkbox" id="checkbox3"><span>14k White Gold</span>
                                            </label><label for="checkbox4">
                                                <input type="checkbox" id="checkbox4"><span>14k White Gold</span>
                                            </label><label for="checkbox5">
                                                <input type="checkbox" id="checkbox5"><span>Platinum</span>
                                            </label><label for="checkbox6">
                                                <input type="checkbox" id="checkbox6"><span>Silver</span>
                                            </label><label for="checkbox7">
                                                <input type="checkbox" id="checkbox7"><span>Stainless steel</span>
                                            </label>
                                        </div>
                                        <div class="ct-searchContent-category">Size</div>
                                        <div class="ct-searchContent-description">
                                            <label for="checkbox8">
                                                <input type="checkbox" id="checkbox8"><span>Less than 4mm</span>
                                            </label><label for="checkbox9">
                                            <input type="checkbox" id="checkbox9"><span>4-6mm</span>
                                        </label><label for="checkbox10">
                                            <input type="checkbox" id="checkbox10"><span>7-8mm</span>
                                        </label>
                                        </div>
                                        <div class="ct-searchContent-category">Color</div>
                                        <div class="ct-searchContent-color">
                                            <select class="ct-js-colorSelector">
                                                <option value="0" data-color="#d2a48a" selected="selected">salmon</option>
                                                <option value="1" data-color="#e1c99b">yellow</option>
                                                <option value="2" data-color="#deddd9">grey</option>
                                                <option value="3" data-color="#cd5c5c">indianred</option>
                                                <option value="4" data-color="#6495ed">cornflowerblue</option>
                                                <option value="5" data-color="#8fbc8f">darkseagreen</option>
                                                <option value="6" data-color="#ffd700">gold</option>
                                                <option value="7" data-color="#ffa500">orange</option>
                                                <option value="8" data-color="#db7093">palevioletred</option>
                                                <option value="9" data-color="#696969">dimgrey</option>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                        </div>
                        </form>
                                    <?php //echo $this->table->generate($records); ?>

<?php //echo $this->table->generate($results); ?>
<?php //echo $this->pagination->create_links(); ?>

                        <div class="ct-showProducts ct-showProducts--default">
                            <ul class="ct-productsList list-unstyled list-inline">
            <?php
            
            // "$products" send from "shopping" controller,its stores all product which available in database. 
            foreach ($results as $product) {
                $id = $product['serial'];
                $name = $product['name'];
                $description = $product['description'];
                $price = $product['price'];
                $imagename = $product['image_name'];
                $web = $product['web'];
            ?> 
            <?php //echo $id; echo "<br>"; ?>                               
                                
                                <li>
                                    <div class="ct-productShop ct-productShop--zoom ct-productShop--smaller">
                                        <div class="ct-productShop-category">
                                            <span class="ct-productShop-h5"><?php echo $web; ?></span>
                                            <div class="clearfix"></div>
                                            <div class="text-center">                                                
                                                <img class="ct-js-zoomImage" src="<?php echo base_url() ."images/". $product['image_name'] ?>" width="230" height="190" data-zoom-image="<?php echo base_url() ."images/". $product['image_name'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="ct-productShop-content">
                                            <div class="ct-productShop-content-description">
                                                <div class="ct-productShop-content-description-h5 text-uppercase">Best Seller</div>
                                                <a href="<?php echo base_url() ?>productdetail/<?php echo $id ?>">
                                                    <h3>"<?php echo $name; ?>"<br></h3>
                                                    <span>$<?php echo $price; ?></span>
                                                </a>
                                                <div class="ct-listElementDescription">
                                                    <div class="ct-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star ct-u-colorGrey"></i>
                                                        <i class="fa fa-star ct-u-colorGrey"></i>
                                                        <div class="ct-reviews">
                                                            <a href="single-product.html">2 customer reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class="ct-u-paddingTop10 ct-u-paddingBottom15">
                                                        <a class="ct-detailsLink" href="#"><i class="fa fa-long-arrow-right fa-fw"></i> details</a>
                                                    </div>
                                                    <div>
                                                        <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart"></i></a>
                                                        <div class="ct-or text-uppercase ct-u-paddingBottom20">
                                                            OR
                                                        </div>
                                                        <a class="btn btn-default" href="#" role="button">Speed Buy <i class="fa fa-long-arrow-right ct-u-paddingLeft10"></i></a>
                                                    </div>
                                                </div>
                                                <span class="ct-productShop-shopCart">
                                                    <form action="<?php echo base_url(); ?>shopping/add" method="post">
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
                                                    <a class="btn btn-default btn-hidden" href="#" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <?php //echo $this->pagination->create_links(); ?>
                                    </div>
                                </li>
            <?php } ?>

                            </ul>


                            <div class="ct-pagination ct-u-paddingBoth15">
                                <div class="ct-totalItems pull-left"><?php //echo $pagination; ?></div>

                                <div class="ct-pages pull-right">
                                    <span>Page:</span>
                                    <ul class="ct-numerPages list-unstyled list-inline">                                        
                                        <li><a href="#"><?php echo $this->pagination->create_links(); ?></a></li>
                                    </ul>
                                    <a class="ct-rightArrow" href="#"><i class="fa fa-long-arrow-right fa-fw"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-pull-9">
                        <div class="widget">
                            <div class="widget-inner">
                                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop35">Brands</h4>
                                <ul class="ct-productCategories ct-u-paddingTop30">
                                    <li><a href="#">Dynamic Silver - </a><span>(7)</span></li>
                                    <li><a href="#">JAI Jewelry - </a><span>(5)</span></li>
                                    <li><a href="#">Photo Engravings - </a><span>(1)</span></li>                                    
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-inner">
                                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left">Specials</h4>
                                <div class="ct-specials ct-u-marginBoth20">
                                    <img class="ct-js-zoomImage" src="images/specials-item.jpg" data-zoom-image="images/specials-item-large.jpg" alt="">
                                    <div class="ct-specialsDescription">
                                        <span>14K White Gold Rings, 0.33 Carat Diamond Stud</span>
                                        <span class="ct-u-size22"><del>150.00</del> $129.00</span>
                                        <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-inner">
                                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left">Manufacturers</h4>
                                <ul class="ct-productCategories ct-u-paddingTop30">
                                    <li><a href="#">A Jaffe</a></li>
                                    <li><a href="#">A. Link</a></li>
                                    <li><a href="#">Aaron Basha</a></li>
                                    <li><a href="#">Add-a-Pearl</a></li>
                                    <li><a href="#">Alan Friedman</a></li>
                                    <li><a href="#">Alberto Bossi</a></li>
                                    <li><a href="#">Alex Soldier</a></li>
                                    <li><a href="#">Alwand Vahan</a></li>
                                    <li><a href="#">Amadena</a></li>
                                    <li><a href="#">Andrew Meyer</a></li>
                                    <li><a href="#">Angela Tonali</a></li>
                                    <li><a href="#">Arezzo Gold & Jewelry</a></li>
                                    <li><a href="#">Armadani</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-inner">
                                <div class="ct-advert text-right">
                                    <img src="images/mega-sale-item.jpg" alt="Mega Sale Image">
                                    <div class="ct-advert-descriptionBox">
                                        <div class="ct-advert-info ct-u-paddingBottom10"><span class="ct-u-size45">40% OFF</span><br><span class="ct-u-size28"><em>Mega Sale</em></span></div>
                                        <div class="ct-advert-details ct-u-paddingTop10"><a class="ct-detailsLink" href="#"><i class="fa fa-long-arrow-right fa-fw"></i>details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
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
                                <img src="images/prefooter-diamond.png" class="text-right pull-left" alt="Diamond Ring">
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
                            <img src="images/footer-necklace.png" alt="Golden Necklace">
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


    <script src="<?php echo base_url() ?>js/color-selector/colorselector.js"></script>
    <script src="<?php echo base_url() ?>js/color-selector/init.js"></script>

    <script src="<?php echo base_url() ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url() ?>js/elevate-zoom/init.js"></script>

    <script src="<?php echo base_url() ?>js/nouislider/jquery.nouislider.all.js"></script>
    <script src="<?php echo base_url() ?>js/nouislider/init.js"></script>

    <script src="<?php echo base_url() ?>js/main.js"></script>

    

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bJAfVc8dIlSqq8ONQUWodrz1GUPsRUHafIQ7y0v8xp67d9AQI3NTRSZao6DDIw0ette9XixFl2%2bHTTTt5Q6qC038EYm2D3mOWTGbr2YoJriaQCfgm9XoMkv1q7AxM9rVJ%2bZDW%2byWSswy6hzE%2f1l0cB6uBtSdj7wTr3RB5B08j5Yk7IDVM8RdUrJaegZuGFHGlH22SfVifsPpVKye7zuVzZ92PLqncPyzWAcXEyN3sVFhcq2asur1rjuQTzlLhsMSpl%2bcNNREXt4OUwwLD7i8iVsFb7ML1SgGsL9GQ8ftMWLH4IWrWFh2QMMEbeCPKY3JtjgXO8L2JfHcCLf0l%2bWkRXRLs1WLkW0nL%2fTH7Uvwf%2bED0Dn5inmkgp4tn8Qev%2f%2fAAk6appNqF2vBlquJy7CiELsZGiEoEHDv3CLvyIsmZzGLQatY8ESVtXsNV8y1stNaYK75gdzKLW55slKTAKxUaWuLtEP0zaShjZip8z5kp7jOjYRTCXgPbSQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from diana.html.themeplayers.net/collections.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:45:36 GMT -->
</html>
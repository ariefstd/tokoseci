

    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
</head>

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>

        <div class="ct-contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Contact Us</h4>
                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">Questions? Comments? We Would Love to Hear From You!</div>

                        <ul class="ct-contactAddress list-unstyled ct-u-size16 ct-u-paddingBottom20">
                            <li>
                                <div class="ct-addressReference"><i class="fa fa-location-arrow"></i> Mailing Address:</div>
                                <div class="ct-addressDataReference">
                                    <span>Taman Kerti Residence unit 7</span><br>
                                    <span>Jl. Nakula, Gang Baik-baik, Seminyak</span><br>
                                    <span>Bali - 80361</span>
                                </div>
                            </li>
                            <li>
                                <div class="ct-addressReference"><i class="fa fa-phone"></i> Phone Number:</div>
                                <div class="ct-addressDataReference">
                                    <span>+62 812 9759 3438</span>
                                </div>
                            </li>
                            <li>
                                <div class="ct-addressReference"><i class="fa fa-envelope"></i> Email Address:</div>
                                <div class="ct-addressDataReference">
                                    <a href="#"><span>info@jewelofequator.com</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Follow Us</h4>
                        <div class="ct-u-paddingBottom20 ct-u-paddingTop30">
                            <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                  <li><a href=""><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ct-googleMap" data-location="Nakula, Seminyak" data-zoom="15" data-height="500"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom40 ct-u-paddingTop50">All Fields With * Are Required.</div>
                        <div class="ct-contactForm">
                            <div class="successMessage alert alert-success" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Thank You!
                            </div>
                            <div class="errorMessage alert alert-danger" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Ups! An error occured. Please try again later.
                            </div>

                            <?php //$this->load->view('contact') ?>

                        <?php
                        if (isset($message_display)) {
                            echo $message_display;
                        }
                        ?>
                    </div>
                    
                            <form class="form-horizontal contactForm validateIt" method="post" action="<?php echo base_url() ?>sending" role="form" data-email-subject="Contact Form" data-show-errors="true">
                                <div class="form-group">
                                    <label for="fullname" class="col-sm-2 control-label">Full Name*: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fullname" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="company" class="col-sm-2 control-label">Company:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="field[]" id="company">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email*:</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="to_email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-sm-2 control-label">Phone:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="field[]" id="phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="col-sm-2 control-label">Message*:</label>
                                    <div class="col-sm-10">
                                        <textarea id="message" class="form-control" name="message" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-long-arrow-right"></i> Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>

    
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cart-style.css">

    <script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>

	<script language="javascript">
		var popupWindow = null;
			function centeredPopup(url,winName,w,h,scroll){
			LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
			TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
			settings =
			'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
			popupWindow = window.open(url,winName,settings)
		}
	</script> 

         
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
         	<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/logo.png" alt="" class="img-flexible" /></a>
            	<!-- <a class="navbar-brand" href="<?php echo base_url(); ?>admin/login"><img src="<?php echo base_url(); ?>images/logo.png" alt="" class="img-flexible" /></a> -->
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">                                       
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HELP<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li><a href="http://airkali.com/fb_login/" onClick="centeredPopup(this.href,'myWindow','1020','475','no');return false">My Account</a></li>
                            <li><a href="http://member.airkali.com/" onClick="centeredPopup(this.href,'myWindow','550','475','no');return false">Register member</a></li>                            
                            <!-- <li class="divider"></li>
							<li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li> -->
                            
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        
<?php $email = $this->session->userdata('email_address'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Airkali, property search, web design" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>.:: air | X ::.</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body {
	background-color:#ddd;
}

      .carousel {
        height: auto;
        overflow: hidden;
      }
      .carousel .item {
        -webkit-transition: opacity 1s;
        -moz-transition: opacity 1s;
        -ms-transition: opacity 1s;
        -o-transition: opacity 1s;
        transition: opacity 1s;
      }
      .carousel .active.left, .carousel .active.right {
        left:0;
        opacity:0;
        z-index:2;
      }
      .carousel .next, .carousel .prev {
        left:0;
        opacity:1;
        z-index:1;
      }

	#bg {
	  position: fixed; 
	  top: 0; 
	  left: 0; 

	  /* Preserve aspet ratio */
	  min-width: 100%;
	  min-height: 100%;
	}

img.bg {
  /* Set rules to fill background */
  min-height: 100%;
  min-width: 1024px;

  /* Set up proportionate scaling */
  width: 100%;
  height: auto;

  /* Set up positioning */
  position: fixed;
  top: 0;
  left: 0;
}

@media screen and (max-width: 1024px) { /* Specific to this particular image */
  img.bg {
    left: 50%;
    margin-left: -512px;   /* 50% */
  }
}
.border-margin-top{
width:100%; margin-top:3px
}

.thumbnail{
	border: 0px solid;
}
.navbar-nav > li > a {
	width:95px;
	padding-top: 0px;
	padding-bottom: 10px;
}
.nav > li > a{
	padding-top:15px;
}
.list-group-item{
	padding: 0px;
	border:0px;
}
.list-group-item-menu{
	border:1px solid #ddd;margin-bottom:-1px;padding:10px 15px;display: block;position: relative;
}
.panel-primary{
	border-color:#ffffff;
}
#table{
	font-size: 12px;
}
.thumbnail{
	margin-bottom: 0px;
}
.panel{
	margin-bottom:0px;
}
#product_div{
	border: 0px; margin:5px 0px; padding: 0px;
}
.panel-heading{
	margin-right:10px;
	margin-left: 5px;
}
.list-group-item-menu {
	margin-right:10px; border:0px;
	margin-left: 5px;
}
		.alert{
			background-color: #4842bd;
			color: #ffffff; font:12px Arial;
			margin-bottom:5px;
		}
		.text-box{
			width:250px;margin:2px 0;	
		}
		.form-signin-heading{
			margin-bottom:20px;
		}

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

-->

</style>

</head>
<body>

<div class="container">
	<div class="row">

	<div class="col-md-12">

        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            	<a class="navbar-brand" href="<?php echo base_url(); ?>admin/login"><img src="<?php echo base_url(); ?>images/logo.png" alt="" class="img-flexible" /></a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                	<li><a href="<?php echo base_url(); ?>admin/property/">SHOPPING</a></li>
                	<li><a href="<?php echo base_url(); ?>admin/purchase/">PURCHASE</a></li>
                	<li><a href="<?php echo base_url(); ?>admin/logout">LOGOUT</a></li>
                	<!--
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HELP<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li><a href="http://airkali.com/fb_login/" onClick="centeredPopup(this.href,'myWindow','1020','475','no');return false">My Account</a></li>
                            <li><a href="http://member.airkali.com/" onClick="centeredPopup(this.href,'myWindow','550','475','no');return false">Register member</a></li>                            
                            <li class="divider"></li>
							<li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>                            
                            
                        </ul>    
                    </li>
                    -->

                </ul>
            </div>
        </nav>

	</div>
    <div class="top" style="float:left; width:100%; margin: auto; height: 2px;background-color: #000000"></div>  
        
	</div>
</div>  
		<div class="container">
			<div class="col-sm-12 col-md-12" style="padding: 0 20px">
						
			</div>
		</div>
			
<div class="container">
	<div class="row">
	<div class="col-md-12 col-sm-12" style="padding:0px">
	<?php echo $email ?><br><br>
	<table border="1" align="center">
	<tr>
		<td>NO</td>
		<td>Product name</td>
		<td>Qty</td>
		<td>Price</td>
		<td>Total amount</td>
		<td>Purchase date</td>
		<td>Product owner</td>
	</tr>
		<?php
		$n = 0;
		$amount = 0;
			
			foreach ($property as $row) 
			{ 
				$name_email = $row['email'];
				$name = $row['name'];
				$qty = $row['quantity'];
				$price = $row['price'];
				$tanggal = $row['date'];
				$email_owner = $row['email_address'];
				if ($name_email == $email){
					
				$n =$n+1;
				$amount = $qty*$price;
				//$total_amount = $amount+$amount;
       ?>	
	<tr>				
		<td><?php echo $n; ?></td>
		<td><?php echo $name ?><input type="hidden" name="name" value="<?php echo $name ?>"/></td>
		<td><?php echo $qty ?><input type="hidden" name="qty" value="<?php echo $qty ?>"/></td>
		<td><?php echo $price ?><input type="hidden" name="price" value="<?php echo $price ?>"/></td>
		<td><?php echo $amount; ?><input type="hidden" name="amount" value="<?php echo $amount ?>"/></td>
		<td><?php echo $tanggal ?><input type="hidden" name="date" value="<?php echo $tanggal ?>"/></td>
		<td><?php echo $email_owner ?><input type="hidden" name="email_owner" value="<?php echo $email_owner ?>"/></td>
	</tr>
	<?php }} ?>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>	
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>	
</table>

  	</div>  
	</div>
</div>


</body>
</html>
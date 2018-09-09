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
			margin-bottom: 0px;
			padding:5px;
		}
		.text-box{
			width:250px;margin:2px 0;	
		}
		.form-signin-heading{
			margin-bottom:20px;
		}
-->

</style>

</head>
<body>
<div class="container">
	<div class="row">


	<div class="col-md-12">
		<?php $this->load->view('includes/header'); ?>
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

			<?php
			//form validation
			echo validation_errors();
			?>  

		<div class="col-md-3 col-sm-3" style="padding:0px; height: auto">
			<div class="col-md-12 col-sm-12" style="height: auto margin: 5px 0">	
				
			<div class="container login" align="center">
			<div class="row">
			<h3 class="form-signin-heading">Create an account</h3>
			</div>
			
			<?php
			$attributes = array('class' => 'form-signin');   
			echo form_open('admin/create_member', $attributes);
			//echo '<h2 class="form-signin-heading">Create an account</h2>';
			?>

			<input type="text" name="first_name" value="<?php echo set_value('first_name') ?>"  placeholder="First name" class="text-box" /><br>
			<input type="text" name="last_name" value="<?php echo set_value('last_name') ?>"  placeholder="Last name" class="text-box" /><br>
			<input type="text" name="email_address" value="<?php echo set_value('email_address') ?>"  placeholder="Email" class="text-box" /><br>
			<input type="text" name="username" value="<?php echo set_value('username') ?>"  placeholder="Username" class="text-box" /><br>
			<input type="password" name="password" placeholder="Password" class="text-box" /><br>
			<input type="password" name="password2" placeholder="Password confirm" class="text-box" /><br>
			<?php
			//echo form_input('first_name', set_value('first_name'), 'placeholder="First name"');
			/*
			echo '<br>';
			echo form_input('last_name', set_value('last_name'), 'placeholder="Last name"');
			echo '<br>';
			echo form_input('email_address', set_value('email_address'), 'placeholder="Email"');
			echo '<br>';
			echo form_input('username', set_value('username'), 'placeholder="Username"');
			echo '<br>';
			echo form_password('password', '', 'placeholder="Password"');
			echo '<br>';
			echo form_password('password2', '', 'placeholder="Password confirm"');
			*/
			echo '<br>';
			echo form_submit('submit', 'submit', 'class="btn btn-large btn-primary"');
			echo form_close();
			?>
			<br>
			</div>

				
			</div>


			<div class="col-md-12 col-sm-12" style="height: auto; margin: 5px 0">
				
			</div>
		</div>


  </div>
	
  </div>  
</div>

<div class="container">
<div class="row">
<div class="bottom" style="float:left; width:100%; margin: auto; height: 25px;background-color: #000000"></div>
</div>
</div>

</body>
</html>
<?php

?>
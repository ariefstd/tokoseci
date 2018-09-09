<?php $email = $this->session->userdata('email_address'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Airkali, property search, web design" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
	<script src="<?php echo base_url(); ?>assets/tinymce/tinymce.min.js"></script>


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

<script>
        tinymce.init({selector:'textarea',
		plugins: [
			["link image lists charmap hr anchor pagebreak spellchecker"],
			["searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking"]
			],
		toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image     | media"	
		});
</script>
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
.span2, .span1{
	padding:5px;margin:0 10px;
}
.span3{
	padding:5px;margin:0 0px; width:250px;
}
.span4{
 padding:5px;margin:0 0px; width:450px;
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
	<div class="row">
	<div class="col-md-12 col-sm-12" style="padding:0px">
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php //echo ucfirst($this->uri->segment(1));?>
			<?php echo "Home";?>
          </a> 
          <span class="divider"></span>
        </li>
 
        <li class="active">
          <a href="#">New Product</a>
        </li>
      </ul>			
  	</div>
  	 	
	</div>
</div>

<div class="container">
	<div class="row" align="center">
	<div class="text-title" style="font:22px Verdana; width: auto">Adding Product</div>
       <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> new product created with success.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';          
        }
      }
      ?> 
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');
      $options_manufacture = array('' => "Select");
      foreach ($manufactures as $row)
      {
        $options_manufacture[$row['id']] = $row['name'];
      }

      //form validation
      echo validation_errors();      
      echo form_open_multipart('admin/products/add', $attributes);
      ?>
    	<div class="table-responsive" style="padding:0 10px">
          <table width="65%" border="0" class="table-- table-striped table-bordered-- table-condensed--">

				<tr>
					<td width="20%">&nbsp;</td>
					<td width="1%">&nbsp;</td>
					<td width="30%">&nbsp;</td>
				</tr>
				<tr>
					<td><label for="inputError" class="control-label">Product name</label></td>
					<td>:</td>
					<td><input type="text" class="span3" id="" name="name" value="">
					<input type="hidden" id="" name="email_address" value="<?php echo $email; ?>"></td>
				</tr>
				<tr>
					<td><label for="inputError" class="control-label">Product Price</label></td>
					<td>:</td>
					<td><input type="text" class="span3" id="" name="price" value="<?php echo set_value('price'); ?>"></td>
				</tr>
				<tr>
				<div class="control-group">
				<div class="controls">
					<td valign="top"><label for="inputError" class="control-label">Product Description</label></td>
					<td valign="top">:</td>
					<td><textarea class="span4" name="description" rows="0"></textarea></td>
				</div>	
				</div>	
				</tr>
				<tr>
					<td><label for="inputError" class="control-label">Category</label></td>
					<td>:</td>
					<td><?php echo form_dropdown('manufacture_id', $options_manufacture, set_value('manufacture_id'), 'class="span3"'); ?></td>
				</tr>
				
				<tr>
					<td><label for="inputError" class="control-label">Choose image</label></td>
					<td>:</td>
					<td><input type="file" class="input" name="gambar_produk"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td></td>
					<td>&nbsp;</td>
					<td><button class="btn btn-primary" type="submit">Save changes</button>&nbsp;&nbsp;<button class="btn" type="reset">Cancel</button></td>
				</tr>

          </table>
        </div>
        <?php echo form_close(); ?>
		
	</div>	
</div>


</body>
</html>
<?php

?>
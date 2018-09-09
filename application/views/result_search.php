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
	background-color:#bbbbbb;
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
table{
	/*background-color: #cccdbe;*/
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

	.nav > li > a{
	padding-top:15px;width: auto;
}
.list-group-item-menu{
	border:1px solid #ddd;margin-bottom:-1px;padding:10px 15px;display: block;position: relative;
	margin-right:10px;
	margin-left: 5px;
}
</style> 

</head>
<body>

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
				<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/logo.png" alt="" class="img-flexible" /></a>
            	<!-- <a class="navbar-brand" href="<?php echo base_url(); ?>shopping"><img src="<?php echo base_url(); ?>images/logo.png" alt="" class="img-flexible" /></a> -->
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>shopping">SHOPPING</a></li>    
                <li><a href="#">ABOUT US</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY<b class="caret"></b></a>
                    
                        <ul class="dropdown-menu">
	<?php
		//$this->db->count_all_results('property');
		//$this->db->where('serial', $serial);
		//$this->db->select_sum('property.manufacture_id');
		/*
		$this->db->from('property');
		$this->db->join('manufacturers', 'manufacturers.id = property.manufacture_id');
		$this->db->group_by("manufacturers.name"); 		
		$query = $this->db->get();
			foreach ($query->result() as $products)
			{
				
                $id = $products->serial;
                $name = $products->name;
                $description = $products->description;
                $price = $products->price;
        */
                
		//$this->db->select('*');
		//$query = $this->db->get();
	?>
                        	<li style="text-transform:capitalize;"><a href="<?php //echo base_url(); ?>category/view/<?php //echo $id ?>"><?php  //echo $name; ?></a></li>
	<?php //} ?>
							<li class="divider"></li>
                            <li><a href="http://member.airkali.com/" onClick="centeredPopup(this.href,'myWindow','550','475','no');return false">Register member</a></li>                            
                            <li class="divider"></li>
							<li><a href="<?php echo base_url(); ?>admin">My Admin Room</a></li>                            
                            
                        </ul>
                    </li>
            
                    <!-- <li><a href="<?php echo base_url(); ?>cart/cart_view/<?php //echo $id; ?>">CART&nbsp;&nbsp;<span class="badge pull-right" style="margin-top: 2px"><?php echo $qty; ?></span></a></li> -->
                    <!-- <li><a href="<?php echo base_url(); ?>cart/<?php //echo $id; ?>">CART&nbsp;&nbsp;<span class="badge pull-right" style="margin-top: 2px"><?php echo $qty; ?></span></a></li> -->
                    <?php
                    if(!$this->session->userdata('is_logged_in')){ ?>
                      <li><a href="<?php echo base_url(); ?>viewcart/<?php //echo $id; ?>">VIEW CART&nbsp;&nbsp;<span class="badge pull-right" style="margin-top: 2px"><?php echo $qty; ?></a></li>                        
                    <?php }else{ ?>                    
                    <li><a href="<?php echo base_url(); ?>cart/<?php //echo $id; ?>">YOUR CART&nbsp;&nbsp;<span class="badge pull-right" style="margin-top: 2px"><?php echo $qty; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>			

			<br><br>
		</div>

		<!--
		<div class="col-md-12">
        <div id="myCarousel" class="carousel slide" style="background-color:#ffffff">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <!--
          <div class="carousel-inner">
              <div class="active item"><img src="<?php echo base_url(); ?>images/slide1.jpg" alt="" /></div>
              <div class="item"><img src="<?php echo base_url(); ?>images/slide2.jpg" alt="" /></div>
              <div class="item"><img src="<?php echo base_url(); ?>images/slide3.jpg" alt="" /></div>
          </div>
          <!-- Carousel nav -->
          <!--
          <a class="carousel-control-- left--" href="#myCarousel" data-slide="prev">&nbsp;</a>
          <a class="carousel-control-- right--" href="#myCarousel" data-slide="next">&nbsp;</a>
        </div>
		</div>  
		-->

	</div>
	<div class="row--">
	<div class="col-sm-12 col-md-12">
	<form id="form_pencarian" name="form_pencarian" method="post" action="<?=base_url();?>search/">
		<table width="100%">
		<tr>
			<td width="90%"><input name="ringkasan" type="text" id="ringkasan" style="width:100%" class="form-control" value="<?php echo $ringkasan;?>"/></td>
			<td><input name="submit" type="submit" id="submit" value="Searching..." class="btn btn-default" style="float: left"/> </td>
		</tr>
		</table>
	</form>
		
	</div>
	
		<br><br>
	</div>
	<div class="col-sm-12 col-md-12" style="margin-bottom: 20px">
			<?php
				//List Berita Hasil Pencarian
				//$ringkasan = htmlentities(mysql_real_escape_string($this->input->post('ringkasan')));
				if(count($ListBerita) > 0) {
					//$this->db->where('address', $ringkasan);
					//$this->db->like('address',$ringkasan);

					foreach($ListBerita as $row)
					{
						echo "<div class=\"letter\">";
						echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
							<tbody>";
						echo " <div class=\"letter\">                     
									<td width=500>&nbsp;</td>
							  ";
						echo "</div>";
						
						echo "<tr>                        
									<td width=500>
									
									<a href=\"".base_url()."product/detail/".$row['serial']."\">".$row['name']."</a>
									<div> ".$row['description']."</div>
									<div>PRICE <big style='color:green'>: US$".number_format(($row['price']),2)."</big></div>
									</td>
							</tr>";

						echo "</tbody></table>";
						echo "</div>";
					}
			?>

			<center>
			<?php
			?>
						<?php echo $this->pagination->create_links(); ?>
			<?php
						} else {
							echo "<br><div><strong>Result not found ... </strong></div>";
						}
					?>
					
			</center>	
	</div>
	
	Page rendered in <strong>{elapsed_time}</strong> seconds <br>
	
	<div class="row--">
	<br><br>
	<div class="col-sm-12 col-md-12">
	<h4>Property Advertise</h4>
		<div class="col-sm-4 col-md-4">
			<p>Some sample text. Some sample text.Some sample text. Some sample text.Some sample text. Some sample text.</p>
			<p>
				<a href="#" class="btn btn-primary" role="button">Goto website</a>
			</p>
		</div>
		<div class="col-sm-4 col-md-4">
			<p>Some sample text. Some sample text.Some sample text. Some sample text.Some sample text. Some sample text.</p>		
			<p>
				<a href="#" class="btn btn-primary" role="button">Goto website</a>
			</p>
		</div>
		<div class="col-sm-4 col-md-4">
			<p>Some sample text. Some sample text.Some sample text. Some sample text.Some sample text. Some sample text.</p>		
			<p>
				<a href="#" class="btn btn-primary" role="button">Goto website</a>
			</p>
		</div>		
		<br><br>
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

?><?php

?>
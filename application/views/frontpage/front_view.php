<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<title>.:: air | x ::.</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css" media="screen">

    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cart-style.css">

<script src="<?php echo base_url(); ?>assets/jquery.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>

<script src="<?php echo base_url(); ?>assets/blocksit.js"></script>
<script>
$(document).ready(function() {
	//vendor script
	$('#header')
	.css({ 'top':-50 })
	.delay(1000)
	.animate({'top': 0}, 800);
	
	$('#footer')
	.css({ 'bottom':-15 })
	.delay(1000)
	.animate({'bottom': 0}, 800);
	
	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 5,
			offsetX: 8,
			offsetY: 8
		});
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 440) {
			conWidth = 200;
			col = 1
		}else if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 8,
				offsetY: 8
			});
		}
	});
	
	//close ad
	$('.buttonclose a').on('click', function() {
		$(this).parent().parent().fadeOut(1000);
		$(this).off('click');
		return false;
	});
});

</script>

<script>
$(document).ready(function () {
    $("input[name='tech']").change(function () {
        var maxAllowed = 2;
        var cnt = $("input[name='tech']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
			//$(this).hide();
			$('.checkbox:hidden').prop('checked', false);
            //alert('You can select maximum ' + maxAllowed + ' technologies!!');
        }
    });
});
</script>
<style type="text/css">
#wrapper {
background-color:#000000;
margin-top:50px;
}
.imgholder{width:auto;}
.grid{padding:5px}
.thumbnail{
padding:0px;border:0;
}
.panel-text{
padding:0 10px
}
</style>

<body>
<div class="container">
	<div class="row">
<!-- Header -->
		<header style="top: 0px;" id="header">

				<div class="col-md-12" id="header">
					<?php $this->load->view('frontpage/menu-top'); ?>
				</div>	
			<div class="clearfix--"></div>
		</header>
	</div>
</div>

<div class="container--">
	<div class="row--">

<!-- Content -->
<section id="wrapper">
<br>
	<hgroup>
		<h3>please welcome to airkali </h3> 
	</hgroup>
<br>

<div style="height: 1008px;" id="container">
	<div style="left: 0px; top: 8px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img27.jpg">
		</div>
		<div class="panel-text">
		<strong>Sunset Lake</strong>
		<p>A peaceful sunset view...</p>
		<div class="meta">by j osborn</div>
		</div>
	</div>
	<div style="left: 220px; top: 8px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img26.jpg">
		</div>
		<div class="panel-text">
		<strong>Bridge to Heaven</strong>
		<p>Where is the bridge lead to?</p>
		<div class="meta">by SigitEko</div>
		</div>
	</div>
	<div style="left: 440px; top: 8px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img15.jpg">
		</div>
		<div class="panel-text">
		<strong>Autumn</strong>
		<p>The fall of the tree...</p>
		<div class="meta">by Lars van de Goor</div>
		</div>
	</div>
	<div style="left: 660px; top: 8px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img23.jpg">
		</div>
		<div class="panel-text">
		<strong>Winter Whisper</strong>
		<p>Winter feel...</p>
		<div class="meta">by Andrea Andrade</div>
		</div>
	</div>
	<div style=" left: 880px; top: 8px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img17.jpg">
		</div>
		<div class="panel-text">
		<strong>Light</strong>
		<p>The only shinning light...</p>
		<div class="meta">by Lars van de Goor</div>
		</div>
	</div>
	<div style=" left: 220px; top: 260px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img22.jpg">
		</div>
		<div class="panel-text">
		<strong>Rooster's Ranch</strong>
		<p>Rooster's ranch landscape...</p>
		<div class="meta">by Andrea Andrade</div>
		</div>
	</div>
	<div style=" left: 660px; top: 275px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img16.jpg">
		</div>
		<div class="panel-text">
		<strong>Autumn Light</strong>
		<p>Sun shinning into forest...</p>
		<div class="meta">by Lars van de Goor</div>
		</div>
	</div>
	<div style=" left: 0px; top: 406px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img21.jpg">
		</div>
		<div class="panel-text">
		<strong>Yellow cloudy</strong>
		<p>It is yellow cloudy...</p>
		<div class="meta">by Zsolt Zsigmond</div>
		</div>
	</div>
	<div style=" left: 440px; top: 406px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img28.jpg">
		</div>
		<div class="panel-text">
		<strong>Herringfleet Mill</strong>
		<p>Just a herringfleet mill...</p>
		<div class="meta">by Ian Flindt</div>
		</div>
	</div>
	<div style=" left: 880px; top: 406px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img2.jpg">
		</div>
		<div class="panel-text">
		<strong>Battle Field</strong>
		<p>Battle Field for you...</p>
		<div class="meta">by Andrea Andrade</div>
		</div>
	</div>
	<div style=" left: 220px; top: 505px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img24.jpg">
		</div>
		<div class="panel-text">
		<strong>Sundays Sunset</strong>
		<p>Beach view sunset...</p>
		<div class="meta">by Robert Strachan</div>
		</div>
	</div>
	<div style=" left: 440px; top: 658px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img19.jpg">
		</div>
		<div class="panel-text">
		<strong>Sun Flower</strong>
		<p>Good Morning Sun flower...</p>
		<div class="meta">by Zsolt Zsigmond</div>
		</div>
	</div>
	<div style=" left: 0px; top: 673px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img5.jpg">
		</div>
		<div class="panel-text">
		<strong>Beach</strong>
		<p>Something on beach...</p>
		<div class="meta">by unknown</div>
		</div>
	</div>
	<div style=" left: 660px; top: 673px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img25.jpg">
		</div>
		<div class="panel-text">
		<strong>Flowers</strong>
		<p>Hello flowers...</p>
		<div class="meta">by R A Stanley</div>
		</div>
	</div>
	<div style=" left: 880px; top: 673px; position: absolute;" class="grid panel panel-primary">
		<div class="imgholder thumbnail">
			<img src="<?php echo base_url(); ?>assets/img/img20.jpg">
		</div>
		<div class="panel-text">
		<strong>Alone</strong>
		<p>Lonely plant...</p>
		<div class="meta">by Zsolt Zsigmond</div>
		</div>
	</div> <!---->
</div>
</section>
</div>
</div>

<!-- Footer -->
<footer style="bottom: 0px;" id="footer">
	<span>© 2015 <a href="http://airkali.com">airkali</a>. Design by <a href="#/contactus">webmaster</a></span>
</footer>

<!-- Start of Analytics Code -->
</html>
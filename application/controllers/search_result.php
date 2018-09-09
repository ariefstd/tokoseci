<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>.:: Airkali ::.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

</head>

<body>
<?php $this->load->view('top-menu') ?>

<div class="container global-border">

<div class="row">
<br><br>
<div class="col-md-12 col-sm-12">
<center>
	<form id="form_pencarian" name="form_pencarian" method="post" action="<?=base_url();?>index.php/search/">
	  <input name="ringkasan" type="text" id="ringkasan" size="30" maxlength="255" style="width:75%; margin-bottom:10px" class="inputbox" value="<?php //echo $ringkasan;?>"/>&nbsp;&nbsp;
	  <input name="submit" type="submit" id="submit" value="Cari" class="button"/> 
	</form>
</center>
</div>
</div>

	<div class="row">
	<br>
	<div class="col-sm-12 col-md-12">
	Page rendered in <strong>{elapsed_time}</strong> seconds <br>
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
									<td width=500><h4>Your title here</h4></td>
							  ";
						echo "</div>";
						echo "<tr>                        
									<td width=500>
									
									<a href=\"".$row['serial']."\">".$row['name']."</a>
									<div> ".$row['price']."</div>
									<div> ".$row['description']."</div>
									</td>
							</tr>";

						echo "</tbody></table>";
						echo "</div>";
					}
			?>

			<center>
					<?php
							echo $this->pagination->create_links();
						} else {
							echo "<div><strong>Hasil pencarian tidak ditemukan.</strong></div>";
						}
					?>
					
			</center>
			<br>
	</div>
	</div>

	<div class="row">
	<div class="col-sm-12 col-md-12">
	<h4>Your Advertise</h4>
		<div class="col-sm-6 col-md-6">
			<p>Some sample text. Some sample text.Some sample text. Some sample text.Some sample text. Some sample text.</p>
			<p>
				<a href="#" class="btn btn-primary" role="button">Goto website</a>
			</p>
		</div>
		<div class="col-sm-6 col-md-6">
			<p>Some sample text. Some sample text.Some sample text. Some sample text.Some sample text. Some sample text.</p>		
			<p>
				<a href="#" class="btn btn-primary" role="button">Goto website</a>
			</p>
		</div>
		<br><br>
	</div>
	</div>


</div><!-- /.container -->

<div class="container" style="background-color:#000000">
<div class="row">
<div class="col-md-12 col-sm-12">
    <footer>
	  <br><br>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>2013 Company, Inc.<a href="#">Privacy</a><a href="#">Terms</a></p>
    </footer>
</div>
</div>
</div>


      <!-- FOOTER -->


</body></html>
<?php

$id = '';
$article_title = '';
$article_key = '';
$category = '';
$author = '';
$content_article='';

if(!empty($userInfo))
{
    foreach ($userInfo as $uf)
    {
        $id = $uf->id;
        $article_title = $uf->article_title;
        $article_key = $uf->article_key;
        $category = $uf->category;
        $author = $uf->author;
		$content_article  = $uf->content_article ;
    }
}


?>

			
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Ubah Artikel & Penulis</small>
      </h1>
    </section>
    
    <section class="content" style="background:#ffffff">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
			<div class="container top">
			
              <!-- general form elements -->
                <div class="box box-primary">
				
                    <div class="box-header">
                        <h2>
						  Artikel <?php echo ucfirst($this->uri->segment(2));?>
						</h2>
                    </div><!-- /.box-header -->
                    <!-- form start -->
					<div class="container top">
					  <div class="col-md-10">
					  <ul class="breadcrumb">
						<li>
						  <a href="<?php echo site_url("Kegiatan"); ?>">
							<?php echo ucfirst($this->uri->segment(1));?>
						  </a> 
						</li>
						<li>
						  <a href="<?php //echo site_url("Artikel").'/'.$this->uri->segment(2); ?>">
							<?php echo ucfirst($this->uri->segment(2));?>
						  </a>
						</li>
						<li class="active">
						  <a href="#"><?php echo $artikel[0]['article_key'] ?></a>
						</li>
					  </ul>
					  </div>
					  
					  
			<div class="col-md-10">
				<div class="box box-primary-">
				<?php
					  //flash messages
					  if($this->session->flashdata('flash_message')){
						if($this->session->flashdata('flash_message') == 'updated')
						{
						  echo '<div class="alert alert-success">';
							echo '<a class="close" data-dismiss="alert">×</a>';
							echo '<strong>Berhasil!</strong> artikel sudah diganti.';
						  echo '</div>';       
						}else{
						  echo '<div class="alert alert-error">';
							echo '<a class="close" data-dismiss="alert">×</a>';
							echo '<strong>Ada Kesalahan!</strong> segera lakukan pengisian lagi.';
						  echo '</div>';          
						}
					  }
					  ?>
                <?php
				  //form data
				  $attributes = array('class' => 'form-horizontal', 'id' => 'editKey');

				  //form validation
				  echo validation_errors();

				  echo form_open('Kegiatan/update/'.$this->uri->segment(3).'', $attributes);
				?>
				<br /><br />
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6-">                                
                                    <div class="form-group">
                                        <label>Judul artikel</label>
                                        <input type="text" class="form-control" id="judul" placeholder="Full Name" name="judul" value="<?php echo $artikel[0]['article_title']; ?>" maxlength="225" disabled>
                                        <input type="hidden" value="<?php echo $artikel[0]['article_title']; ?>" name="judul" id="judul" />    
                                    </div>
                                    
                                </div>
                                <div class="col-md-6-">
                                    <div class="form-group">
                                        <label>Key Artikel</label>
                                        <input type="text" class="form-control" id="key" placeholder="Enter key" name="key" value="<?php echo $artikel[0]['article_key']; ?>" maxlength="225" disabled>
										<input type="hidden" class="form-control" id="key" placeholder="Enter key" name="key" value="<?php echo $artikel[0]['article_key']; ?>" maxlength="225">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6-">
                                    <div class="form-group">
                                        <label>Penulis Artikel</label>
                                        <input type="text" class="form-control" id="author" placeholder="Nama Penulis" name="author" value="<?php echo $artikel[0]['author']; ?>" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-6-">
                                    <div class="form-group">
                                        <label valign="top">Berita artikel</label>

                                        <div class="col-md-12">
                                            <div class="col-md-3">
                                            <button type="button" value="Breaks" onclick="insert(window.lstText,'[breaks]')" title="double"><i class="fa fa-indent"></i></button>
                                            <button type="button" value="Line" onclick="insert(window.lstText,'[line]')" title="single"><i class="fa fa-paragraph"></i></button>
                                            <button type="button" value="Bold" onclick="insert(window.lstText,'<b> </b>')" title="bold"><i class="fa fa-bold"></i></button>
                                            
                                            </div>
                                            <div class="col-md-9">
                                            <?php
                                                $sqlStr  = $this->db->query("select*from tbl_gallery where category='".$artikel[0]['category']."' AND article_key='".$artikel[0]['article_key']."' AND isDeleted!=1");
                                                $x=0;
                                                foreach ($sqlStr->result() as $row){
                                                $x=$x+1;
                                                $img = $row->image;
                                                ?>
                                                <!--
                                                <button class="btn btn-default" title="insert image" style="float:right;padding:0px" type="button" value="Gambar" onclick="insert(window.lstText,'<img src=<?php echo base_url(); ?>images/<?php echo $img ?> width=75% height=350 />')"><img src=<?php echo base_url(); ?>images/<?php echo $img ?> width="30" height="30" /></button>
                                                -->
                                                <button class="btn btn-default" title="insert image" style="float:right;padding:0px" type="button" value="Gambar" onclick="insert(window.lstText,'[pic]')"><img src=<?php echo base_url(); ?>images/<?php echo $img ?> width="30" height="30" /></button>
                                            <?php } ?>
                                            </div>
                                        </div>
                                            <br /><br />
                                            
                                        <textarea col="10" rows="10" name="berita" onfocus="window.lstText=this;" class="form-control"><?php echo $artikel[0]['content_article']; ?></textarea>
                                    </div>
                                </div>    
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                <?php echo form_close(); ?>
                </div>
            </div>
					  
					</div>
				</div>
			</div>
			</div>
		</div>	
    </section>
</div>
<!--
<script src="<?php echo base_url(); ?>assets/js/editArtikel.js" type="text/javascript"></script>
-->
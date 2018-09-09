<?php $category = $this->uri->segment(1); $category=strtolower($category); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content" style="background:#ffffff">
		<div class="row">
			<div class="col-lg-9">
			
			<div class="container top">
			  <div class="col-md-10">
			  <ul class="breadcrumb">
				<li>
				  <a href="<?php echo site_url("Arsip"); ?>">
					<?php echo ucfirst($this->uri->segment(1));?>
				  </a>
				</li>
				<li>
				  <a href="<?php echo site_url("Arsip").'/'.$this->uri->segment(2); ?>">
					<?php echo ucfirst($this->uri->segment(2));?>
				  </a>
				</li>
				<li class="active">
				  <a href="#">New</a>
				</li>
			  </ul>
			  </div><br /><br />
			  
			  <div class="page-header-">
			  <h2>
				<i class="fa fa-tachometer" aria-hidden="true"></i> <?php echo ucfirst($this->uri->segment(2));?>
				<small>Beranda Arsip</small>
			  </h2>
			  </div>
				<br /><br />
			  <?php
			  //flash messages
			  if(isset($flash_message)){
				if($flash_message == TRUE)
				{
				  echo '<div class="alert alert-success">';
					echo '<a class="close" data-dismiss="alert">×</a>';
					echo '<strong>Well done!</strong> new manufacturer created with success.';
				  echo '</div>';       
				}else{
				  echo '<div class="alert alert-error">';
					echo '<a class="close" data-dismiss="alert">×</a>';
					echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
				  echo '</div>';          
				}
			  }
			  ?>			  
			  			
			<div class="col-md-8">
				<div class="box box-primary-">
                                        
                    <form role="form" action="<?php echo base_url() ?><?php echo $category ?>/add" method="post" id="editKey" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6-">                                
                                    <div class="form-group">
                                        <label>Judul Arsip</label>
                                        <input type="text" class="form-control" id="judul" placeholder="Judul artikel" name="judul" value="<?php //echo $article_title; ?>" maxlength="225">
                                        <input type="hidden" value="<?php //echo $article_title; ?>" name="userId" id="userId" />    
                                    </div>
                                    
                                </div>
                                <div class="col-md-6-">
                                    <div class="form-group">
                                        <label>Key artikel</label>
                                        <input type="text" class="form-control" id="key" placeholder="Enter key" name="key" value="<?php //echo $article_key; ?>" maxlength="225">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">								
                                <div class="col-md-6-">
                                    <div class="form-group">
                                        <label>Penulis artikel</label>
                                        <input type="text" class="form-control" id="author" placeholder="Nama Penulis" name="author" value="<?php echo $name; ?>" maxlength="10" disabled>
										<input type="hidden" class="form-control" id="author" placeholder="Nama Penulis" name="position" value="<?php echo "body"; ?>" maxlength="10">
										<input type="hidden" class="form-control" id="author" placeholder="Nama Penulis" name="author" value="<?php echo $name; ?>" maxlength="10">
										<input type="hidden" class="form-control" id="author" placeholder="Nama Penulis" name="category" value="<?php echo "arsip"; ?>" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-6-">
                                    <div class="form-group">
                                        <label valign="top">Berita artikel</label>
                                        <textarea col="5" rows="5" id="berita" name="berita" placeholder="Tuliskan berita artikel disini" class="form-control"><?php //echo $content_article; ?></textarea>
                                    </div>
                                </div>    
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
			</div>
				
			  
			</div>
			<br /><br />
			</div>
		</div>
	</section>
    
</div>

	
     
<?php $category = $this->uri->segment(1); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Welcome & Publikasi <?php //echo $category ?>
        <small>Tambah & Hapus</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-add" href="#"><i class="fa fa-plus"></i> Artikel</a>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Kategori <?php //echo $category ?> Welcome dan Publikasi</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?><?php echo $category ?>" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th width="30%">Judul Berita</th>
                      <th width="30%">Kata Kunci</th>
					             <th width="10%">Posisi</th>
                      <!-- <th width="15%">Tanggal</th> -->
                      <th width="5%">Img</th>
                      <th width="5%">Gallery</th>
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php
							echo '<a class="btn btn-xs btn-primary" href="'.base_url().'Gallery/add/'.$record->article_key.'" ><i class="fa fa-camera-retro"></i></a>';
						  ?>
						<?php echo $record->article_title ?>
					  </td>
                      <td><?php echo $record->article_key ?></td>
					  <?php if (($record->position)=="front_page"){
						$record->position="Publikasi";  
					  }
					  if (($record->position)=="top"){
						$record->position="Welcome"; 
					  }
					  ?>
					  <td><?php echo $record->position ?></td>
                      <!-- <td><?php echo $record->date_time ?></td> -->

                      <?php
                      $sqlStrs  = $this->db->query("select*from tbl_gallery where category='".$record->category."' AND article_key='".$record->article_key."' AND isDeleted!=1");
                        if($sqlStrs->num_rows > 0){
                        
                      ?>
                      <td><i style="color:blue" class="fa fa-check"></i></td>
                      <?php }else{ ?>
                      <td><i style="color:red" class="fa fa-close"></i></td>
                      <?php } ?>
                      <td><i style="color:red" class="fa fa-close"></i></td>

                      <td class="text-center">
						  <?php
							echo '<a class="btn btn-sm btn-info" href="'.site_url("Artikel").'/update/'.$record->id.'" ><i class="fa fa-pencil"></i></a>';
						  ?>
                          <a class="btn btn-sm btn-danger deleteArtikel" href="#" data-artikelid="<?php echo $record->id; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
		
		<div class="modal fade" id="modal-add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Artikel Berita Depan</h4>
              </div>
              <div class="modal-body">
			  
					<form id="editKey" action="<?php echo base_url() ?>addNewArtikel" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6-">                                
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" id="judul" placeholder="Judul artikel" name="judul" value="<?php //echo $article_title; ?>" maxlength="225" width="90%">
                                        <input type="hidden" value="<?php //echo $article_title; ?>" name="userId" id="userId" />    
                                    </div>
                                    
                                </div>
                                <div class="col-md-6-">
                                    <div class="form-group">
                                        <label>Key</label>
                                        <input type="text" class="form-control" id="key" placeholder="Enter key" name="key" value="<?php //echo $article_key; ?>" maxlength="225" width="90%">
                                    </div>
                                </div>
								<div class="col-md-9-">
                                    <div class="form-group">
                                        <label>Posisi</label>
                                        <select name="position" class="form-control">
											<option value="top">Selamat Datang (Welcome)</option>
											<option value="front_page">Layanan Publikasi (Publikasi)</option>
										</select>
                                    </div>
									
                                </div>
								<div class="col-md-6-">
                                    <div class="form-group">
                                        <label>Penulis</label>
                                        <input type="text" class="form-control" id="author" placeholder="Nama Penulis" name="author" value="<?php echo $name; ?>" maxlength="10" disabled>
										<input type="hidden" class="form-control" id="author" placeholder="Nama Penulis" name="author" value="<?php echo $name; ?>" maxlength="10">
										
                                    </div>
                                </div>
								<div class="col-md-6-">
                                    <div class="form-group">
                                        <label valign="top">Berita</label>
                                        <textarea col="5" rows="5" id="berita" name="berita" placeholder="Tuliskan berita artikel disini" class="form-control" width="90%"><?php //echo $content_article; ?></textarea>
										<input type="hidden" class="form-control" id="author" placeholder="Nama Penulis" name="category" value="front_page" maxlength="10">
                                    </div>
                                </div> 
                            </div>
							
                        </div><!-- /.box-body -->
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button><input type="reset" class="btn btn-default" value="Reset" />
							<input type="submit" class="btn btn-primary" value="Submit" />
						</div>
                        
                    </form>
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
		
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/artikel.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "Artikel/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>

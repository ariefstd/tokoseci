<?php $category = $this->uri->segment(1); ?>

<script>
$(document).on('click', '.updateMenu',function(e) {
    var idMnu = $(this).data('key'); 
        //alert(idMnu);
   $.ajax({
        url:"<?php echo base_url() ?>updateMenu/",
        type: "POST",
        data: { idMnu : idMnu},
        cache: false,
        success: function (hasil) {
			$('#table_listMenu').html(hasil);        
        }
    });
   
});
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management <?php echo $category ?>
        <small>Tambah & Hapus</small>
      </h1>
    </section>
    <section class="content">
	
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-add" href="#"><i class="fa fa-plus"></i> Menu</a>
                </div>
            </div>
        </div>
	
        <div class="row">
			<div class="modal fade" id="modal-add">
			<div class="modal-dialog">
				
			<div class="box">
                <div class="form-group">
                    <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Artikel Menu</h4>
					</div>
					<div class="box-title">
					
						<div class="box box-primary" style="padding:0 15px;background:#ffffff">
							
							<form role="form" id="addUser" action="<?php echo base_url() ?>addNewMenu" method="post" role="form">
								<div class="box-body">
									<div class="row">
										<div class="col-md-6-">                                
											<div class="form-group">
												<label for="judul">Judul Menu</label>
												<input type="text" class="form-control required" id="judul" name="judul" maxlength="225">
											</div>
											
										</div>
										<div class="col-md-6-">
											<div class="form-group">
												<label for="key">Kata Kunci Menu</label>
												<input type="text" class="form-control required" id="key"  name="key" maxlength="225">
											</div>
										</div>
									
										<div class="col-md-6-">
											<div class="form-group">
												<label for="key">Posisi</label>
												<select class="form-control required" id="category" name="position">
													<option value="submenu">MENU ATAS </option>
													<option value="footer">MENU BAWAH </option>
												</select>
											</div>
										</div>
										<div class="col-md-6-">
											<div class="form-group">
												<label for="category">Kategori</label>
												<select class="form-control required" id="category" name="category">
												<?php if($role == '2' || $role=='1') { ?>
													<option value="kegiatan">Kegiatan (Menu Atas)</option>
													<option value="pemerintahan">Pemerintahan (Menu Atas)</option>
												<?php } ?>
												<?php if($role == '3' || $role=='1') { ?>
													<option value="dokumentasi">Dokumentasi (Menu Atas)</option>
												<?php } ?>
												<?php if($role == '2' || $role=='1') { ?>
													<option value="unggulan">Produk Unggulan Desa (Menu Bawah)</option>
													<option value="arsip">Arsip Desa Online (Menu Bawah)</option>
												<?php } ?>
												</select>
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
					
				<div class="col-md-12">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
                </div>
			</div>
            </div>
			</div>
			
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Kategori Menu</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>Menu" method="POST" id="searchList">
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
                      <th>Judul Menu</th>
                      <th>Key</th>
					  <th>Position</th>
                      <th width="5%">Img</th>
                      <th width="5%">Gallery</th>
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
							$key=$record->article_key;
							if(($record->position)=="submenu"){
								$position="Atas";
							}else{
								$position="Bawah";
							}
                    ?>
						<?php
							$sqlStr  = $this->db->query("select*from tbl_artikel where article_key='".$key."' AND isDeleted !=1");
						?>
						
                    <tr>
						<?php if($sqlStr->num_rows()>0){ ?>
						  <td><?php	
							echo '<a class="btn btn-xs btn-primary" href="'.base_url().'Gallery/add/'.$record->article_key.'" ><i class="fa fa-camera-retro"></i></a>';
						  ?>
						  <?php echo $record->article_title ?>							
						  </td>
						<?php }else{ ?>
						  <td><?php echo $record->article_title ?></td>
						<?php } ?>
                      <td><?php echo $record->article_key ?></td>
					  <td><?php echo $position ?></td>
					  
                      <?php
                      $sqlStrs  = $this->db->query("select*from tbl_gallery where category='".$record->category."' AND article_key='".$record->article_key."' AND isDeleted!=1");
                        if($sqlStrs->num_rows > 0){
                        
                      ?>
                      <td><i style="color:blue" class="fa fa-check"></i></td>
                      <?php }else{ ?>
                      <td><i style="color:red" class="fa fa-close"></i></td>
                      <?php } ?>

                      <?php //foreach ($sqlStrs->result() as $rows){ 
                            $position_img="front_page";
                            if(($sqlStrs->num_rows > 0)&&($position==$position_img)){                            
                      ?>
                      <td><i style="color:blue" class="fa fa-check"></i></td>
                      <?php }else{ ?>
                      <td><i style="color:red" class="fa fa-close"></i></td>
                      <?php
                            }
                        //}
                      ?>

                      <td class="text-center">	
						<?php
						$sqlStrs  = $this->db->query("select*from tbl_artikel where article_key='".$key."' AND position='footer' AND isDeleted !=1");
							foreach ($sqlStrs->result() as $rows){
										$id = $rows->id;
							echo '<a class="btn btn-sm btn-info" href="'.site_url("Menu").'/update/'.$id.'" ><i class="fa fa-pencil"></i></a>';
							}
						?>
						<a type="button" class="btn btn-sm btn-info updateMenu" data-toggle="modal" data-target="#modal-update" data-key="<?php echo $record->article_key; ?>"><i class="fa fa-plus"></i>
						</a>
						
                          <a class="btn btn-sm btn-danger deleteMenu" href="#" data-menuid="<?php echo $record->id; ?>"><i class="fa fa-trash"></i></a>
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
			
			
		<div class="modal fade" id="modal-update">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Berita Menu</h4>
              </div>
              <div class="modal-body">
				<div id="table_listMenu"></div>					
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

		<!-- Main content -->
		
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/menu.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "Menu/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>

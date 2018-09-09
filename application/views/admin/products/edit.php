    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php //echo ucfirst($this->uri->segment(1));?>
			<?php echo "Home";?>
          </a> 
          <span class="divider"></span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php //echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Update Property</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Updating Property <?php //echo "price" //echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> product updated with success.';
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

      echo form_open('admin/products/update/'.$this->uri->segment(4).'', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Property name</label>
            <div class="controls">
			<!-- <textarea name="description" rows="10"><?php echo $product[0]['description'] ?></textarea> -->
              <input type="text" id="" name="description" value="<?php echo $product[0]['description']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
		  <!-- 
          <div class="control-group">
            <label for="inputError" class="control-label">Stock</label>
            <div class="controls">
              <input type="text" id="" name="stock" value="<?php echo $product[0]['stock']; ?>">
              <!--<span class="help-inline">Cost Price</span>
            </div>
          </div>
		  -->
          <div class="control-group">
            <label for="inputError" class="control-label">Property Price</label>
            <div class="controls">
              <input type="text" id="" name="property_price" value="<?php echo $product[0]['property_price'];?>">
              <!--<span class="help-inline">Cost Price</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Property Address</label>
            <div class="controls">
			<!-- <textarea name="property_address" rows="10"><?php echo $product[0]['property_address'] ?></textarea> -->
              <!-- <input type="text" name="property_address" value="<?php echo $product[0]['property_address']; ?>"> -->
              <!--<span class="help-inline">OOps</span>-->
            </div>
          </div>
          <?php
          echo '<div class="control-group">';
            echo '<label for="manufacture_id" class="control-label">Manufacture</label>';
            echo '<div class="controls">';
              //echo form_dropdown('manufacture_id', $options_manufacture, '', 'class="span2"');
              
              echo form_dropdown('manufacture_id', $options_manufacture, $product[0]['manufacture_id'], 'class="span2"');

            echo '</div>';
          echo '</div">';
          ?>

          <div class="control-group">
			<div class="controls control-label">
				<input type="file" class="input" name="gambar_produk">
			</div>
		  </div>
		  
		  <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <a href="<?php echo base_url(); ?>admin/products"><button class="btn" type="reset">Cancel</button></a>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     
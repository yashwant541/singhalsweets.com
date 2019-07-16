<?php include('admin_header.php');?>
  	<div class='container'>
  		<?php if($notification=$this->session->flashdata('notification')) :?>
  		<div class="row">
      		<div class="col-lg-6">
  				<div class="alert alert-dismissible alert-success" bis_skin_checked="1">
  					<button type="button" class="close" data-dismiss="alert">&times;</button>
  					<strong>Well done!</strong><br/>Sweet added Successfully.</a>
				</div>
			</div>
		</div>
	<?php endif ?>
    	<?php echo form_open_multipart('Admin/addSweet'); ?>
    	<?php echo form_fieldset('Add Sweets'); ?>
    	
    	  <div class='row'>
    	   <div class="col-lg-6">
			<div class="form-group">
			    <label>Sweet Name</label>
			    <?php echo form_input(['name'=>'sweet_name', 'class'=>'form-control', 'placeholder'=>'Enter Sweet Name', 'value'=>set_value('sweet_name')]); ?>
			    <?php echo br().form_error('sweet_name'); ?>
			</div>
		   </div>
		  </div>
		  <div class='row'>
		   <div class="col-lg-6">
   			<div class="form-group">
			    <label>Choose Category</label>			   
                <select type="text" name="category" class="form-control" placeholder="Category" value="<?php echo set_value('category'); ?>">
      				<option value="Ghee">Ghee</option>
    				<option value="Milk">Milk</option>
    				<option value="Bengali">Bengali</option>
        			<option value="Delight">Delight</option>
        			<option value="Dry Fruit">Dry Fruit</option>
        			<option value="Peetha">Peetha</option>
        			<option value="Bytes">Bytes</option>
        			<option value="Aam Papad">Aam Papad</option>
        			<option value="Special Ghewar">Special Ghewar</option>
        			<option value="Live Section">Live Section</option>
                </select>
            </div>  
			<?php echo br().form_error('category'); ?> 
		   </div>
		  </div>
		  <div class='row'>
   			<div class="col-lg-4">
   			<div class="form-group">
			    <label>Price</label>
			   <?php echo form_input(['name'=>'price', 'class'=>'form-control', 'placeholder'=>'Enter Price', 'value'=>set_value('price')]); ?>
			   <?php echo br().form_error('price'); ?>
			</div>
   		</div>
    	  	<div class="col-lg-2">
			<div class="form-group">
			    <label>Weight</label>
			  <select type="text" name="weight" class="form-control" placeholder="weight" value="<?php echo set_value('weight'); ?>">
      				<option value="/Kg">/Kg</option>
    				<option value="/500 gm">/500 gm</option>
    				<option value="/Pcs">/Pcs</option>
                </select>
			   <?php echo br().form_error('weight'); ?>
			</div>
		</div>
	</div>
		
	<div class='row'>
   	  	<div class="col-lg-6">
			<div class="form-group">
			    <label>Description</label>
			   <?php echo form_textarea(['name'=>'sweet_description', 'class'=>'form-control', 'placeholder'=>'Enter Sweet Description', 'value'=>set_value('sweet_description')]); ?>
			   <?php echo br().form_error('sweet_description'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Sweet Image</label>
				<?php echo form_upload(['name'=>'userfile','class'=>'form-control','type'=>'file']);
				if(isset($upload_error))
                    echo br(2).$upload_error; ?>
            </div>
        </div>
    </div>
	<?php echo br().form_submit(['name'=>'submit', 'value'=> 'Submit', 'class'=>'btn btn-primary btn-large']); ?>
	<?php echo form_fieldset_close(); ?>
	<?php form_close(); ?>
</div>
<?php include('admin_footer.php');?>

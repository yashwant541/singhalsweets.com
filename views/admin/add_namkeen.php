<?php include('admin_header.php');?>
  	<div class='container'>
    	<?php echo form_open_multipart('Admin/addNamkeen'); ?>
    	<?php echo form_fieldset('Add Namkeens'); ?>
    	
    	  <div class='row'>
    	   <div class="col-lg-6">
			<div class="form-group">
			    <label>Namkeen Name</label>
			    <?php echo form_input(['name'=>'namkeen_name', 'class'=>'form-control', 'placeholder'=>'Enter Namkeen Name', 'value'=>set_value('namkeen_name')]); ?>
			    <?php echo br().form_error('namkeen_name'); ?>
			</div>
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
    				<option value="/250 gm">/250 gm</option>
    				<option value="/100 gm">/100 gm</option>
                </select>
			   <?php echo br().form_error('weight'); ?>
			</div>
		</div>
	</div>
		
	<div class='row'>
    	<div class="col-lg-6">
			<div class="form-group">
			    <label>Description</label>
			   <?php echo form_textarea(['name'=>'namkeen_description', 'class'=>'form-control', 'placeholder'=>'Enter namkeen Description', 'value'=>set_value('namkeen_description')]); ?>
			   <?php echo br().form_error('namkeen_description'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Namkeen Image</label>
				<?php echo form_upload(['name'=>'userfile','class'=>'form-control','type'=>'file']);
				if(isset($upload_error))
                    echo br(2).$upload_error; ?>
			</div>
		</div>
	</div>
	<?php echo form_submit(['name'=>'submit', 'value'=> 'Submit', 'class'=>'btn btn-primary btn-large']); ?>
	<?php echo form_fieldset_close(); ?>
	<?php form_close(); ?>
</div>
<?php include('admin_footer.php');?>

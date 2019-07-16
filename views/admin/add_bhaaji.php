<?php include('admin_header.php');?>
  	<div class='container'>
    	<?php echo form_open_multipart('Admin/add_bhaaji'); ?>
    	<?php echo form_fieldset('Add Bhaaji'); ?>
    	
    	  <div class='row'>
    	   <div class="col-lg-6">
			<div class="form-group">
			    <label>Bhaaji Name</label>
			    <?php echo form_input(['name'=>'bhaaji_name', 'class'=>'form-control', 'placeholder'=>'Enter Bhaaji Name', 'value'=>set_value('bhaaji_name')]); ?>
			    <?php echo br().form_error('bhaaji_name'); ?>
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
			    <label>Bhaaji Lines</label>
			  <select type="text" name="bhaaji_lines" class="form-control" placeholder="bhaaji_lines" value="<?php echo set_value('bhaaji_lines'); ?>">
      				<option value="/4lines">/4lines</option>
    				<option value="/5lines">/5lines</option>
    				<option value="/6lines">/6lines</option>
    				<option value="/7lines">/7lines</option>
    				<option value="/8lines">/8lines</option>
    				<option value="/9lines">/9lines</option>
    				<option value="/10lines">/10lines</option>
    				<option value="/11lines">/11lines</option>
    				<option value="/12lines">/12lines</option>
    				<option value="/13lines">/13lines</option>
                </select>
			   <?php echo br().form_error('bhaaji_lines'); ?>
			</div>
		</div>
	</div>
		
	<div class='row'>
    	<div class="col-lg-6">
			<div class="form-group">
			    <label>Description</label>
			   <?php echo form_textarea(['name'=>'bhaaji_description', 'class'=>'form-control', 'placeholder'=>'Enter bhaaji Description', 'value'=>set_value('bhaaji_description')]); ?>
			   <?php echo br().form_error('bhaaji_description'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Bhaaji Image</label>
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

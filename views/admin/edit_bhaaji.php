<?php
	include('admin_header.php');?>
  	<div class='container'>
    	<?php echo form_open_multipart('Admin/updateBhaaji','',['bhaaji_id'=>$data->bhaaji_id]); ?>
    	<?php echo form_fieldset('Edit Bhaaji Details'); ?>
    	
    	  <div class='row'>
    	   <div class="col-lg-6">
			<div class="form-group">
			    <label>Bhaaji Name</label>
			    <?php echo form_input(['name'=>'bhaaji_name', 'class'=>'form-control', 'placeholder'=>'Enter Bhaaji Name', 'value'=>$data->bhaaji_name]); ?>
			    <?php echo br().form_error('bhaaji_name'); ?>
			</div>
		   </div>
		  </div>
		  <div class='row'>
   			<div class="col-lg-4">
   			<div class="form-group">
			    <label>Price</label>
			   <?php echo form_input(['name'=>'price', 'class'=>'form-control', 'placeholder'=>'Enter Price', 'value'=>$data->price]); ?>
			   <?php echo br().form_error('price'); ?>
			</div>
   		</div>
    	  	<div class="col-lg-2">
			<div class="form-group">
			    <label>Bhaaji Lines</label>
			    <?php $bhaaji_lines=$data->bhaaji_lines; ?>
			  <select type="text" name="bhaaji_lines" class="form-control" placeholder="bhaaji_lines" value="<?php echo $bhaaji_lines; ?>" >
			  		<?php if(isset($bhaaji_lines)) echo "<option value='".$bhaaji_lines."'>".$bhaaji_lines."</option>"; ?>
      				<option value="/4 lines">/4 lines</option>
    				<option value="/5 lines">/5 lines</option>
    				<option value="/6 lines">/6 lines</option>
    				<option value="/7 lines">/7 lines</option>
    				<option value="/8 lines">/8 lines</option>
    				<option value="/9 lines">/9 lines</option>
    				<option value="/10 lines">/10 lines</option>
    				<option value="/11 lines">/11 lines</option>
    				<option value="/12 lines">/12 lines</option>
    				<option value="/13 lines">/13 lines</option>
                </select>
			   <?php echo br().form_error('bhaaji_lines'); ?>
			</div>
		</div>
	</div>
	<div class='row'>
   	  	<div class="col-lg-6">
			<div class="form-group">
			    <label>Description</label>
			   <?php echo form_textarea(['name'=>'bhaaji_description', 'class'=>'form-control', 'placeholder'=>'Enter Bhaaji Description', 'value'=>$data->bhaaji_description]); ?>
			   <?php echo br().form_error('bhaaji_description'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2">
        	<div class="form-group">
        		<label>Current Bhaaji Image</label>
        		<img src="<?php echo base_url('uploads/bhaaji/'.$data->bhaaji_image); ?>" style='height:80px; width:80px;' >
        	</div>
        </div>
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

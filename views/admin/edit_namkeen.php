<?php
	include('admin_header.php');?>
  	<div class='container'>
    	<?php echo form_open_multipart('Admin/updateNamkeen','',['namkeen_id'=>$data->namkeen_id]); ?>
    	<?php echo form_fieldset('Edit Namkeens Details'); ?>
    	
    	  <div class='row'>
    	   <div class="col-lg-6">
			<div class="form-group">
			    <label>Namkeen Name</label>
			    <?php echo form_input(['name'=>'namkeen_name', 'class'=>'form-control', 'placeholder'=>'Enter Namkeen Name', 'value'=>$data->namkeen_name]); ?>
			    <?php echo br().form_error('namkeen_name'); ?>
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
			    <label>Weight</label>
			    <?php $weight=$data->weight; ?>
			  <select type="text" name="weight" class="form-control" placeholder="weight" value="<?php echo $weight; ?>" >
			  		<?php if(isset($weight)) echo "<option value='".$weight."'>".$weight."</option>"; ?>
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
			   <?php echo form_textarea(['name'=>'namkeen_description', 'class'=>'form-control', 'placeholder'=>'Enter Namkeen Description', 'value'=>$data->namkeen_description]); ?>
			   <?php echo br().form_error('namkeen_description'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2">
        	<div class="form-group">
        		<label>Current Namkeen Image</label>
        		<img src="<?php echo base_url('uploads/namkeens/'.$data->namkeen_image); ?>" style='height:80px; width:80px;' >
        	</div>
        </div>
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

<?php
	include('admin_header.php');?>
  	<div class='container'>
  		<?php if($notification=$this->session->flashdata('notification')) :?>
  		<div class="row">
      		<div class="col-lg-6">
  				<div class="alert alert-dismissible alert-success" bis_skin_checked="1">
  					<button type="button" class="close" data-dismiss="alert">&times;</button>
  					<strong>Well done!</strong><br/>Sweet updated Successfully.</a>
				</div>
			</div>
		</div>
	<?php endif ?>
    	<?php echo form_open_multipart('Admin/updateSweet','',['sweet_id'=>$data->sweet_id]); ?>
    	<?php echo form_fieldset('Edit Sweets Details'); ?>
    	
    	  <div class='row'>
    	   <div class="col-lg-6">
			<div class="form-group">
			    <label>Sweet Name</label>
			    <?php echo form_input(['name'=>'sweet_name', 'class'=>'form-control', 'placeholder'=>'Enter Sweet Name', 'value'=>$data->sweet_name]); ?>
			    <?php echo br().form_error('sweet_name'); ?>
			</div>
		   </div>
		  </div>
		  <div class='row'>
		   <div class="col-lg-6">
   			<div class="form-group">
			    <label>Choose Category</label>			   
			    <?php $category= $data->category;?>
                <select type="text" name="category" class="form-control" placeholder="Category" value="<?php echo $category; ?>">
                	<?php if(isset($category)) echo "<option value='".$category."'>".$category."</option>"; ?>
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
    				<option value="/Pcs">/Pcs</option>
                </select>
			   <?php echo br().form_error('weight'); ?>
			</div>
		</div>
	</div>
		<div class='row'>
    	  	<div class="col-lg-12">
			<div class="form-group">
			    <label>Description</label>
			   <?php echo form_textarea(['name'=>'sweet_description', 'class'=>'form-control', 'placeholder'=>'Enter Sweet Description', 'value'=>$data->sweet_description]); ?>
			   <?php echo br().form_error('sweet_description'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2">
        	<div class="form-group">
        		<label>Current Sweet Image</label>
        		<img src="<?php echo base_url('uploads/sweets/'.$data->sweet_image); ?>" style='height:80px; width:80px;' >
        	</div>
        </div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Sweet Image</label>
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

<?php
  include('admin_header.php');?>
	<div class="container">
  	<br/>
  	<h1>Welcome Admin</h1>
    <hr/>
    <?php if($notification=$this->session->flashdata('notification')) :
    $class=$this->session->flashdata('notification_class'); ?>
      <div class="row">
          <div class="col-lg-6">
          <div class="alert alert-dismissible <?php echo $class; ?>" bis_skin_checked="1">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Notification!</strong><br/><?php echo $notification;  ?>
        </div>
      </div>

    </div>
  <?php endif ?>
    <div class="row">
          <div class="col-lg-6">
    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
      <div class="card-header">Sweets</div>
        <div class="card-body">
          <h4 class="card-title">Total Sweets available = <?php echo $sweets;?></h4>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
     <div class="col-lg-6">
      <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">Namkeens</div>
        <div class="card-body">
          <h4 class="card-title">Total Namkeens available = <?php echo $namkeens;?></h4>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
  </div>
  </div>
<?php include('admin_footer.php');?>

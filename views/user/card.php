
<html>
<head>
	  <title>SinghalSweets</title>
	  <link rel="stylesheet" type="text/css" href="../assets/ncss/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
	  <link href='https://fonts.googleapis.com/css?family=Roboto:500,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway|Reenie+Beanie">
	  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="../assets/ncss/newstyle.css">
</head>
<body>
	<header>
    <nav class="navbar navbar-expand-lg navbar-primary bg" style="background-color: #ffffff;">
    	<ul class="navbar-nav mr-auto">
    	<li>
    		<a class="kansas" href="<?php echo base_url() ?>" style="font-family: 'Galada', cursive; padding: 4px 4px 4px 4px;">Home</a>
    	</li>
      <li>
        <a class="kansas" href="<?php echo base_url("user/sweets") ?>" style="font-family: 'Galada', cursive; padding: 4px 4px 4px 4px;">Sweets</a>
      </li>
      <li>
        <a class="kansas" href="<?php echo base_url("sweets/namkeens") ?>" style="font-family: 'Galada', cursive; padding: 4px 4px 4px 4px;">Namkeen</a>
      </li>
    	</ul>
    	<img class="sydney" src="../assets/images/nlogof.png" height="100px" width="137px" style="z-index: 10;">
		<ul class="navbar-nav mr-auto navbar-right" style="margin-left: 500">
    		<li>
        <a class="kansas" href="<?php echo base_url("sweets/bhaaji") ?>" style="font-family: 'Galada', cursive; padding: 4px 4px 4px 4px;">Bhaji</a>
      </li>
      <li>
        <a class="kansas" href="<?php echo base_url("user/locator") ?>" style="font-family: 'Galada', cursive; padding: 4px 4px 4px 4px;">Store-Locator</a>
      </li>
      <li>
        <a class="kansas" href="<?php echo base_url("user/contact") ?>" style="font-family: 'Galada', cursive; padding: 4px 4px 4px 4px;">Contact Us</a>
      </li>
    </ul>
	</nav>
	</header>
	<div class="mbappe">
	<div style="font-family: 'Pristina', serif; color:#880322 ">
	<div class="dakota">
	<div id="content">
	  <br>
	  <br>
	  <p>Hover over the images to see the effect</p>
	  <?php foreach($sweets as $sweet): ?>
	  <div class="detroit">
	    <div class="flipper">
	      <div class="front">
	        <img class="chicago"  src="<?php echo base_url(); ?>assets/images/sweets/<?php echo $sweet['sweet_image']; ?>" alt="cherry blossoms" height=187px width=250px>
	        <b><p class="captain"><div style="font-family: 'Satisfy', cursive; font-size: 32;padding-top: 5px; margin-top: 4px;"><?php echo($sweet['sweet_name']); ?></div></p></b>
	      </div>
	      <div class="back">
	        <a class="alan" href="https://en.wikipedia.org/wiki/Cherry_blossom" target="_blank">
	          <div style="font-family: 'Satisfy', cursive; font-size: 32;padding-top: 4px;"><br><?php echo($sweet['sweet_name']); ?></div>
	        </a>
	        <p class="description"><?php echo($sweet['sweet_description']); ?></p>
	        <p class="date"><div style="font-family: 'Satisfy', cursive; font-size: 38;padding-top: 2px;"><?php echo($sweet['price']); ?> <?php echo($sweet['weight']); ?></div></p>
	      </div>
	    </div>
	  </div>
	  <?php endforeach; ?>
	</div>
</div>
</div>
</div>


<br><br>
	<footer>
    <div class="content" style="color:#000000;">
      <div id="emailsignup">
        <a href="" class="footer" style="color:#000000;"><div style="font-family: 'Satisfy', cursive; font-size: 38;padding-top: 2px;">Singhal Sweets</div></a>
            <br>
        <p style="color:#000000;"><div style="font-family: 'Satisfy', cursive; font-size: 20;padding-top: 2px;">Our legacy is the quality of our service to our consumer's. We follow Customer first policy.</div><br style="margin: 0 0 12px 0;"></p>
        <p><a href="<?php echo base_url('user/feedback') ?>" class="btn" style="display:inline-block;"   style="color:#000000;">Give us your feedback</a></p>
      </div>
      <div id="helpfullinks">
        <div>
          <p class="category"><a href="<?php echo base_url('user/legacy') ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 28;">About us</a></p>
          <ul>
            <li><a href="<?php echo base_url('user/page_under_construction') ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 20;">Our Wedding Boxes</a></li>
            <li><a href="<?php echo base_url('user/locator') ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 20;">Our Stores</a></li>
            <li><a href="<?php echo base_url('user/contact') ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 20;">Contact us</a></li>
            
          </ul>
        </div>
        <div>
          <p class="category"><a href="<?php echo base_url() ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 28;">Our Products</a></p>
          <ul>
            <li><a href="<?php echo base_url('user/sweets') ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 20;">Our Sweets</a></li>
            <li><a href="<?php echo base_url('sweets/namkeen') ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 20;">Our Namkeens</a></li>
            <li><a href="<?php echo base_url('sweets/bhaaji') ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 20;">Our Bhaaji</a></li>
            
          </ul>
        </div>
        <div class="last">
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <div id="poweredby">
        <p style="color:#000000;"><div style="font-family: 'Satisfy', cursive; font-size: 25;padding-top: 2px;"><a target="_blank" href="https://fb.me/intellijentDragon" style="color:#000000; font-family: 'Satisfy', cursive; font-size: 25;padding-top: 2px;">Powered by DotComBullies</a></div></p>
      </div>
      <div class="clear"></div>
      <div id="social">
        <ul class="social">
          <li><a target="_blank" href="https://www.instagram.com/singhalsweets/" style="color:#000000; font-family: 'Satisfy', cursive; font-size: 18;padding-top: 2px;">Instagram</a></li>
        </ul>
        <div class="clear"></div>
        <ul class="contact">
          <li class="last" style="color:#000000;"><div style="font-family: 'Satisfy', cursive; font-size: 18;padding-top: 2px;">&copy;1981-2019 Singhal Sweets</div></li>
        </ul>
      </div>
    </div>
  </footer>




</body>
</html>
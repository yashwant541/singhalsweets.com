<html>
<head>
	  <title>SinghalSweets</title>
	  <link rel="stylesheet" type="text/css" href="../assets/ncss/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	  <link href='https://fonts.googleapis.com/css?family=Roboto:500,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	  <link href='https://fonts.googleapis.com/css?family=Roboto:500,400,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Pristina">
      <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway|Reenie+Beanie|Playfair+Display">
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Playfair+Display">
	  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	  <link rel="stylesheet" type="text/css" href="../assets/ncss/wenstyle.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		
		TweenMax.staggerFrom(".wrapper .ad", 2, {
		   x: 105,
		   z:145,
		   rotationY:50,
		   opacity: 0,
		   ease: Expo.easeInOut
		},0.2);


		TweenMax.from(".wrapper .ad .content > *", 2, {
		    y: -50,
		    opacity: 0,
		    delay:1,
		    ease: Expo.easeInOut
		 });
		 TweenMax.from(".wrapper .ad .waterdrops", 2, {
		    x: -50,
		    opacity: 0,
		    scale:2,
		    delay:1.5,
		    ease: Elastic.easeInOut
		 });
		 
	</script>
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



<hr><br><br>
	<b><center style="font-family: 'Satisfy', cursive; font-size: 50px; float: center;">Our Sweets</center></b>
<br><br><hr><br><br>







<br>
	<!-- Images sourced from Wikimedia Commons http://commons.wikimedia.org/wiki/Main_page -->



<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
	<div class="moscow">
		<img src='../assets/images/category/Ghee sweets.png' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/ghee'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Ghee Sweets</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">Enjoy the special ghee prepared quality sweets for special occassions from our hard working professionals</p>
	</div>
</div>
<div class="col-md-4" style="float: left;">
	<div class="moscow">
		<img src='../assets/images/category/Milk sweets.png' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/milk'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Milk Sweets</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">Enjoy the pure essence and quality milk sweets with the taste of yumm escpecially to our beloved customers.</p>
	</div>
</div>
<div class="col-md-1"></div>
</div>


<br><br>


<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
	<div class="moscow">
		<img src='../assets/images/category/Bengali sweets.png' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/bengali'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Bengali Sweets</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">Get the flavour and taste of bengali sweets especially by our professionals.</p>
	</div>
</div>
<div class="col-md-4" style="float: left;">
	<div class="moscow">
		<img src='../assets/images/category/Delight sweets.JPG' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/delight'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Delight Sweets</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">The special delight sweets especially for special occasions with cent purity and essence.</p>
	</div>
</div>
<div class="col-md-1"></div>
</div>


<br><br>


<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
	<div class="moscow">
		<img src='../assets/images/category/Petha sweets.png' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/peetha'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Peetha Sweets</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">The special peetha sweets made from the highest quality peetha.</p>
	</div>
</div>
<div class="col-md-4" style="float: left;">
	<div class="moscow">
		<img src='../assets/images/category/Special ghevar.jpg' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/ghewar'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Special Ghewar Sweets</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">Enjoy the speciality of ghewar sweets escpecially made for you with highest quality and purity.</p>
	</div>
</div>
<div class="col-md-1"></div>
</div>


<br><br>


<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
	<div class="moscow">
		<img src='../assets/images/category/Aam papad.JPG' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/aam_papad'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Aam Papad</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">The special aam papad sweets made from the highest quality products.</p>
	</div>
</div>
<div class="col-md-4" style="float: left;">
	<div class="moscow">
		<img src='../assets/images/category/Kaju sweets.png' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/kaju'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Kaju Sweets</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">Enjoy the speciality of kaju sweets escpecially made for you with highest quality and purity.</p>
	</div>
</div>
<div class="col-md-1"></div>
</div>

<br><br><br><br>
<hr>
<br><br>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-5">
		<div class="moscow">
		<img src='../assets/images/category/Live section.png' height="300px" width="300px">
	</div>
	<div class="siberia">
		<a href="<?php echo base_url('sweets/live'); ?>"><b><div style="font-family: 'Satisfy', cursive; font-size: 35px; float: center; color: #2f2f30;">Live Section</div></b></a>
		<p  style="width:400px; padding: 3px 3px 3px 3px; font-family: 'Satisfy', cursive; font-size: 27px;">Enjoy the dhin dhin dhak dhak of our spicy yet sweet live food section.</p>
	</div>
	</div>
	<div class="col-md-3"></div>
</div>
<br><br>
<hr>
<br><br><br><br>








<br><br><br><br><br><br>
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
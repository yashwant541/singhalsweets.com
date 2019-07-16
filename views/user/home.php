<html>
<head>
	  <title>SinghalSweets</title>

	  <link rel="stylesheet" type="text/css" href="./assets/ncss/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
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
	  <link rel="stylesheet" type="text/css" href="./assets/ncss/styles.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  

    <script>
    	if($(window).width() >= 1224){
	  	$(window).scroll(function(){
		    if ($(window).scrollTop() >= 300) {
		        $('nav').addClass('fixed-header');
		        $('nav div').addClass('visible-title');
		    }
		    else {
		        $('nav').removeClass('fixed-header');
		        $('nav div').removeClass('visible-title');
		    }
		});
	  	}
	  	else{
	  		$('nav').addClass('fixed-header');
		    $('nav div').addClass('visible-title');
	  	}
	  </script>

	  <script>
	  	$(function(){
	      SyntaxHighlighter.all();
	    });
	    $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	      });
	    });
	  </script>
	  
    <script>
    </script>

</head>
<body>
	<header>
	<div class="manhattan">
    <div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <center><img src="./assets/images/carousel/3.png"></center>
	    </div>
	    <div class="carousel-item">
	      <center><img src="./assets/images/carousel/2.png"></center>
	    </div>
	    <div class="carousel-item">
	      <center><img src="./assets/images/carousel/4.png"></center>
	    </div>
      <!--
	    <div class="carousel-item">
	      <center><img src="./assets/images/4.png"></center>
	    </div>
	    <div class="carousel-item">
	      <center><img src="./assets/images/5.png"></center>
	    </div>
	    <div class="carousel-item">
	      <center><img src="./assets/images/6.png"></center>
	    </div>
      -->
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>

	</div>
	</div>
    <div class="clear"></div>
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
      <img class="sydney" src="./assets/images/nlogof.png" height="100px" width="137px" style="z-index: 10;">
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
	<br><br><br><br><br>
		





<!--
	<div class="minsk">
		<br><br><br>
		<a class="amoha" target="_blank" href="https://www.behance.net/doonnnx">
		<section class="slider">
		  <div class="flexslider">
		    <ul class="slides">
		      <li>
		  	    	   <img src="./images/grid7.jpg" width="400px" height="400px" />
		           <div class="flex-caption">
		             <span class="date">Thursday, July 16, 2015</span>
		             <h1>Adventurer Cheesecake Brownie</h1>
		           </div>
		           <div class="card-outmore">
		              <h5>Read more</h5>
		              <i id="outmore-icon" class="fa fa-angle-right"></i>
		           </div>
		  	     		</li>
		     </ul>
		    </div>
		 </section>
		</a>
		</div>


	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>

-->


	<div class="mobile">
		<div class="parallax"></div>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="dunkirk" style="z-index: 20;">
					<div style="padding-top: 2px;"></div>
						<center><h1>
						<div style="font-family: 'Pristina', serif; color:#880322 ">
						Explore our Singhal Sweets Collection
						</div>
						</h1></center>
						<br>
						<br><br>
						<div class="macaw">
						    <div class="photobanner">
						        <img class="first" src="./assets/images/infinite slider/1.png">
						        <img src="./assets/images/infinite slider/2.png">
                    <img src="./assets/images/infinite slider/3.png">
                    <img src="./assets/images/infinite slider/4.png">
                    <img src="./assets/images/infinite slider/5.png">
                    <img src="./assets/images/infinite slider/6.png">
                    <img src="./assets/images/infinite slider/7.png">
                    <img src="./assets/images/infinite slider/8.png">
                    <img src="./assets/images/infinite slider/9.png">
                    <img src="./assets/images/infinite slider/10.png">
                    <img src="./assets/images/infinite slider/11.png">
                    <img src="./assets/images/infinite slider/12.png">
                    <img src="./assets/images/infinite slider/13.png">
                    <img src="./assets/images/infinite slider/14.png">
                    <img src="./assets/images/infinite slider/15.png">
                    <img src="./assets/images/infinite slider/16.png">
                    <img src="./assets/images/infinite slider/17.png">
                    <img src="./assets/images/infinite slider/18.png">
                    <img src="./assets/images/infinite slider/19.png">
                    <img src="./assets/images/infinite slider/20.png">
                    <img src="./assets/images/infinite slider/21.png">
                    <img src="./assets/images/infinite slider/22.png">
                    <img src="./assets/images/infinite slider/23.png">
                    <img src="./assets/images/infinite slider/24.png">
                    <img src="./assets/images/infinite slider/25.png">
                    <img src="./assets/images/infinite slider/26.png">
                    <img src="./assets/images/infinite slider/27.png">
                    <img src="./assets/images/infinite slider/28.png">
                    <img src="./assets/images/infinite slider/29.png">
                    <img src="./assets/images/infinite slider/30.png">
                    <img src="./assets/images/infinite slider/31.png">
                    <img src="./assets/images/infinite slider/32.png">
                    <img src="./assets/images/infinite slider/33.png">
                    <img src="./assets/images/infinite slider/34.png">
                    <img src="./assets/images/infinite slider/35.png">
						    </div>
						</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
		<div class="parallax"></div>		
	</div>
	<br>
	<br>
	<div class="Vancouver">
		
	<br><br><br><br><br><br><br><br><br><br><br>
	<div class="panama">
		<div class="container">
		  <div class="row">
		      <div class="col-md-4">
		        <div class="dress-card">
		          <div class="dress-card-head">
		            <img class="dress-card-img-top" src="./assets/images/free/sweets.png" alt="">
		          </div>
		          <center><div class="dress-card-body">
		            <h4 class="dress-card-title"><a href="<?php echo base_url("user/sweets") ?>" style="color:#000000;">Sweets</a></h4>
		            </div></center>
		        </div>
		      </div>
		    <div class="col-md-4">
		        <div class="dress-card">
		          <div class="dress-card-head">
		            <img class="dress-card-img-top" src="./assets/images/free/namkeens.png">
		          </div>
		          <center><div class="dress-card-body">
		            <h4 class="dress-card-title"><a href="<?php echo base_url("sweets/namkeens") ?>" style="color:#000000;">Namkeen</a></h4>
		            </div></center>
		        </div>
		      </div>
		    <div class="col-md-4">
		        <div class="dress-card">
		          <div class="dress-card-head">
		            <img class="dress-card-img-top" src="./assets/images/free/bhaji box.png">
		          </div>
		          <center><div class="dress-card-body">
		            <h4 class="dress-card-title"><a href="<?php echo base_url("sweets/bhaaji") ?>"  style="color:#000000;">Bhaji Boxes</a></h4>
		            </div></center>
		        </div>
		      </div>
		    </div>
		</div>
		</div>






	</div>
	<br>
	<br><br>
	<br>
	<div class="munich"></div>

	<br><br><br><br><br>
<!--	
	<br><br><br><br><br>
	<div class="container">
		<div class="medellin">
-->
			<!--Griglia alternata testo e immagine, resposive con flexbox.-->
<!--
			<section>
			  <div class="grid-flex">
			    <div class="col col-image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/seattle-botanical-gardens.jpg);">
			    </div>
			    <div class="col col-text">
			      <div class="Aligner-item">
			        <p>&ldquo;I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.&rdquo;
			          <cite>- Maya Angelou</cite>
			        </p>
			      </div>
			    </div>
			  </div>
			  
			  <div class="grid-flex">
			    <div class="col col-image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/seattle-library-sm.jpg);">
			      &nbsp;
			    </div>
			    <div class="col col-text col-left">
			      <div class="Aligner-item">
			        <p>&ldquo;Simple is good.&rdquo;
			          <cite>- Jim Henson</cite>
			        </p>
			      </div>
			    </div>
			  </div>

			  <div class="grid-flex">
			    <div class="col col-image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/seattle-skylight-sm.jpg);">
			      &nbsp;
			    </div>
			    <div class="col col-text">
			      <div class="Aligner-item">
			        <p>&ldquo;Everybody has a plan until they get punched in the mouth.&rdquo;
			          <cite>- Mike Tyson</cite>
			        </p>
			      </div>
			    </div>
			  </div>

			  <div class="grid-flex">
			    <div class="col col-image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/madison-overture.jpg);">
			      &nbsp;
			    </div>
			    <div class="col col-text col-left">
			      <div class="Aligner-item">
			        <p>&ldquo;We are what we pretend to be, so we must be careful about what we pretend to be&rdquo;
			          <cite>- Kurt Vonnegut, Jr.</cite>
			        </p>
			      </div>
			    </div>
			  </div>

			  <div class="grid-flex">
			    <div class="col col-image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/madison-rainbow.jpg);">
			      &nbsp;
			    </div>
			    <div class="col col-text">
			      <div class="Aligner-item">
			        <p>&ldquo;Perfect is the enemy of good.&rdquo;
			          <cite> - Voltaire</cite>
			        </p>
			      </div>
			    </div>
			  </div>
			</section>
		</div> 
	</div>
-->


		<br><br>
	<div class="minsk">
		<div class="row">
			<div class="col-md-11">
				<div style="margin-top: 60px;"></div>
				<div class="liverpool">
					<div class="col-md-6">
					</div>
					<div class="col-md-5">
						<center><h2 style="font-family: 'Cookie', cursive;">Our Legacy</h2></center>
						<br>
						<h2><p style="font-size: 30; font-family: 'Cookie', cursive; ">
        Singhal Sweets, was started years ago as a family establishment in 1981 in Sikandrabad, a small village in the district of Bulandshahar, which has been further carried on and expanded by generation of our family.
      </p></h2>
						<a href="<?php echo base_url("user/legacy") ?>" style="font-size: 30;font-family: 'Cookie', cursive;">Read More</a>
					</div>
				</div>				
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>






	<br><br><br><br><br>
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
          <p class="category"><div style="color:#000000;font-family: 'Satisfy', cursive; font-size: 28;">About us</div></p>
          <ul>
            <li><a href="<?php echo base_url('user/legacy') ?>" style="color:#000000;font-family: 'Satisfy', cursive; font-size: 20;">Our Legacy</a></li>
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
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<title>JFMLMC</title>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <script src="<?php echo base_url();?>/Public/website_extensions/js/vendor/modernizr-2.7.1.min.js"></script>
        <script src="<?php echo base_url();?>/Public/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/css/normalize.css">
          <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/css/main.css">
		  <link rel="shortcut icon" type="../image/png" href="<?php echo base_url();?>/Public/website_extensions/img/icon.png"/>
		  <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/css/style.css">
		  <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/css/bootstrap.css">  
	      <link rel="stylesheet" href="<?php echo base_url();?>/Public/font-awesome/css/font-awesome.min.css">
		  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
		  <style>
		  	#footer_detail
		  	{
		  		color: white;
		  		text-align: center;
		  	}
		  	#footer
		  	{
		  		background-color: black;
		  	}
		  </style>
    </head>
    <body class="loading">

       	<div id="preload">
	       	<img src="<?php echo base_url();?>/Public/website_extensions/img/bcg_slide-1.jpg">
	       	<img src="<?php echo base_url();?>/Public/website_extensions/img/bcg_slide-2.jpg">
	       	<img src="<?php echo base_url();?>/Public/website_extensions/img/bcg_slide-3.jpg">
	       	<img src="<?php echo base_url();?>/Public/website_extensions/img/bcg_slide-4.jpg">
       	</div>
       	
       	<main>
	        <section id="slide-1" class="homeSlide">
	        	<div class="bcg">
		        	<div class="hsContainer">
						<nav class="navbar navbar-default navbar-fixed-top">
						  <div class="container-fluid">
						    <div class="navbar-header">
						      <a href="#" class="navbar-brand"><img src="<?php echo base_url();?>/Public/website_extensions/img/icon2.png"> </a>
						    </div>
						    <ul class="nav navbar-nav">
						      <li><a class="hvr-underline-from-center" href="#slide-1">Home</a></li>
						      <li><a class="hvr-underline-from-center" href="#">Services</a></li>
						      <li><a class="hvr-underline-from-center" href="#slide-2">About</a></li>
						      <li><a class="hvr-underline-from-center" href="#">Contact</a></li>
						    </ul>
						    		<?php if($this->session->userdata('username')){ ?>
						    		    <a href="<?php echo base_url('Main/dashboard'); ?>"><button type="button" class="btn btn-outline-warning navbar-btn navbar-right">Admin</button></a>
						    		<?php }
						    			else{ ?>
							    			<a href="<?php echo base_url('Main/employee_login'); ?>"><button type="button" class="btn btn-outline-warning navbar-btn navbar-right">Login</button></a>
						    		<?php } ?>
						  </div>
						</nav>
						<div class="panel"></div>
					<div class="jumbotron text-center pad-t">
					  <h1 style="font-weight: bold;, font-family: Bebas Neue, Arial;">Jewel's Maternity Lying-in and Medical Clinic</h1>
					  <!-- <p class="lead"><i>"The grand adventure is about to begin"</i></p> -->
					</div>
				</div>
		        	</div>
	        	</div>
		    </section>
		    
		    <section id="slide-2" class="homeSlide">
		    	<div class="bcg">
			    	<div class="hsContainer"><br><br>
			    	<div class="container-fluid">
					  <div class="row text-center">
					  	<div class="jumbotron text-center test">
					  		<h1 class="test" style="font-weight: bold;, font-family: Bebas Neue, Arial;,"><i>Our Core Beliefs</i></h1>
					  		<p class="lead test">Values that we adhere to.</p>
						</div>
					    <div class="col-sm-4"><img src="<?php echo base_url();?>/Public/website_extensions/img/2pcs.png"><br><h3 class="tit test">VISION</h3><p class="tits test"> By the year 2020, the <i>Jewels First Maternity Lying-in & Medical Clinic</i> will be a premier health provider of all patient, women's children & pregnant mothers.
					    	
					    </p></div>
					    <div class="col-sm-4"><img src="<?php echo base_url();?>/Public/website_extensions/img/1pcs.png"><br><h3 class="tit test">MISSION</h3><p class="tits test"> To provide quality health care and lessen the number of meternal/fetal mortality and morbity rate.
					    	
					    </p></div>
					    <div class="col-sm-4"><img src="<?php echo base_url();?>/Public/website_extensions/img/3pcs.png"><br><h3 class="tit test">VALUES</h3><p class="tits test"> Dedicated to providing high quality services. Continually striving for the best.				    	
					    </p></div>
					  </div>
		        	</div>
		        </div>
		    	</div>
		    </section>
		    
			<section id="slide-3">
				<div class="bcg">			    	
					<div class="hsContainer">
					<div class="container-fluid">
					  <div class="row text-center slide-tr">
					      <div class="col-md-6"><img src="<?php echo base_url();?>/Public/website_extensions/img/cal.png"></div>
  						  <div class="col-md-6"><p class="letit"> Appointment Scheduling for Free</p><br>
  						  	<p style="font-weight: bold;">Client Reminders, Easier and just one click away!</p>
  						  <a href="<?php echo base_url();?>Main/Book_appointment" type="button" class="btn btn-lg btn-outline-info">Book Now</a>	
					  	  </div>
		        	  </div>  	
			   		</div>
			   	</div>
				</div>
			</section>
			
			<footer class="container-fluid center-text footer-exd" id="footer">
			  <h2 id="footer_detail">136 Block 8, Zone 2, Barangay Fort Bonifacio Taguig | 09234644144 | Contact Us</h2>
			  <br>
			  <div class="row">
			  		<div class="col-md-4">
			  			<h4>Services</h4>
			  			<a href="#">Online Appointment</a>
			  		</div>
			  		<div class="col-md-4">
			  			<h4>About Us</h4>
			  		</div>
			  		<div class="col-md-4">
			  			
			  		</div>
			  </div>
			  
			  <div class="text-right">
			  	<p> <i class="fa fa-copyright"></i> <?php echo date('Y');  ?> | <a href="<?php echo base_url('Main/employee_login'); ?>"> Employee Login </a>| <i class="fa fa-facebook-official"></i> &nbsp;&nbsp; <i class="fa fa-youtube-play"></i> &nbsp;&nbsp; <i class="fa fa-instagram"></i> </p>
			  </div>
			 	  
			  <!-- <div id="map" style="width:400px;height:400px"> -->
			</footer>

		</main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>/Public/website_extensions/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>/Public/website_extensions/js/imagesloaded.js"></script>
        <script src="<?php echo base_url();?>/Public/website_extensions/js/skrollr.js"></script>
        <script src="<?php echo base_url();?>/Public/website_extensions/js/_main.js"></script>
          <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbX7xBy9FyXBPe12Rdl40biHPIpClHJCc&callback=initMap"
 			 type="text/javascript"></script>
		    <script>
		      function initMap() {
		        var uluru = {lat: 14.527495, lng:121.026183};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 21,
		          center: uluru,
		          mapTypeId: 'satellite'
		        });
		        
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
		    </script> -->
    </body>
</html>


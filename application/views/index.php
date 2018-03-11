<!DOCTYPE html>
<html lang="en">
<head>

  <title>MCMS | Home </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="../image/png" href="<?php echo base_url(); ?>/Public/website_extensions2/img/w-ico.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/Public/website_extensions2/css/Index.css">
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand brd" href="#myPage"><s>MCMS</s></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#schedule">APPOINTMENT</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <?php if($this->session->userdata('username'))
        { ?>
          <li><a href="<?php echo base_url('Main/dashboard');?>">ADMIN</a></li>
        <?php 
        }
        else
        {
        ?>
        <li><a href="<?php echo base_url('Main/employee_login');?>">EMPLOYEE LOGIN</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <p data-aos="fade-right"><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/w-ico.png"></p>
  <h1 style="text-transform: uppercase;" data-aos="fade-up">Jewel's First Maternity Lying-in and Medical Clinic</h1> 
  <p>We specialize in delivering BABIES</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Jewel's Firsrt Maternity and Lying-In Medical Clinic</h2>
      <h4></h4><br>
      <p>Maternity Clinic, also Lying-in Clinic, is an institution in the Philippines that provide excellent maternal services for pregnant women, newborn infants, and promoting reproductive health for the community. It offers maternal services including prenatal checkup, postnatal checkup, delivery or child birth, consultation, immunization, newborn screening, laboratory, and Family Planning. Maternity Clinic’s organization must be mainly composed of Midwives, Obstetrician, Gynecologist, and Pediatrician. Midwives, Obstetrician, and Gynecologist are responsible mostly to the maternal services for pregnant patients, while the Pediatrician is the one who manage the health of the child.  
 
     Maternity Clinics are under the Department of Health (DOH) and must secure necessary permits to operate. Some Midwives are affiliated to some associations like the Midwives Association of the Philippines (IMAP, Inc.). IMAP, Inc. was born on 1947 headed by Atty. Angelina C. Ponce where its main visions are to promote highest standards of midwifery practice, enhance the competence of members, reduce maternal and infant mortality, and sustain collaboration and partnership with related agencies. 
</p>

    </div>
    <div class="col-sm-4">
      <span data-aos="flip-left" class="glyphicon glyphicon-bell logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid">
            <div class="row text-center">
              <div class="text-center test">
                <h2 class="OCB" data-aos="flip-up">Our Core Beliefs</h2>
                <h4 data-aos="flip-up">Values that we adhere to.</h4>
            </div><br><br>
              <div class="col-sm-4" data-aos="zoom-in"><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/v-bin.png"><br><h3 class="test">VISION</h3><p class="tits test"> By the year 2020, the <i>Jewels First Maeternity Lying-in & Medical Clinic</i> will be a premier health provider of all patient, women's children & pregnant mothers.
                
              </p></div>
              <div class="col-sm-4" data-aos="zoom-in"><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/v-roc.png"><br><h3 class="test">MISSION</h3><p class="tits test"> To provide quality health care and lessen the number of meternal/fetal mortality and morbity rate.
                
              </p></div>
              <div class="col-sm-4" data-aos="zoom-in"><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/v-tar.png"><br><h3 class="test">VALUES</h3><p class="tits test"> Dedicated to providing high quality services. Continually striving for the best.             
              </p></div>
            </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center  bg-grey">
  <h2 class="OCB">SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div data-aos="fade-up" class="row">
    <div class="col-sm-3">
      <span><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/s-1.png"></span>
      <h4>Pre Natal</h4>
    </div>
    <div class="col-sm-3">
      <span><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/s-2.png"></span>
      <h4>Post Natal</h4>
    </div>
    <div class="col-sm-3">
      <span><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/s-3.png"></span>
      <h4>Child Birth</h4>
    </div>
    <div class="col-sm-3">
      <span><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/s-4.png"></span>
      <h4>Paps Smear</h4>
    </div>
  </div>
  <br><br>
  <div data-aos="fade-up" class="row">
    <div class="col-sm-3">
      <span><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/s-5.png"></span>
      <h4>Laboratory</h4>
    </div>
    <div class="col-sm-3">
      <span><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/s-6.png"></span>
      <h4>Ultra Sound</h4>
    </div>
    <div class="col-sm-3">
      <span><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/s-7.png"></span>
      <h4 style="color:#303030;">Consultation</h4>
    </div>
    <div class="col-sm-3">
      <span><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/s-8.png"></span>
      <h4 style="color:#303030;">Immunization</h4>
    </div>

  </div>
</div>


<!-- Container (Schedule Section) -->
<div id="schedule" class="container-fluid text-center ">
    <div class="row text-center">
        <div class="col-md-6" data-aos="zoom-in-up"><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/a-cal.png"></div>
        <div class="col-md-6 slide-tr" data-aos="zoom-in-up"><p class="letit">Schedule an Appointment for Free!</p><br>
            <a href="<?php echo base_url();?>Main/appointment"><button type="button" class="btn btn-lg btn-outline-info">Book Now</button></a>  
        </div>
    </div>
<br><br>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT US</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> 136 Block 8, Zone 2, Barangay Fort Bonifacio, Taguig City</p>
    </div>
    <?php echo form_open('Main/feedback') ?>
      <div class="col-sm-7" data-aos="fade-up">
        <?php if($this->session->flashdata('feedback_result')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><i class="fa fa-thumbs-o-up"></i></strong><?php echo $this->session->flashdata('feedback_result'); ?>
          </div>
        <?php endif ?>
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="phone" name="phone" placeholder="Phone Number" type="text">
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="company" name="company" placeholder="Company">
          </div>
        </div>
        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>  
      </div>
    </form>
  </div>
</div>


<footer class="container-fluid text-center footer-exd">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
        <div class="row">
          <div class="col-md-4"><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/f-pho.png"><p class="for">CALL</p><p>288-42-60</p></div>
          <div class="col-md-4"><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/f-map.png"><p class="for">FIND US</p><p>Tauguig city</p></div>
          <div class="col-md-4"><img src="<?php echo base_url(); ?>/Public/website_extensions2/img/f-clo.png"><p class="for">OPENING HOURS</p><p>8:00 - 17:00</p></div>
        </div>
        <h5>all rights reserved 2017</h5>
</footer>

  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

  $(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

      AOS.init({
      duration: 1000,
    })


</script>

</body>
</html>
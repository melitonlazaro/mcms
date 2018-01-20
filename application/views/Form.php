<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/css/main.css">
        <script src="<?php echo base_url();?>/Public/website_extensions/js/vendor/modernizr-2.7.1.min.js"></script>
      <link rel="shortcut icon" type="../image/png" href="<?php echo base_url();?>/Public/website_extensions/img/icon.png"/>
      <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/css/bootstrap.css">  
      <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions/font-awesome/css/font-awesome.min.css">
      <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
    </head>
<body class="form-exd">
  <div class="container form-con">
    <div class="panel panel-default  form-in">
      <div class="panel-heading"><h3>Book Appointment</h3></div>
        <div class="panel-body">
            <div class=container-fluid>
              <div id="choose_service">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0"
                  aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    0%
                  </div>
                </div>
                <?php echo form_open('Appointment/Book_appointment') ?>
                    <select class="form-control" name="service">
                      <option>Prenatal Checkup</option>
                      <option>Postnatal Checkup</option>
                      <option>Laboratory</option>
                      <option>Infant Consultation</option>
                      <option>Paps Smear</option>
                      <option>Immunization</option>
                      <option>Ultrasound</option>
                    </select>
              </div>
              <div id="choose_date">
                  <div class="input-append date form_datetime">
                      <input size="16" name="appt_date" type="text" class="form-control" readonly>
                      <span class="add-on"><i class="icon-th"></i></span>
                  </div>
                  <input type="submit" >
              </div>
            </div>
        <?php echo form_close(); ?>
          <div class="col-md-4">
             <div style="text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 15px;"> Reason for Visit</div>
                <div class="dropdown">
                <button class="btn btn-fm btn-default dropdown-toggle" type="button" data-toggle="dropdown">Yearly Check up
                <span class="caret"></span></button>
                <ul class="dropdown-menu btn-fm">
                  <li><a href="#">*shurg*</a></li>
                  <li><a href="#">*shurg*</a></li>
                  <li><a href="#">*shurg*</a></li>
                </ul>
                </div>
                <div class="fm-txt">Name</div>
                <input class="text-fm" type="text" name="">

                <div class="fm-txt">Email Address</div>
                <input class="text-fm" type="text" name="">
  
                <div class="fm-txt">Contact Number</div>
                <input class="text-fm" type="text" name="">
          </div>

          <div class="col-md-8"></div>
       </div>
      
    <div class="panel-footer text-center">
        <a href="index.html" type="button" class="btn btn-lg btn-fix">Cancel</a>
        <a type="button" class="btn btn-lg btn-outline-info">Book Now</a>
    </div>
    </div>
  </div>
<script type="text/javascript">
  $(document).ready(function(){
       $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
  });
 
</script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="<?php echo base_url();?>Public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>Public/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url();?>Public/js/bootstrap-datetimepicker.js"></script>
</body>
</html>

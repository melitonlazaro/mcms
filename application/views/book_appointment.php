<!DOCTYPE html>
<html>
<head>
	  <?php require('extensions.php'); ?>
</head>
<body>
	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url();?>Main">MCMS</a>
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>Main/book_appointment/<?php echo $this->session->userdata('patient_ID'); ?>">Schedule an Appointment</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>Main/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>
  <br>

</body>
</html>
<html>
<head>
  <?php require('extensions.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">
  <title></title>
</head>
<body>

  <?php
  require 'sidenav.php'; 
  ?>
  <br><br><br>
<div class="container-fluid">
  <h1 class="page-header">Patients List</h1>
    <div class="container-fluid">
      <div class="pull-right">
        <ol class="breadcrumb">
          <li>
            <a href="../Main/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li class="active">
            <i class="fa fa-user-o"></i> Patient List
          </li>
        </ol>
      </div>
      <br><br>
  <div class="container-fluid">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Patient ID</th>
          <th>Last Name</th>
          <th>Given Name</th>
          <th>MI</th>
          <th>Occupation</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        
          <?php foreach ($dt_li as $dt) 
          {
            echo '
              <tr>
                <td>'.$dt->patient_ID.'</td>
                <td>'.$dt->last_name.'</td>
                <td>'.$dt->given_name.'</td>
                <td>'.$dt->middle_initial.'</td>
                <td>'.$dt->occupation.'</td>
                <td>'?> <a href="<?php echo base_url();?>Prms/patient_timeline/<?php echo $dt->patient_ID;?>"><button class="btn btn-primary">Profile</button></td>
              </tr>
          <?php
          } ?>

      </tbody>
    </table>
  <script src="<?php echo base_url();?>public/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>public/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
</body>
</html>
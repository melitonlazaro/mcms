<html>
<head>
	<?php require('extensions.php'); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">
	<title>MCMS</title>

</head>
<body style="margin-left: 25px; margin-right: 25px;">

      <?php require('sidenav.php'); ?> 

	<div style="padding-top: 120px;">
    	<div class="row">
    		<div class="col-md-12">
    			<div style="float: right;">
    				<a href="<?php echo base_url();?>Prms/profiling">
					<button class="btn btn-info">
						<h5><i class="fa fa-plus-square-o"></i>&nbsp; Create Maternity Case</h5>
					</button>
				</div>
				<br><br><br><br>
				<table id="example1" class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
				          <th>Case ID</th>
				          <th>Patient ID</th>
				          <th>Patient Name</th>
				          <th>Date Start</th>
				          <th>Status</th>
				          <th>Action</th>
						</tr>
					</thead>
					<tbody>
							<?php
							$date = date('d-m-Y');
							$total = date('d-m-Y', strtotime('-2 week', strtotime($date)));
							// echo $total;
							?>
							<?php foreach ($case_details as $cd) 
							{
								echo '
									<tr>
								          <td>'.$cd->case_id.'</td>
								          <td>'.$cd->patient_ID.'</td>
								          <td>'.$cd->last_name.', '.$cd->given_name.' '.$cd->middle_initial.'</td>
								          <td>'.$cd->date_start.'</td>
								          <td>'.$cd->status.'</td> 
								          <td>
								            <a href="../prms/case_timeline/'.$cd->case_id.'"><button class="btn btn-info">View</button></a>
								          </td>     
									</tr>
									 ';
							} ?>

					</tbody>
				</table>
			</div>
		</div>		 
	</div>
 <script src="<?php echo base_url();?>public/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>public/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#example1').DataTable({
        buttons:[
        {
          text:'My Button'

        }]
      });
    });
  </script>
</body>
</html>
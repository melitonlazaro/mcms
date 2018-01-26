<html>
<head>
	<?php require('extensions.php'); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">
	<title>MCMS</title>

</head>
<body>

      <?php require('sidenav.php'); ?> 

	<br><br><br><br><br><br><br>

	<div id="content">
    	<button class="btn btn-info"></button>
    	<br><br><br>
		<table id="example1" class="table table-bordered table-striped">
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
						            <a href="../prms/prenatal/'.$cd->patient_ID.'/'.$cd->case_id.'"><button class="btn btn-success">Prenatal</button></a>';
						            if($cd->date_start == $total )
						            {
						              echo ' <button class="btn btn-warning">Childbirth </button> ';
						            }
						            elseif($cd->date_start < $total)
						            {
						              echo '<button class="btn btn-danger ">Childbirth </button>';
						            }
						            else
						            {
						              echo '<button class="btn btn-success" disabled>Childbirth </button>';
						            }
						            echo'
						          </td>     
							</tr>
							 ';
					} ?>

			</tbody>
		</table>
		<br><br><br><br><br><br>
		
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
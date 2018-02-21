<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require('extensions.php'); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">
</head>
<body>
	<?php require('sidenav.php'); ?>
	<br><br><br><br>
	<div class="container">
		<table id="table1" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Log Number</th>
					<th>Activity</th>
					<th>Module</th>
					<th>Date</th>
					<th>Time</th>
				</tr>
			</thead>
			<tbody>
					<?php foreach($activity_log as $al) 
						{
							echo 
							'
								<tr>
									<td>'.$al->activity_log_id.'</td>
									<td>'.$al->activity.'</td>
									<td>'.$al->module.'</td>
									<td>'.$al->date.'</td>
									<td>'.$al->time.'</td>
								</tr>
							';
						}
					?>
			</tbody>
		</table>

	</div>

<script src="<?php echo base_url();?>public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>public/js/dataTables.bootstrap.min.js"></script>
 <script>
    $(function () {
      $('#table1').DataTable({
        buttons:[
        {
          text:'My Button'

        }]
      });
    });
  </script>
</body>
</html>
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
	<div style="padding-top: 20px; margin-left: 30px; margin-right: 30px;" class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2><strong>Activity Log </strong></h2>
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
		</div>
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
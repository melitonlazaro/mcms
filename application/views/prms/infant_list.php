<!DOCTYPE html>
<html>
<head>
	<?php require('extensions.php'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">
	<title></title>
</head>
<body style="margin-left: 25px; margin-right: 25px;">
	<?php require('sidenav.php'); ?>
	<br><br><br><br><br><br>
	
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2><strong>Infants List </strong></h2>
				<table id="infant_table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Infant ID</th>
							<th>Name</th>
							<th>Date of Birth</th>
							<th>Mother's Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($infants as $i) 
						{
							echo '
									<tr>
									<td>'.$i->infant_id.'</td>
									<td>'.$i->infant_first_name.' '.$i->infant_last_name.'</td>
									<td>'.$i->infant_date_of_birth.'</td>
									<td>'.$i->given_name.' '.$i->last_name.'</td>
									<td>';?> <a href="<?php echo base_url();?>Prms/infant_profile/<?php echo $i->infant_id;?>"><button class="btn btn-info">Profile</button></a></td>
									</tr>
						
						<?php 
						}
						?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

	<script src="<?php echo base_url()?>/public/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>/public/js/dataTables.bootstrap.min.js"></script>
	<script>
		$(function (){
		$('#infant_table').DataTable()
		})
	</script>
</html>

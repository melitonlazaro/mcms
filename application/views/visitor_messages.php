<!DOCTYPE html>
<html>
<head>
	<?php require('extensions.php'); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">

</head>
<body>
	<?php require('sidenav.php'); ?>
	<br><br><br><br><br>
		<div class="container-fluid">
			<div class="page-header">
			  <h2>Messages</h2>
			</div>
			<br><br>
			<table class="table table-bordered table-hover table-striped" id="feedback_table">
				<thead>
					<tr>
						<th>Message ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Company</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($vm as $vms) 
					{
						echo '
								<tr>
					  	            <td>'.$vms->feedback_id.'</td>
									<td>'.$vms->name.'</td>
									<td>'.$vms->email.'</td>
									<td>'.$vms->phone.'</td>
									<td>'.$vms->company.'</td>
									<td>'.$vms->message.'</td>   
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
  		$(function() {
  			$('#feedback_table').DataTable();
  		});
  	</script>
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
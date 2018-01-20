<html>
<head>
	<title></title>
		<?php require('extensions.php'); //The Extensions.php calls the CSS and JS that is needed.?> 
</head>
<body>

	<div class="container-fluid">
		<a href="<?php echo base_url();?>prms/profiling">Profiling</a><br>
		<a href="#">Physical Examination</a><br>
		<a href="<?php echo base_url();?>prms/start_medical_history">Medical History</a><br>
		<a href="<?php echo base_url();?>Online">Online Appointment</a>
		<br><br>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Add New Case</button>
             <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
               <div class="modal-dialog modal-sm" role="document">
                 	<div class="modal-content">
	                    <div class="modal-header">
	                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                     <h4 class="modal-title" id="addLabel">New Case</h4>
	                    </div>                            
	                    <div class="modal-body">
	                    	<div class="row">
		                    	<a href="<?= base_url();?>prms/profiling"><button class="btn btn-info btn-block">New Patient</button></a><br>
		                    	<a href="<?= base_url();?>prms/new_existing_case"><button class="btn btn-info btn-block">Existing Patient</button></a>
		                    </div>	
	                    </div>
                    </div>
                </div>
			</div>
	<?php echo form_open('Main/logout'); ?>
	<button type="submit" class="btn btn-danger"> Logout </button> 
	</form>
	<div class="container-fluid">
		<table class="table table-hover table-striped table-bordered">
			<tr>
				<th>Patient ID</th>
				<th>Last Name</th>
				<th>Given Name</th>
				<th>Middle Initial</th>
				<th>Contact Number</th>
				<th>Date Registered</th>
				<th>Action</th>
			</tr>
		<?php 
			foreach($patient_info as $pi)
			{
				echo 
				'
				<tr>
					<td>'.$pi->patient_ID.'</td>
					<td>'.$pi->last_name.'</td>
					<td>'.$pi->given_name.'</td>
					<td>'.$pi->middle_initial.'</td>
					<td>'.$pi->contact_num.'</td>
					<td>'.$pi->date_registered.'</td>
				';
				?>
					<td><a href="<?php echo site_url();?>Prms/Patient_profile/<?php echo $pi->patient_ID;?>">
					<button class="btn btn-primary"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</button></a></td>
				</tr>
		<?php 
			}
		?>
		</table>
	</div>	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	
</body>
</html>
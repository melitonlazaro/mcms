<!DOCTYPE html>
<html>
<head>
	<?php require('extensions.php'); ?>
</head>
<body>
	<?php require('sidenav.php'); ?>
	<br><br><br><br><br><br>
	<div class="container">
		<div class="panel panel-default" id="emergency_profiling">
			<div class="panel-body">
				<h2>Profiling</h2>
				<br>
				<?php echo form_open_multipart('Prms/emergency_childbirth_profiling'); ?>
						<div class="row">
							<div class="col-md-4">
								<label for="last_name">Last Name</label>
							    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
							</div>
							<div class="col-md-4">
								<label for="given_name">First Name</label>
							    <input type="text" class="form-control" id="given_name" name="given_name" placeholder="First Name" required>
							</div>
							<div class="col-md-4">
								<label for="middle_initial">Middle Initial</label>
								<input type="text" name="middle_initial" id="middle_initial" class="form-control" placeholder="Middle Initial" required>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<label for="occupation">Occupation</label>
							    <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Occupation" required>
							</div>
							<div class="col-md-4">
								<label for="date_of_birth">Date of Birth</label>
							    <?php $date_max = date('Y-m-d'); ?>
							    <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="Date of Birth" max="<?php echo $date_max; ?>" required>
							</div>
							<div class="col-md-4">
								<label for="contact_num">Contact Number</label>
							    <input type="text" id="contact_num" name="contact_num" class="form-control" id="contact_num" placeholder="Contact Number" required>
							</div>
						</div>
						<h3>Address</h3>
						<div class="row">
							<div class="col-md-4">
								<label for="street_no">Street Number</label>
							    <input type="text"  name="street_no" class="form-control" id="street_no" placeholder="Street Number" required>
							</div>
							<div class="col-md-4">
								<label for="brgy">Barangay</label>
							    <input type="text"  name="brgy" class="form-control" id="brgy" placeholder="Barangay" required>
							</div>
							<div class="col-md-4">
								<label for="city">City</label>
							    <input type="text"  name="city" class="form-control" id="city" placeholder="City" required>
							</div>
						</div>
						<h3>Emergency Contact Information</h3>
						<div class="row">
							<div class="col-md-4">
								<label for="name">Name</label>
							    <input type="text" name="emergency_contact_name" class="form-control" id="emergency_contact_name" placeholder="Name" required>
							</div>
							<div class="col-md-4">
								<label for="emergency_contact_number">Emergency Contact Number</label>
							    <input type="text" name="emergency_contact_num" class="form-control" id="emergency_contact_num" placeholder="Emergency Contact Number" required>
							</div>
							<div class="col-md-4">
								<label for="emergency_contact_address">Emergency Contact Address</label>
							    <input type="text" class="form-control" name="emergency_contact_address" id="emergency_contact_address" placeholder="Emergency Contact Address" required>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-2">
								<h4><b>Upload Picture</b></h4>
							</div>
							<div class="col-md-5">
								<input type="file" class="form-control" id="userfile" name="userfile" size="20" />
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<div class="pull-right">
									<button type="submit" id="create_new_record" class="btn btn-success"><i class="fa  fa-user-plus"></i> Create New Patient Record</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	
</body>
</html>
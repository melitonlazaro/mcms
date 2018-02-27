<!DOCTYPE html>
<html>
<head>
	<?php require('extensions.php'); ?>
</head>
<body>
	<br><br><br><br><br><br>
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo form_open('Prms/childbirth') ?>
				<strong>Infant Information</strong>
	            <br><br>
	            <div class="row">
	                <input type="hidden" name="patient_ID" value="<?php echo $patient_ID; ?>">
	                <input type="hidden" name="case_id" value="<?php echo $case_ID; ?>">
	               	<div class="col-md-4">
	                    <label>Surname</label>
	                    <input type="text" name="infant_last_name" class="form-control"placeholder="Surname">
	                </div>
	                <div class="col-md-4">
	                    <label>First Name</label>
	                    <input type="text" name="infant_first_name" class="form-control" placeholder="First Name">
	                </div>
	                <div class="col-md-4">
	                    <label>M.I</label>
	                    <input type="text" name="infant_middle_initial" class="form-control" placeholder="Middle Initial">
	                </div>
	            </div><br>
	            <div class="row">
	                <div class="col-md-4">
	                    <?php $current_date = date('Y-m-d'); ?>
	                    <label>Date of Birth</label>
	                    <input type="date" name="infant_date_of_birth" class="form-control" placeholder="Date of Birth" value="<?php echo $current_date; ?>">
	                </div>
	                <div class="col-md-4">
	                    <label>Time of Birth</label>
	                    <input type="time" name="time_of_birth" class="form-control" placeholder="Time of Birth">
	                </div>
	                <div class="col-md-4">
	                    <label>Weight</label>
	                    <div class="input-group">
	                        <input type="text" name="weight" class="form-control" placeholder="Weight">
	                        <span class="input-group-addon">g</span>
	                    </div>
	                </div>     
	            </div><br>
	            <div class="row">
	                <div class="col-md-4">
	                        <label>Length</label>
	                        <div class="input-group">
	                            <input type="text" name="length" class="form-control" placeholder="Length">
	                            <span class="input-group-addon">Cm</span>
	                        </div>
	                    </div>
	                <div class="col-md-4">
	                    <label>Gender</label>
	                    <select class="form-control" name="gender">
	                        <option>Male</option>
	                        <option>Female</option>
	                    </select>
	                </div>
	                <div class="col-md-4">
	                    <label>Gravida</label>
	                    <input type="text" name="gravida" class="form-control" placeholder="Gravida">
	                </div>
	            </div><br>
	            <div class="row">
	                <div class="col-md-4">
	                    <label>Para</label>
	                    <input type="text" name="para" class="form-control" placeholder="Para">
	                </div>
	                <div class="col-md-4">
	                    <label>Head Circumference</label>
	                    <div class="input-group">
	                        <input type="number" name="head_circumference" class="form-control">
	                        <span class="input-group-addon">Cm</span>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <label>Chest Circumference</label>
	                    <div class="input-group">
	                        <input type="number" name="chest_circumference" class="form-control">
	                        <span class="input-group-addon">Cm</span>
	                    </div>
	                </div>
	            </div><br>
	            <div class="row">
	                <div class="col-md-12">
	                    <label>Newborn Screening: &nbsp;</label>
	                    <label class="radio-inline"><input type="radio" value="Yes" name="newborn_screening">Yes</label>
	                    <label class="radio-inline"><input type="radio" value="No" name="newborn_screening">No</label>
	                </div>
	            </div>
	            <div class="pull-right">
	            	<button type="submit" id="create_new_record" class="btn btn-success"><i class="fa  fa-user-plus"></i> Create New Patient Record</button>
	            </div>
	        	</form>
			</div>	
		</div>
	</div>
</body>
</html>

		
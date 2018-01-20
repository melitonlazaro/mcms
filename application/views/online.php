<html>
<head>
	<title>Online Appointment</title>
	<?php require ('extensions.php'); ?>
</head>
<body>
	
	<div class="contaienr-fluid">	
		<div class="row">
			<div class="col-md-4">
				<?php echo form_open('Main/online_appointment'); ?>
					<label>First Name</label>
					<input type="text" name="name" class="form-control" required>
					<br>
					<label>Last Name</label>
					<input type="text" name="surname" class="form-control" required>
					<br>
					<label>Address</label>
					<input type="text" name="address" class="form-control" required>
					<br>
					<label>Date</label>
					<input type="date" name="date" class="form-control" min="<?php echo date('Y-m-d');?>" required>
					<br>
					time
					<input type="text" name="time" class="form-control" required>
					<br>
					Contact Number
					<input type="text" name="contact_number" value="+63" class="form-control" required>
					<br>
					Procedure
					<select class="form-control" name="">
						<option>Prenatal</option>
						<option>Postnatal</option>
						<option>Laboratory</option>
					</select>
					<br>
					<br>
					<button type="submit" class="btn btn-success" name="send" value="Send">Submit</button>
				</form>
			</div>
		</div>
 	</div>

<br><br><br>
<?php

	if(isset($_POST["send"]))
	{
		include "smsGateway.php";
		$smsGateway = new SmsGateway('melitonlazaro1@gmail.com', '09153864099');

		$number = $_POST["number"];
		$message = $_POST["message"];
	
		$number_code = mt_rand(10000, 99999);
		$deviceID = 56400;
		$number = '+639225824215';
		$message = 'Your Number Code is: '.$number_code.'. Please input this to the Number Code Textbox.';

		$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);	
	}
?>

</body>
</html>

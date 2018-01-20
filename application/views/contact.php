<!DOCTYPE html>
<html>
<head>
	<?php require ('extensions.php'); ?>
	<title></title>
</head>
<body>

	<div class="row">
		<div class="col-md-8">
			<?php echo form_open('Main/feedback'); ?>
				<div class="form-group">
					<div class="form-inline">
						<label for="first">First Name:</label>
						<input type="text" class="form-control" id="first" name="first_name"> 
						<label for="last">Last Name:</label>
						<input type="text" class="form-control" id="last" name="last_name">
					</div>
					<div class="form-inline">
						<label for="email">Email:</label>
						<input type="text" class="form-control" id="email" name="email">	
					</div>
					<div class="form-inline">
						<label for="phone">Phone:</label>
						<input type="text" class="form-control" id="phone" name="phone">
					</div>
					<div class="form-inline">
						<label for="company">Company:</label>
						<input type="text" class="form-control" id="company" name="company">
					</div>
					<div class="form-inline">
						<label for="message">Message:</label>
						<textarea class="form-control" name="message"></textarea>
					</div>
					<button type="submit" class="btn btn-success">Submit </button>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<?php if($this->session->flashdata('feedback_result'))
			{
				echo $this->session->flashdata('feedback_result');
			}
			else
			{
				
			} ?>
		</div>
	</div>

</body>
</html>
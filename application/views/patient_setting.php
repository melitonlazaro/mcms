<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="../image/png" href="img/w-ico.png">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/Admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>MCMS</title>
</head>
<body style="background-color: #ecf0f5;">
	<div class="wrapper">
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="btn btn-info navbar-btn">
                            <a href="<?php echo base_url();?>Main/patient_profile">
                                <i class="glyphicon glyphicon-user"></i>
                            </a>
                        </button>
                         <span id="lblGreetings"></span>
                    </div>
                        <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url();?>Main/book_appointment"><span class="glyphicon glyphicon-pencil"></span> Appointment</a></li>
                                <li><a href="<?php echo base_url();?>Main/patient_settings"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                                <li><a href="<?php echo base_url();?>Main/patient_logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid">
    	<div class="container">
			<div class="panel panel-default">
	    		<div class="panel-body">
	    			<h4><strong><i class="fa fa-cog"></i> Settings</strong></h4>
	    			<br>
	    			<br>
	    			<?php echo form_open('Main/change_patient_password') ?>
		    			<div class="container">
		    				<div class="row">
		    					<div class="col-md-6">
		    						<?php if($this->session->flashdata('not_identical')) 
				    					{
				    						echo '<div class="alert alert-danger">';
				    						echo $this->session->flashdata('not_identical');
				    						echo '</div>';
				    					}
				    					if($this->session->flashdata('wrong_password'))
				    					{
				    						echo '<div class="alert alert-danger">';
				    						echo $this->session->flashdata('wrong_password');
				    						echo '</div>';
				    					}
				    				?>
		    					</div>
		    				</div>
		    				
		    				<h6><strong>Change Password</strong></h6>
		    				<br>
		    				<div class="row">
		    					<div class="col-md-4">
		    						<label>Old Password</label>
		    						<input type="text" name="old_password" class="form-control" required>
		    					</div>
		    				</div>
		    				<div class="row">
		    					<div class="col-md-4">
		    						<label>New Password</label>
		    						<input type="text" name="new_password" class="form-control" required>
		    					</div>
		    				</div>
		    				<div class="row">
		    					<div class="col-md-4">
		    						<label>Confirm New Password</label>
		    						<input type="text" name="confirm_new" class="form-control" required>
		    					</div>
		    				</div>
		    				<br>
		    				<div class="row">
		    					<div class="col-md-12">
		    						<button type="submit" class="btn btn-success"> Change Password</button>
		    					</div>
		    				</div>
		    			</div>
		    		</form>
	    		</div>
    		</div>
    	</div>
    	
    </div>

</body>
</html>
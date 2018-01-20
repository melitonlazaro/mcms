<html>
<head>
<title>MCMS</title>
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>/Public/images/Icon.png"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Public/style.css"></link>

</head>
<body>

<div class="container">


	<div class="admin">

		<div class="admin-1">
      		<span style="font-size: 40px;  background-color: #fff; padding: 10px 10px;">
        		<font color="teal">MCMS</font>
      		</span>
    	</div>

    </div>

		<?php echo form_open('Main/login'); ?>
		
    	<?php if($this->session->flashdata('error'))
    	{
			echo $this->session->flashdata('error');     	
	  	} 
    	?>
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter Admin Username" autofocus>
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password">
			</div>
				<input type="submit" name="submit"
				value="login" class="btn-l teal-l"> <br>
		</form> <br>
</div>


</body>
</html>
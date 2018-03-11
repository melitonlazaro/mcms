<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="shortcut icon" type="../image/png" href="<?php echo base_url();?>/Public/website_extensions2/img/w-ico.png"/>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" href="<?php echo base_url();?>/Public/website_extensions2/css/index.css">
	  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>



	  <div id="login-page">
	  	<div class="container">
	  		<?php $form_attributes = array('class' => 'form-login');  
	  				echo form_open('Main/login', $form_attributes)
	  		?>
		      
		        <label class="form-login-heading" id="lblGreetings"></label><br><br>
		        <div class="login-wrap">
		        	<?php if($this->session->flashdata('error')) 
		        		{
		        			echo '<div class="alert alert-danger">';
		        			echo $this->session->flashdata('error');
		        			echo '</div>';
		        		}
		        	?>
		            <input type="text" name="username" class="form-control" placeholder="User ID" autofocus required>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password" required>
		            <br>
		            <button class="btn btn-blue btn-block" href="index.html" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>   Log in</button>
		            <hr>           
		        </div>
		    </form>	  	
	  	</div>
	  </div>


    <script src="<?php echo base_url();?>/Public/website_extensions2/js/jquery.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    <script type="text/javascript" src="<?php echo base_url();?>/Public/website_extensions2/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url();?>/Public/website_extensions2/img/clinic_background.jpg", {speed: 500});

         var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';

    document.getElementById('lblGreetings').innerHTML =
        '<b>' + greet + '</b> and Welcome Admin!';
    </script>


  </body>
</html>


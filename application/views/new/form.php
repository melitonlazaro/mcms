<!DOCTYPE html>
<html lang="en">
<head>

  <title>MCMS | Appointment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="../image/png" href="<?php echo base_url();?>Public/website_extensions2/img/w-ico.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>Public/website_extensions2/css/Index.css">
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body>
  <div class="panel panel-default scd">
      <div class="panel-heading ">
        <div class="row text-center">
          <div class="col-md-4"><img src="<?php echo base_url();?>Public/website_extensions2/img/a-ico.png"></div>
          <div class="col-md-4"><h3 style="text-transform: uppercase;">Appointment</h3></div>
        </div>
      </div>
      <br>
    <div class="panel-body">
              <?php echo form_open('Main/Patient_login'); ?>
              <?php if($this->session->flashdata('login_failed')) 
              {
                echo "<div class='alert alert-danger' role='alert'>";
                echo $this->session->flashdata('login_failed');
                echo "</div>";
              }
              ?>
                <div class="form-group">
                  <div>
                    <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password"><br>
                    </label>
                  </div><br>
                  <div class="row">
                    <div class="col-sm-6"><button type="submit" class="btn btn-block btn-info"><i class="fa fa-user"></i>Cancel</button></div>
                    <div class="col-sm-6"><button type="submit" class="btn btn-block btn-info"><i class="fa fa-user"></i>Login</button></div>
                  </div>
                </div>
              </form>
         <br>      
    </div>
  </div>


    <script src="<?php echo base_url();?>Public/website_extensions2/js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <script type="text/javascript" src="<?php echo base_url();?>Public/website_extensions2/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url();?>Public/website_extensions2/img/a-bac.jpg", {speed: 500});

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


</body>
</html>


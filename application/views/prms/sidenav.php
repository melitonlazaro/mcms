<?php if($this->session->userdata('username')) 
    {

    }
    else
    {
        redirect('Main');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="../image/png" href="<?php echo base_url();?>Public/sidenav/img/w-ico.png">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<!--         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url();?>Public/sidenav/css/Admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
       <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        
    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i style="padding-top: 10px;" class="fa fa-arrow-left" aria-hidden="true"></i>
                </div>


                <div class="sidebar-header">
                    <h3>Management System</h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="<?php echo base_url();?>Main/dashboard"><i class="fa fa-television" aria-hidden="true"></i>  Dashboard </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-bar-chart"></i>   Records</a>
                        <ul class="link-gray collapse list-unstyled" id="homeSubmenu">
                            <li><a href="<?php echo base_url();?>Prms/case_list">Maternity Case</a></li>
                            <li><a href="<?php echo base_url();?>Prms/Patient_list">Patients</a></li>
                            <li><a href="<?php echo base_url();?>Prms/Infant_list">Infants</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-archive" aria-hidden="true"></i> E-prescription</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Report</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>  About</a>
                    </li>
                    <li>
                        <a href="#">ANYTHING</a>
                    </li>
                </ul>

                <ul class="list-unstyled logout">
                    <li><a href="<?php echo base_url();?>/Main/logout" class="download"><i class="fa fa-sign-out" aria-hidden="true"></i>   Logout</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button style="padding-bottom: 10px;" type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button>
                             <span id="lblGreetings"></span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="overlay"></div>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        
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
        '<b>' + greet + '</b> <b>Admin!</b>';

        </script>


    </body>
</html>
    
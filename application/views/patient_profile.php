 
 <?php
    $patient_id = $this->session->userdata('patient_ID');
    $server = "localhost";
    $username = "root";
    $password= "";
    $db = "mcms";

    $conn = new mysqli($server, $username, $password, $db);
    if($conn->connect_error)
    {
        echo "Connecting to database failed. ";
    }
    $query = "SELECT `date`, `weight` FROM `physicalexamination` WHERE `patient_ID` = $patient_id ORDER BY `date` ASC";
    $result = $conn->query($query);
    $chart_data = '';
    while($row = $result->fetch_array())
    {
        $chart_data .= "{ date:'".$row["date"]."', weight:".$row["weight"]."}, "; //Error was caused by a missing "space" between Comma and Parenthesis 

    }
        $chart_data = substr($chart_data, 0, -2);
?>
<?php 
    if($conn->connect_error)
    {
        echo "Connecting to database failed.";
    }
    $query1 = "SELECT `date`, `height` FROM `physicalexamination` WHERE `patient_ID` = $patient_id ORDER BY `date` ASC";
    $result = $conn->query($query1);
    $chart_data1 = '';
    while($row = $result->fetch_array())
    {
        $chart_data1 .= "{ date:'".$row["date"]."', height:".$row["height"]."}, ";
    }
        $chart_data1 = substr($chart_data1, 0, -2);
?>
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
        <script src="<?php echo base_url();?>public/js/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>/Public/css/morris.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Public/css/LTE.css">
        <script src="<?php echo base_url();?>/Public/js/raphael-min.js"></script>
        <script src="<?php echo base_url();?>/Public/js/morris.min.js"></script>
        
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
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2><strong><i class="fa fa-user"></i> Patient Information </strong></h2>
                    <div class="row">
                        <div class="container-fluid">
                            <?php if($this->session->flashdata('change_pass_success'))
                                {
                                    echo '<div class="alert alert-success">';
                                    echo $this->session->flashdata('change_pass_success');
                                    echo '</div>';
                                }
                            ?>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <a href="#" class="thumbnail">
                                          <img src="<?php echo base_url();?>/Uploads/<?php echo $patient_information->picture; ?>" alt="..." height="250" width="150">
                                        </a>
                                        </div>
                                        <div class="col-md-8">
                                          <table class="table table-condensed table-striped table-hover">
                                            <tr>
                                              <td>Patient ID</td>
                                              <td><?php echo $patient_information->patient_ID; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Last Name</td>
                                              <td><?php echo $patient_information->last_name; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Given Name</td>
                                              <td><?php echo $patient_information->given_name; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Date of Birth</td>
                                              <td><?php echo $patient_information->date_of_birth; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Contact Number</td>
                                              <td><?php echo $patient_information->contact_num; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Occupation</td>
                                              <td><?php echo $patient_information->occupation; ?></td>
                                            </tr>     
                                            <tr>
                                              <td>Street No.</td>
                                              <td><?php echo $patient_information->street_no; ?></td>
                                            </tr>   
                                            <tr>
                                              <td>Barangay</td>
                                              <td><?php echo $patient_information->brgy; ?></td>
                                            </tr>
                                            <tr>
                                              <td>City</td>
                                              <td><?php echo $patient_information->city; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Date Registered</td>
                                              <td><?php echo $patient_information->date_registered ?></td>
                                            </tr>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="small-box bg-teal">
                                        <div class="inner">
                                          <h3><strong><?php echo $checkup_count; ?></strong></h3>
                                          <p>Checkup Count</p>
                                        </div>
                                        <div class="icon">
                                          <i class="ion ion-bag"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <?php if($active_case)
                                            {
                                                echo '<h3>';
                                                echo '1';
                                                echo '</h3>';
                                            }else{
                                                echo '<h3>';
                                                echo '0';
                                                echo '</h3>';
                                            } ?>
                                          <p>Active Case</p>
                                        </div>
                                        <div class="icon">
                                          <i class="ion ion-bag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="small-box bg-teal">
                                        <div class="inner">
                                          <h3><?php echo $m_case_count; ?></h3>

                                          <p>Maternity Case Count</p>
                                        </div>
                                        <div class="icon">
                                          <i class="ion ion-bag"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="small-box bg-teal">
                                        <div class="inner">
                                            <h3>0</h3>
                                            <p>Upcoming Appointment(s)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2><strong><i class="fa fa-bar-chart"></i>Growth Chart </strong></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h4><strong>Weight (Kg)</strong></h4>
                                    <div id="weight_chart"></div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h4><strong>Height (cm)</strong></h4>
                                    <div id="height_chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                      
        </div>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
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
        '<b>' + greet + '</b>!';

        </script>
    <script>
        Morris.Line({
            element: 'weight_chart',
            data: [<?php echo $chart_data; ?>],
            xkey: 'date',
            ykeys: ['weight'],
            labels: ['weight - kilograms'],
            hideHover: 'auto',
            stacked: true
        });
    </script>
    <script>
        Morris.Line({
            element: 'height_chart',
            data: [<?php echo $chart_data1; ?>],
            xkey: 'date',
            ykeys: ['height'],
            labels: ['height - centimeters '],
            hideHover: 'auto',
            stacked: true
        });
    </script>

    </body>
</html>

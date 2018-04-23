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
        <link rel="stylesheet" href="<?php echo base_url() ?>/Public/fullcalendar/fullcalendar.min.css" />

        
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
                <div class="container-fluid">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                  <div class="col-md-5">
                                    <div class="panel panel-default">
                                      <?php 
                                        if($this->session->flashdata('appointment_success'))
                                        {
                                          echo '<div class="alert alert-success>"';
                                          echo $this->session->flashdata('appointment_success');
                                          echo '</div>';
                                        }
                                        elseif($this->session->flashdata('appointment_failed'))
                                        {
                                          echo '<div class="alert alert-warning>';
                                          echo $this->session->flashdata('appointment_failed');
                                          echo '</div>';
                                        }
                                      ?>
                                      <div class="panel-body">
                                          <?php echo form_open('Main/online_appointment') ?>
                                              <input type="hidden" name="patient_ID" value="<?php echo $this->session->userdata('patient_ID'); ?>">
                                              <label>Procedure</label>
                                              <select class="form-control" id="reason" name="procedure">
                                                <option>Prenatal Checkup</option>
                                                <option>Postnatal Checkup</option>
                                                <option>Laboratory</option>
                                                <option>Infant Consultation</option>
                                                <option>Paps Smear</option>
                                                <option>Immunization</option>
                                                <option>Ultrasound</option>
                                              </select>
                                              <label>Date</label>
                                              <?php $max_date = date('Y-m-d'); ?>
                                              <input class="form-control" type="date" name="date" min="<?php echo $max_date; ?>">
                                              <label>Time</label>
                                              <input class="form-control" type="time" name="time">  
                                              <label>Contact Number</label>
                                              <input class="form-control" type="text" name="contact_number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  name=""><br>
                                              <br>
                                              <div class="pull-right">
                                                <button class="btn btn-success" type="submit">Schedule an Appointment</button>
                                              </div>
                                          </form>
                                      </div>
                                    </div>    
                                  </div>
                                <div class="col-md-7">
                                    <div id="calendar"></div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="overlay"></div>


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo base_url() ?>/Public/fullcalendar/lib/moment.min.js"></script>
        <script src="<?php echo base_url() ?>/Public/fullcalendar/fullcalendar.min.js"></script>
        <script src="<?php echo base_url() ?>/Public/fullcalendar/gcal.js"></script>
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
<script type="text/javascript">
    $(document).ready(function(){
      $('#calendar').fullCalendar({
        eventSources:
        [
          {
            events: function(start, end, timezone, callback)
            {
              $.ajax({
                url:'<?php echo base_url(); ?>Main/get_events',
                dataType: 'json',
                data:
                {
                  start: start.unix(),
                  end: end.unix(),
                },
                success:function(msg)
                {
                  var events = msg.events;
                  callback(events);
                }

              });
                
            }
            
          } 

        ],
            

      dayClick: function(date, jsEvent, view)
      {
        date_last_clicked = $(this);
        $(this).css('background-color', '#ffffff');
        $('#addModal').modal();
      },
      // dayClick: function(date, allDay, jsEvent, view) {
      //    var myDate = new Date();

      //    //How many days to add from today?
      //    var daysToAdd = 15;

      //    myDate.setDate(myDate.getDate() + daysToAdd);

      //    if (date < myDate) {
      //        //TRUE Clicked date smaller than today + daysToadd
      //        alert("You cannot book on this day!");
      //    } else {
      //        //FLASE Clicked date larger than today + daysToadd
      //        alert("Excellent choice! We can book today..");
      //    }

      // },

      eventClick: function(event, jsEvent, view)
      {
        $("#event_id").val(event.id);
        $('#name').val(event.title);
        $('#description').val(event.description);
        $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
        if(event.end)
        {
          $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'))
        }
        else
        {
          $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
        }
        $('#event_id').val(event.id);
        $('#editModal').modal();
      },

      });
    });
  </script>


    </body>
</html>
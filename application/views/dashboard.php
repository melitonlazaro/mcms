<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "mcms";

    $conn =  new mysqli($server, $username, $password, $db);
    if($conn->connect_error)
    {
        die("Connecting to database failed:" . $conn->connect->error);
    }
    $date1 = date('Y-m-01');
    $date2 = date('Y-m-31');
    $query = "SELECT COUNT(1) AS  Prenatal, DATE(date) as date FROM physicalexamination WHERE date between '$date1' and '$date2' GROUP BY DATE(date) LIMIT 0, 30";
    $result = $conn->query($query);
    $chart_data = '';
    while($row = $result->fetch_array())
    {
        $chart_data .= "{ date:'".$row["date"]."', prenatal:".$row["Prenatal"]."}, ";
    }
        $chart_data = substr($chart_data, 0, -2);
?>
<?php 
    $query1 = "SELECT COUNT(1) as `case_id`, date_start as date FROM `CASE` WHERE `date_start` between '$date1' and '$date2' GROUP BY date_start LIMIT 0, 30";        
    $res = $conn->query($query1);
    $chart_data1 = '';
    while($row1 = $res->fetch_array())
    {
        $chart_data1 .= "{ date:'".$row["date"]."', case_id:".$row["case_id"]."}, ";
    }
        $chart_data1 = substr($chart_data1, 0, -2)
?>

<!DOCTYPE html>
<html>
<head>
 <?php require "extensions.php"; ?>
  <link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/Public/fullcalendar/fullcalendar.min.css" />
  <script src="<?php echo base_url() ?>/Public/fullcalendar/lib/moment.min.js"></script>
  <script src="<?php echo base_url() ?>/Public/fullcalendar/fullcalendar.min.js"></script>
  <script src="<?php echo base_url() ?>/Public/fullcalendar/gcal.js"></script>
</head>
<style type="text/css">
  #panels_pending
  {
    background-color: #f39c12;
    color:white;
    border-radius: 10px;
  }
  #panel-footer-pending
  {
    background-color: #f5f5f5;
    color:black;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius:10px;
  }

  #panels_solved
  {
    background-color: #2389dd;
    color:white;
    border-radius: 10px;
  }
  #panel-footer-solved
  {
    background-color: #f5f5f5;
    color:black;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius:10px;
  }

  #panels_unsolved
  {
    background-color: #ea2020;
    color:white;
    border-radius: 10px;
  }
  #panel-footer-unsolved
  {
    background-color: #f5f5f5;
    color:black;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius:10px;
  }

  #glyph
  {
    float:right;
    margin-top: 2px;
    margin-right: 0px;
    font-size: 25px;
    opacity: .5;
  }
  #title
  {
    font-family: Arial;
    font-size: 17px;
  }
  #ticketcontainer
  {
    background-color: #e7f3f9;
    border-radius:10px;
  }
  #tickettable
  {
    width: 100%;
    background-color:white;
  }
  #tablehead
  {
    color:white;
    background-color: teal;
  }
  #chart
  {
    background-color: white;
  }
 .page-header 
 {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;
  }
</style>
<body class="container-fluid">

<?php require('sidenav.php'); ?>
<br><br><br>
<div id="body">
  <div class="container-fluid">
    <h1 class="page-header">Dashboard</h1>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-dashboard"></i> Dashboard
          </li>
        </ol>
      </div>
  </div>

  <div class="container-fluid">
    <div class="row">  
      <div class="col-md-4">
        <div class="panel panel-default" id="panels_pending">
          <div class="panel-body">
            <h6 id="title"><b>Pending Appointments</b></h6>
            <h3>7<span class="fa fa-tasks" id="glyph" aria-hidden="true"></span></h3>
          </div>
          <a href="">
            <div class="panel-footer" id="panel-footer-pending">
                View Details
              <div class="pull-right">
                <i class="fa fa-arrow-circle-right"></i>
              </div>
            </div>    
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-default" id="panels_solved"> 
          <div class="panel-body">
           <h6 id="title"><b>Patient Count</b>&nbsp;<small style="color:white;">(<?php echo date('Y-m-d');?>)</small></h6>
           <h3><?php echo $patient_count; ?>  <span class="fa fa-user-o" id="glyph" aria-hidden="true"></span></h3>
          </div>
          <a href="">
            <div class="panel-footer" id="panel-footer-solved">
              View Details
              <div class="pull-right">
                <i class="fa fa-arrow-circle-right"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      
      
      <div class="col-md-4">
        <div class="panel panel-default" id="panels_unsolved">
          <div class="panel-body">
           <h6 id="title"><b>Case Count</b>&nbsp;<small style="color:white;">(<?php echo date('Y-m-d');?>)</small></h6>
           <h3><?php echo $total_case; ?> <span class="fa fa-plus-square" id="glyph" aria-hidden="true"></span></h3>
          </div>
          <a href="">
            <div class="panel-footer" id="panel-footer-solved">
              View Details
              <div class="pull-right">
                <i class="fa fa-arrow-circle-right"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
  </div>      
  </div>


<br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4>Latest Patients</h4>
                  </div>
                  <div class="panel-body">
                    <table class="table table-responsive table-hover table-bordered">
                        <tr id="tablehead">
                            <th>Patient Name</th>
                            <th>Date Registered</th>
                        </tr>
                    <?php foreach($latest_patients as $lp)
                    {
                        echo '
                            <tr>
                            <td>'.$lp->given_name.' '.$lp->last_name.' </td>
                            <td>'.$lp->date_registered.'</td>
                            </tr>
                             ';
                    } 
                    ?>
                      </table>
                    <div class="pull-right">
                      <a href="../prms/patient_list"><button type="submit" class="btn btn-info" name="update">View All</button></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>Latest Cases</h4>
                </div>
                <div class="panel-body">
                  <table class="table table-responsive table-hover table-bordered">
                      <tr id="tablehead">
                          <th>Case ID</th>
                          <th>Patient ID</th>
                          <th>Start date</th>
                      </tr>
                  <?php foreach($active_cases as $ac)
                  {
                      echo '
                          <tr>
                          <td>'.$ac->case_id.'</td>
                          <td>'.$ac->patient_ID.'</td>
                          <td>'.$ac->date_start.'</td>
                          </tr>
                           ';
                  } 
                  ?>
                  </table>  
                  <div class="pull-right">                   
                    <a href="../prms/case_list"><button type="submit" class="btn btn-info" name="update">View All</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div id="calendar"></div>
            </div>
          </div>
   </div>

    <div class="container-fluid">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h4>Prenatal Count (<?php echo date('M-Y');?>)</h4>
        </div>
        <div class="panel-body">
            <div id="chart">
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-clipboard"></i>To Do list</h4>
            </div>
            <div class="panel panel-body">
              <div id="todo">
                <button class="btn btn-info btn-sm" id="addtodo">Add</button>
                <table id="todolist" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <td>Task</td>
                        <td>Created by</td>
                        <td>Date </td>
                        <td>Time </td>
                      </tr>
                    </thead>
                      <?php foreach($tasks as $ts)
                          {
                            echo '
                                  <tr>
                                    <td>'.$ts->task_content.'</td>
                                    <td>'.$ts->task_creator.'</td>
                                    <td>'.$ts->date.'</td>
                                    <td>'.$ts->time.'</td>
                                  </tr>
                                 ';
                          }
                      ?>
                </table>
              </div>
              <div class="container">

                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
                      </div>
                      <div class="modal-body">
                      <?php echo form_open(site_url("Main/add_event"), array("class" => "form-horizontal")) ?>
                      <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                                <div class="col-md-8 ui-front">
                                    <input type="text" class="form-control" name="name" value="">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Description</label>
                                <div class="col-md-8 ui-front">
                                    <input type="text" class="form-control" name="description">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="start_date">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="end_date">
                                </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Add Event">
                        <?php echo form_close() ?>
                      </div>
                    </div>
                  </div>
                </div>

            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
                  </div>
                  <div class="modal-body">
                  <?php echo form_open(site_url("main/edit_event"), array("class" => "form-horizontal")) ?>
                    <div class="form-group">
                            <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                            <div class="col-md-8 ui-front">
                                <input type="text" class="form-control" name="name" value="" id="name">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="p-in" class="col-md-4 label-heading">Description</label>
                            <div class="col-md-8 ui-front">
                                <input type="text" class="form-control" name="description" id="description">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="start_date" id="start_date">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="p-in" class="col-md-4 label-heading">End Date</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="end_date" id="end_date">
                            </div>
                    </div>
                    <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="delete" value="1">
                                </div>
                        </div>
                        <input type="hidden" name="eventid" id="event_id" value="0" />
                  </div>
                  <div class="modal-footer">
                    <div class="pull-left">
                      <button class="btn btn-danger" name="delete_button" id="delete_button">Delete</button>
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Update Event">
                    <?php echo form_close() ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html> 
<script src="<?php echo base_url();?>public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>public/js/dataTables.bootstrap.min.js"></script>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['prenatal'],
 labels:['Prenatal'],
 hideHover:'auto',
 stacked:true
});
</script>
<script>
Morris.Line({
 element : 'case_chart',
 data:[<?php echo $chart_data1; ?>],
 xkey:'date',
 ykeys:['case_id'],
 labels:['Case'],
 hideHover:'auto',
 stacked:true
});
</script>
<script>
  $(function(){
    $('#todolist').DataTable({
      'paging' : true,
      'searching' : false,
      'info'    : false,
      'ordering'  : false,
      'autoWidth'  : false,
      'lengthChange' : false,
    })
  })
</script>
<script>
    $(document).ready(function(){
        $('#todoform').hide();
});
</script>
<script>
$(document).ready(function() {
  $('#addtodo').click(function(){
    $('#todo').hide(100);
    $('#todoform').show(100);
    });
  $('#todoformbutton').click(function(){
    $('#todo').show(100);
    $('#todoform').hide(100);
  });
});
</script>

<script>
  $(document).on('submit', '#task_form', function(event){
    event.preventDefault();
    var task_name = $('#task_name').val();
    $.ajax({
      type:"post",
      url: "<?php echo site_url();?>/Main/add_task",
      data: {task_name:task_name},
      success:function(data)
      {
        alert("Task created");
        $('#task_content').val('');
        $('#todo').html(data);
      }
    });
  });
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
                  end: end.unix()
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

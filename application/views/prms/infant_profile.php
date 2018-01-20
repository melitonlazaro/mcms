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
    $query = "SELECT `height`, `date` FROM `consultation` WHERE `infant_id` = $infant_info->infant_id ORDER BY `date` ASC";
    $result = $conn->query($query);
    $chart_data = '';
    while($row = $result->fetch_array())
    {
        $chart_data .= "{ date:'".$row["date"]."', height:".$row["height"]."}, ";
    }
        $chart_data = substr($chart_data, 0, -2);
?>
<?php 

	if($conn->connect_error)
	{
		die("Connecting to database failed:" . $conn->connect->error);
	}
	$query1 = "SELECT `weight`, `date` FROM `consultation` WHERE `infant_id` = $infant_info->infant_id ORDER BY `date` ASC";
	$result = $conn->query($query1);
	$chart_data1 = '';
	while ($row = $result->fetch_array()) 
	{
		$chart_data1 .= "{ date:'".$row["date"]."', weight:".$row["weight"]."}, ";	
	}
	$chart_data1 = substr($chart_data1, 0, -2);
 ?>

<?php 
	if($conn->connect_error)
	{
		die("Connecting to database failed:" . $conn->connect->error);
	}	
	$query2 = "SELECT `pulse_rate`, `date` FROM `consultation` WHERE `infant_id` = $infant_info->infant_id ORDER BY `date` ASC ";
	$result = $conn->query($query2);
	$chart_data2 = '';
	while($row = $result->fetch_array())
	{
		$chart_data2 .= "{ date:'".$row["date"]."', pulse_rate:".$row["pulse_rate"]."}, ";
	}
	$chart_data2 = substr($chart_data2, 0, -2);
?>

<?php 
	if($conn->connect_error)
	{
		die("Connecting to database failed:" . $conn->connect->error);
	}
	$query3 = "SELECT `heart_rate`, `date` FROM `consultation` WHERE `infant_id` = $infant_info->infant_id ORDER BY `date` ASC";
	$result = $conn->query($query3);
	$chart_data3 = '';
	while($row = $result->fetch_array())
	{
		$chart_data3 .= "{ date:'".$row["date"]."', heart_rate:".$row["heart_rate"]."}, ";
	}
	$chart_data3 = substr($chart_data3, 0, -2);

?>

<!DOCTYPE html>
<html>
<head>
	<?php require('extensions.php'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Public/css/AdminLTE.css">
	<title>JFMLMC</title>
</head>
<body>
	<?php require('sidenav.php'); ?>
	<br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-6">
									<p style="text-align: left;">
									<?php //print_r($infant_info);
										echo $infant_info->infant_first_name;
									?>
									</p>
							</div>
							<div class="col-md-6">
								<p style="text-align: right;">
									<?php 
										echo $infant_info->infant_id;
									?>
								</p>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4">
								
							</div>
							<div class="col-md-8">
								<table class="table table-condensed table-striped table-hover">
									<tr>
										<td>Infant ID</td>
										<td><?php echo $infant_info->infant_id; ?></td>
									</tr>
									<tr>
										<td>Infant Name</td>
										<td><?php echo $infant_info->infant_first_name; ?>, <?php echo $infant_info->infant_last_name; ?></td>
									</tr>
									<tr>
										<td>Date of Birth</td>
										<td><?php echo $infant_info->infant_date_of_birth; ?></td>
									</tr>
									<tr>
										<td>Time of Birth</td>
										<td><?php echo $infant_info->time_of_birth; ?></td>
									</tr>
									<tr>
										<td>Gender</td>
										<td><?php echo $infant_info->gender; ?></td>
									</tr>
									<tr>
										<td>Gravida</td>
										<td><?php echo $infant_info->gravida; ?></td>
									</tr>
									<tr>
										<td>Para</td>
										<td><?php echo $infant_info->para; ?></td>
									</tr>
									<tr>
										<td>Weight</td>
										<td><?php echo $infant_info->weight; ?></td>
									</tr>
									<tr>
										<td>Length</td>
										<td><?php echo $infant_info->length; ?></td>
									</tr>
									<tr>
										<td>Head Circumference</td>
										<td><?php echo $infant_info->head_circumference; ?></td>
									</tr>
									<tr>
										<td>Chest Circumference</td>
										<td><?php echo $infant_info->chest_circumference; ?></td>
									</tr>
								</table>
							</div>
						</div>		
					</div>
					<div class="panel-footer">
						<div class="float-right">
							<button class="btn btn-warning"><i class="fa fa-edit"></i></button>
							<button class="btn btn-danger"><i class="fa fa-remove"></i></button>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="panel panel-info">
					<div class="panel-heading">
						<i class="fa fa-line-chart"></i>&nbsp;Growth Chart
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2">
								<div class="btn-group-vertical">
								  <button type="button" id="weightbutton" class="btn btn-success">Weight</button>
								  <button type="button" id="heightbutton" class="btn btn-success">Height</button>
								  <button type="button" id="pulseratebutton" class="btn btn-success">Pulse Rate</button>
								  <button type="button" id="heartratebutton" class="btn btn-success">Heart Rate</button>
								</div>

							</div>
							<div class="col-md-10">
								<div id="weight">
									<div id="weight_chart"></div>
								</div>
								<div id="height">
									<div id="height_chart"></div>
								</div>
								<div id="pulserate">
									<div id="pulse_rate_chart"></div>
								</div>
								<div id="heartrate">
									<div id="heart_rate_chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<ul class="timeline">

    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-red">
            10 Feb. 2014
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-envelope bg-blue"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

            <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

            <div class="timeline-body">
                ...
                Content goes here
            </div>

            <div class="timeline-footer">
                <a class="btn btn-primary btn-xs">...</a>
            </div>
        </div>
    </li>
    <!-- END timeline item -->


</ul>
                  
	</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#height').hide();
        $('#pulserate').hide();
        $('#heartrate').hide();
});
</script>
<script>
$(document).ready(function() {
  $('#weightbutton').click(function(){
    $('#height').hide(100);
    $('#pulserate').hide(100);
    $('#heartrate').hide(100);
    $('#weight').show(100);
    });
  $('#heightbutton').click(function(){
    $('#height').show(100);
    $('#weight').hide(100);
    $('#pulserate').hide(100);
    $('#heartrate').hide(100);
 	});
  $('#pulseratebutton').click(function(){
  	$('#pulserate').show(100);
  	$('#weight').hide(100);
  	$('#height').hide(100);
  	$('#heartrate').hide(100);
  	});
  $('#heartratebutton').click(function(){
  	$('#heartrate').show(100);
  	$('#weight').hide(100);
  	$('#height').hide(100);
  	$('#pulserate').hide(100);
  	});
});
</script>
<script>
Morris.Line({
 element : 'height_chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['height'],
 labels:['height'],
 hideHover:'auto',
 stacked:true
});
</script>
<script>
Morris.Line({
 element : 'weight_chart',
 data:[<?php echo $chart_data1; ?>],
 xkey:'date',
 ykeys:['weight'],
 labels:['weight'],
 hideHover:'auto',
 stacked:true
});
</script>
<script>
 Morris.Line ({
  element : 'pulse_rate_chart',
  data:[<?php echo $chart_data2; ?>],
  xkey: 'date',
  ykeys: ['pulse_rate'],
  labels: ['pulse_rate'],
  hideHover: 'auto',
  stacked:true
 });
</script>
<script>
	Morris.Line({
		element : 'heart_rate_chart',
		data: [<?php echo $chart_data3; ?>],
		xkey: 'date',
		ykeys: ['heart_rate'],
		labels: ['heart_rate'],
		hideHover:'auto',
		stacked: true
	});
</script>
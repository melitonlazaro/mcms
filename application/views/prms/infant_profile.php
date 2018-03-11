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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Public/css/LTE.css">
	<title>JFMLMC</title>
</head>
<body>
	<?php require('sidenav.php'); ?>
	<br><br><br><br><br>
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2><strong>Infant Profile </strong></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-6">
											<strong style="text-align: left;">
											<?php //print_r($infant_info);
												echo $infant_info->infant_first_name;
											?>
											</strong>
									</div>
									<div class="col-md-6">
										<div class="pull-right">
											<strong style="text-align: right;">
												<?php 
													echo $infant_info->infant_id;
												?>
											</strong>
										</div>
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
							</div>
						</div>
						<div class="pull-right">
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#consultation_modal">Consultation</button> 
							<div class="modal fade" id="consultation_modal" role="dialog">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Consultation</h4>
										</div>
										<div class="modal-body">
											<?php echo form_open('Prms/consultation') ?>
												<input type="hidden" name="infant_id" value="<?php echo $infant_info->infant_id; ?>">
												<div class="row">	
													<div class="col-md-3">
														<label>Weight:</label>
														<input type="number" name="weight" class="form-control" placeholder="Weight in grams" min="0">
													</div>
													<div class="col-md-3">
														<label>Height:</label>
														<input type="number" name="height" class="form-control" placeholder="Height in centimeters" min="0">
													</div>
													<div class="col-md-3">
														<label>Pulse Rate:</label>
														<input type="number" name="pulse_rate" class="form-control" placeholder="Pulse Rate" min="0">
													</div>
													<div class="col-md-3">
														<label>Heart Rate:</label>
														<input type="number" name="heart_rate" class="form-control" placeholder="Heart Rate" min="0">
													</div>								
												</div><br>
												<div class="row">
													<div class="col-md-6">
														<label>Chief Complaint</label>
														<textarea class="form-control" name="chief_complaint" rows="10" cols="10"></textarea>
													</div>
													<div class="col-md-6">
														<label>Remarks</label>
														<textarea class="form-control" name="remarks" rows="10" cols="10"></textarea>
													</div>
												</div>
										</div>
										<div class="modal-footer">
											<div class="pull-right">
													<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
													<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
										</form>
									</div>
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
		</div>
	</div>
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2><strong>Consultations</strong></h2>
				<ul class="timeline">
					<?php foreach ($consultations as $cs) 
					{
						echo '
							<li class="time-label">
						        <span class="bg-blue">
						            Consultation Date: '.$cs->date.'
						        </span>
						    </li>
						    <li>
						        <i class="fa fa-plus-square bg-blue"></i>
						        <div class="timeline-item">
						            <h3 class="timeline-header">Consultation Results</h3>

						            <div class="timeline-body">
						            	<div class="row">
						            		<div class="col-md-3">
						            			<strong>Weight: </strong>'.$cs->weight.' g
						            		</div>
						            		<div class="col-md-3">
						            			<strong>Height: </strong>'.$cs->height.' cm
						            		</div>
						            		<div class="col-md-3">
						            			<strong>Pulse Rate: </strong>'.$cs->pulse_rate.' BPM
						            		</div>
						            		<div class="col-md-3">
						            			<strong>Heart Rate: </strong>'.$cs->heart_rate.' BPM
						            		</div>
						            	</div>
						            	<br><br>
						            	<div class="row">
						            		<div class="col-md-6">
						            			<strong>Chief Complaint: </strong>
						            			<br>
						            			'.$cs->chief_complaint.'
						            		</div>
						            		<div class="col-md-6">
						            			<strong>Remarks: </strong>
						            			<br>
						            			'.$cs->remarks.'
						            		</div>
						            	</div>
						            </div>
						            <div class="timeline-footer">
										<form method="POST" action="../../Prms/print_infant_report/'.$cs->consultation_id.'">
							                <button class="btn btn-info">Report</button></a>
							            </form> 
						            </div>
						        </div>
						    </li>
							 ';
					} ?>
				</ul>
			</div>
		</div>
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
 labels:['height - centimeters'],
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
 labels:['weight - grams'],
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
  labels: ['Pulse rate - Beats/minute'],
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
		labels: ['Heart rate - Beats/minute'],
		hideHover:'auto',
		stacked: true
	});
</script>
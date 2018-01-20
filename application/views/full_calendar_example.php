<!DOCTYPE html>
<html>
<head>
	<title>Full Calendar Example</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Public/css/bootstrap.min.css">
	<script src="<?php echo base_url();?>/Public/js/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/Public/fullcalendar/fullcalendar.min.css" />
   <script src="<?php echo base_url() ?>/Public/fullcalendar/lib/moment.min.js"></script>
   <script src="<?php echo base_url() ?>/Public/fullcalendar/fullcalendar.min.js"></script>
   <script src="<?php echo base_url() ?>/Public/fullcalendar/gcal.js"></script>
   <script src="<?php echo base_url() ?>/Public/js/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<?php if($this->session->flashdata('event_success')){ ?>
				<div class="alert alert-success">
					<?php echo $this->session->flashdata('event_success'); ?>
				</div>
		<?php } ?>
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

		<div class="row">
			<div class="col-md-12">
				<br><br><br>
				<div id="calendar">
					
				</div>
			</div>
		</div>
	</div>
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
</body>
</html>
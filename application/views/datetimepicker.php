<html>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<body>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Book Appointment</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-2">
                        1. Choose Service
                    </div>
                    <div class="col-md-2">
                        2. Pick available date
                    </div>
                    <div class="col-md-2">
                        3. Pick available time
                    </div>
                    <div class="col-md-2">
                        4. Personal Information
                    </div>
                    <div class="col-md-4">
                        <center>
                            5. Finish
                        </center>
                    </div>
                </div>
                <br><br>
                <?php echo form_open('Appointment/Book_appointment') ?>
                    <div id="choose_service">
                        <label for="service">Choose Service: &nbsp;</label>
                        <select class="form-control" id="service" name="service">
                          <option>Prenatal Checkup</option>
                          <option>Postnatal Checkup</option>
                          <option>Laboratory</option>
                          <option>Infant Consultation</option>
                          <option>Paps Smear</option>
                          <option>Immunization</option>
                          <option>Ultrasound</option>
                        </select>
                        <br>
                        <button type="button" class="btn btn-info" id="service_button">Next</button>
                    </div>
                    <div id="choose_date">
                        <div class="form-group">
                            <div class="input-group date" id="input_date">
                                <input type="text" name="appt_date" class="form-control">
                                <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-info" id="date_button">Next</button>
                    </div>
                    <div id="choose_time">
                        <div class="form-group">
                            <div class="input-group date" id="input_time">
                                <input type="text" name="app_time" class="form-control">
                                <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-info" id="time_button">Next</button>
                    </div>
                    <div id="personal_information" >
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="first_name">First Name: &nbsp;</label>
                                <input type="text" name="first_name" class="form-control" id="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name: &nbsp;</label>
                                <input type="text" name="last_name" class="form-control" id="last_name">
                            </div>
                        </div> 
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                  <input type="text" name="address" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Contact Number</label>
                                <div class="col-md-10">
                                    <input type="text" name="contact_number" class="form-control" value="+639">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info" id="information_button">Submit</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
<script type="text/javascript">
$(document).ready(function() {
        $(function () {
            $("#input_date").datetimepicker({
                 format: "YYYY-MM-DD"
            });
            $('#input_time').datetimepicker({
                format: "hh:mm A",
                stepping: 30
            });
            
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#choose_date').hide();
        $('#choose_time').hide();
        $('#personal_information').hide();
    });
</script>
<script>
    $(document).ready(function(){
        $('#service_button').click(function(){
            $('#choose_service').hide(100);
            $('#choose_date').show(100);
        });
        $('#date_button').click(function(){
            $('#choose_date').hide(100);
            $('#choose_time').show(100);
        });
        $('#time_button').click(function(){
            $('#choose_time').hide(100);
            $('#personal_information').show(100);
        });
    });
</script>
</body>
</html>
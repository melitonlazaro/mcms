<html>
<head>
	<?php require('extensions.php'); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">
	<title>JFMLMC</title>
	<style type="text/css">
		.profiling-option
		{
			background-color: #68dff0 ;
			border: 1px solid black;
			
		}
		.profiling-option:hover
		{
			cursor:pointer;
		}
	</style>
</head>
<body>
	<?php require('sidenav.php'); ?>
	<br><br><br><br><br><br>

	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2><strong>Create new maternity case</strong></h2>
				<p>Profiling</p>
				<br>
				<?php echo form_open_multipart('Prms/process_profiling'); ?>
					<div class="row">
						<div class="col-md-4">
							<label for="last_name">Last Name</label>
						    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
						</div>
						<div class="col-md-4">
							<label for="given_name">First Name</label>
						    <input type="text" class="form-control" id="given_name" name="given_name" placeholder="First Name" required>
						</div>
						<div class="col-md-4">
							<label for="middle_initial">Middle Initial</label>
							<input type="text" name="middle_initial" id="middle_initial" class="form-control" placeholder="Middle Initial" required>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<label for="occupation">Occupation</label>
						    <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Occupation" required>
						</div>
						<div class="col-md-4">
							<label for="date_of_birth">Date of Birth</label>
							<?php $date_max = date('Y-m-d'); ?>
						    <input type="date" name="date_of_birth" class="form-control"  max="<?php echo $date_max; ?>" id="date_of_birth" placeholder="Date of Birth" required>
						</div>
						<div class="col-md-4">
							<label for="contact_num">Contact Number</label>
						    <input type="text" name="contact_num" class="form-control" id="contact_num" placeholder="Contact Number" required>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<label for="street_no">Street Number</label>
						    <input type="text" name="street_no" class="form-control" id="street_no" placeholder="Street Number" required>
						</div>
						<div class="col-md-4">
							<label for="brgy">Barangay</label>
						    <input type="text" name="brgy" class="form-control" id="brgy" placeholder="Barangay" required>
						</div>
						<div class="col-md-4">
							<label for="city">City</label>
						    <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
						</div>
					</div>
					<h3>Emergency Contact Information</h3>
					<div class="row">
						<div class="col-md-4">
							<label for="name">Name</label>
						    <input type="text" name="emergency_contact_name" class="form-control" id="emergency_contact_name" placeholder="Name" required>
						</div>
						<div class="col-md-4">
							<label for="emergency_contact_number">Number</label>
						    <input type="text" name="emergency_contact_num" class="form-control" id="emergency_contact_num" placeholder="Emergency Contact Number" required>
						</div>
						<div class="col-md-4">
							<label for="emergency_contact_address">Address</label>
						    <input type="text" class="form-control" name="emergency_contact_address" id="emergency_contact_address" placeholder="Emergency Contact Address" required>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
							<h4><b>Upload Picture</b></h4>
						</div>
						<div class="col-md-2">
							<input type="file" class="form-control" name="userfile" size="20" />
						</div>
						<div style="padding-left: 90px;" class="col-md-4 pull-right">
							<button type="submit" id="crete_new_record" class="btn btn-success"><i class="fa  fa-user-plus"></i> Create New Patient Record</button>
						</div>				
					</div>
				</form>
			</div>
		</div>

	</div>
	<br>

	<script>
		$(document).ready(function(){
				$('#existing_records_form').hide();
				$('#no_existing_records_form').hide();

				$('#existing_records').click(function(){
					$('#existing_records_form').show(100);
					$('#existing_records').hide(100);
					$('#no_existing_records_form').hide(100);
					$('#no_existing_records').hide(100);

				});

				$('#no_existing_records').click(function(){
					$('#no_existing_records_form').show(100);
					$('#no_existing_records').hide(100);
					$('#existing_records_form').hide(100);
					$('#existing_records').hide(100);

				});

				$('#return1').click(function(){
					$('#no_existing_records_form').hide(100);
					$('#existing_records_form').hide(100);
					$('#existing_records').show(100);
					$('#no_existing_records').show(100);
				});

				$('#return2').click(function(){
					$('#existing_records_form').hide(100);
					$('#no_existing_records_form').hide(100);
					$('#existing_records').show(100);
					$('#no_existing_records').show(100);
				});
		});
	</script>
	<script>
		$(document).ready(function(){
			$('#get_patient_information').click(function(){

				var patient_info = $('#search').val();
				var x = "http://localhost/issp/Prms/get_existing_patient_information/";

				$.ajax({
					type: "POST",
					url: x+patient_info,
					data:{patient_info:patient_info},
					success:function(data)
					{
						//alert("Records retrieved");
						$('#retrieve_div').html(data);
					}
				});
			});
		});
	</script>
 	<!-- <script>
    $(function(){
        $( "#crete_new_record" ).click(function(event)
        {
            event.preventDefault();//prevent auto submit data

            var last_name = $("#last_name").val();
            var given_name = $("#given_name").val();
      		var middle_initial = $("#middle_initial").val();
      		var occupation = $('#occupation').val();
      		var date_of_birth = $('#date_of_birth').val();
      		var contact_num = $('#contact_num').val();
      		var street_no = $('#street_no').val();
      		var brgy = $('#brgy').val();
      		var city = $('#city').val();
      		var emergency_contact_name = $('#emergency_contact_name').val();
      		var emergency_contact_num = $('#emergency_contact_num').val();
      		var emergency_contact_address = $('#emergency_contact_address').val();
          

            $.ajax(
                {
                    type:"post",
                    url: "<?php echo site_url();?>/Prms/process_profiling",
                    data:{ last_name:last_name, given_name:given_name, middle_initial:middle_initial, occupation:occupation, date_of_birth:date_of_birth, contact_num:contact_num, street_no:street_no, brgy:brgy, city:city, emergency_contact_name:emergency_contact_name, emergency_contact_num:emergency_contact_num, emergency_contact_address:emergency_contact_address},
                    success:function(data)
                    {
                    	var obj = jQuery.parseJSON(data); //use parseJSON on returned json_encode
                       	alert(obj.patient_ID);
                    }
             
                
                });
            
        });
      
    });


</script> -->
	
	<!-- <script>
		$(document).ready(function(){
				

				$("#search").keyup(function(){
			       var str=  $("#search").val();
			       if(str == "") {
			               $( "#patient_form" ).html("<b>Book information will be listed here...</b>"); 
			       }else {
			               $.get( "<?php echo base_url();?>Prms/ajaxsearch?id="+str, function( data ){
			                   $( "#patient_form" ).html( data );  
			            });
			       }
			   });  
			});  
	</script> -->

</body>
	<script src="<?php echo base_url()?>/public/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>/public/js/dataTables.bootstrap.min.js"></script>
 	<script>
		$(function (){
		$('#infant_table').DataTable() //datatables must have <thead> and <th> in Order to run 
		})
	</script>
</html>
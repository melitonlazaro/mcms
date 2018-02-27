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
	<br><br><br>

	<div class="container">
		<div class="page-header">
			<h2>Choose existing patient</h2>
		</div>
		<table id="infant_table" class="table table-striped table-hover table-bordered table-condensed">
			<thead>
				<th>Patient ID</th>
				<th>Patient Name</th>
				<th>Date of Birth</th>
				<th> </th>
			</thead>		
				<?php foreach($patient_names as $pn)
				{
					echo '<tr>';
					echo '<td>';
					echo $pn->patient_ID;
					echo '</td>';
					echo '<td>'.$pn->last_name.', '.$pn->given_name.' '.$pn->middle_initial.'</td>';
					echo '<td>'.$pn->date_of_birth.'</td>'; ?>
					<td><center><a href="<?php echo base_url();?>Prms/create_case_existing/<?php echo $pn->patient_ID; ?>"><button class="btn btn-success"><i class="fa fa-user-plus"></i> Choose</button></a></center></td>
				<?php	echo '</tr>';
				}
				?>
		</table>
		
	</div>

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
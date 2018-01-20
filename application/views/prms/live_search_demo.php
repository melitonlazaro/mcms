<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require('extensions.php') ?>
</head>
<body>

<!-- 	<div class="container">
		<form action="" method="GET">
			<input type="text" name="search" id="search" class="form-control">
		</form>
	</div>
	<br><br><br>
	<div class="container">
		<div id="txtHint">
			
		</div>
	</div> -->


	<br><br><br><br><br>
	    <div class="row">
	    	<div class="col-md-4 col-md-offset-4" style="margin-top: 200px;">
	        	<label class="control-lable">Country Name</label>
	            <input type="text" id="country" autocomplete="off" name="country" class="form-control" placeholder="Start typing and see the magic! :P">        
	            <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry">
	            </ul>
	            
	        </div>
	        <br><br><br><br>
	        <input type="text" name="last_name_searched" id="last_name_searched">
	        <br>
	        <input type="text" name="given_name_searched" id="given_name_searched">
	    </div>
<!-- 	<script>
			$(document).ready(function(){
			   $("#search").keyup(function(){
			       var str=  $("#search").val();
			       if(str == "") {
			               $( "#txtHint" ).html("<b>Book information will be listed here...</b>"); 
			       }else {
			               $.get( "<?php echo base_url();?>Prms/ajaxsearch?id="+str, function( data ){
			                   $( "#txtHint" ).html( data );  
			            });
			       }
			   });  
			});  
	</script> -->
	<script>
		
		$(document).ready(function () {
    		$("#country").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/issp/Prms/ajaxsearch",
            data: {
                keyword: $("#country").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#country').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#country').attr("data-toggle", "");

                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="presentation" ><a class="dropdownlivalue">' + value['last_name'] + ', '+ value['given_name']+'</a></li>');


                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#country').val($(this).text());

    });

});
	</script>

</body>
</html>
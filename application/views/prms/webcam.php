<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Public/css/photo.css">
 	<link rel="stylesheet" href="<?php echo base_url();?>/Public/css/bootstrap.min.css">
 	<script src="<?php echo base_url()?>/Public/js/jquery.min.js"></script>
  	<script src="<?php echo base_url()?>/Public/js/bootstrap.min.js"></script>
</head>
	<body>
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Take Photo</h4>
        </div>
        <div class="modal-body">
          		<div class="booth">
					<video id="video" width="400" height="300"></video>
					<a href="#" id="capture" class="booth-capture-button">Capture</a>
					<canvas id="canvas" width="400" height="300"></canvas>
					<img id="photo" src="http://placekitten.com/g/400/300" alt="Take a Photo of You">
				</div>
				<br>
			<div class="pull-right">
				<div class="col-md-12">
					<a href=""><button type="submit" id="save_photo" class="btn btn-success"><i class="fa fa-user-plus"></i>Save Photo</button></a>
				</div>
			</div>
		</div>
			<br>
			<br>
	<script type="text/javascript" src="<?php echo base_url();?>/Public/js/photo.js"></script>
	<script src="<?php echo base_url()?>/Public/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>/Public/js/dataTables.bootstrap.min.js"></script>
	</body>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>		
</html>
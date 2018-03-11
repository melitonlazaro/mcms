<html>
<head>
	<?php require('extensions.php'); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">
	<title>MCMS</title>

</head>
<body style="margin-left: 25px; margin-right: 25px;">

      <?php require('sidenav.php'); ?> 
      <br><br><br><br><br><br>
    <div class="container-fluid">
    	<div class="panel panel-default">
    		<div class="panel-body">
				<div>
			    	<div class="row">
			    		<div class="col-md-12">
			    			<div class="row">
			    				<div class="col-md-6"><h2><strong>Maternity Case List </strong></h2></div>
			    				<div class="col-md-6"> 
					                <span class="pull-right">
					                    <a data-toggle="modal" href=".html#myModal"><h2 class="pull-right"><i class="fa fa-plus-square-o"></i></h2></a>
							        </span><br>
					            		<!--Modal-->
								          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
								              <div class="modal-dialog">
								                  <div class="modal-content">
								                      <div class="modal-header">
								                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								                          <h4 class="modal-title">Create maternity case?</h4>
								                      </div>
								                      <div class="modal-body">	
														  <a href="<?php echo base_url(); ?>/Prms/choose_patient"><button type="button" class="btn btn-primary btn-lg btn-block">Patients with existing records</button></a>
														  <br>
														  <a href="<?php echo base_url(); ?>Prms/profiling">
			  											  <button type="button" class="btn btn-default btn-lg btn-block">Patients without existing records</button></a>		
								                      </div>
								                      <div class="modal-footer">
								                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
								                      </div>
								                  </div>
								              </div>
								          </div>
					          			<!-- end of modal -->
					      		</div>
							</div><br>
							<table id="example1" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
							          <th>Case ID</th>
							          <th>Patient ID</th>
							          <th>Patient Name</th>
							          <th>Date Start</th>
							          <th>Status</th>
							          <th>Action</th>
									</tr>
								</thead>
								<tbody>
										<?php
										$for_postnatal = "For Postnatal";
		                                $complete = "Complete";
		                                $active = "Active";
		                                $archive = "Archived";
										?>
										<?php foreach ($case_details as $cd) 
										{
											echo '
												<tr>
											          <td>'.$cd->case_id.'</td>
											          <td>'.$cd->patient_ID.'</td>
											          <td>'.$cd->last_name.', '.$cd->given_name.' '.$cd->middle_initial.'</td>
											          <td>'.$cd->date_start.'</td>';
											          if($cd->status === $complete)
											          {
											          	echo '<td><span class="label label-success">'.$cd->status.'</span></td> ';
											          }
											          elseif($cd->status === $for_postnatal)
											          {
											          	echo '<td><span class="label label-success">'.$cd->status.'</span></td> ';
											          }
											          elseif($cd->status === $archive)
											          {
											          	echo '<td><span class="label label-danger">'.$cd->status.'</span></td> ';
											          }
											          elseif($cd->status === $active)
											          {
											          	echo '<td><span class="label label-warning">'.$cd->status.'</span></td> ';
											          }
											echo ' 
											          <td>
											            <a href="../prms/case_timeline/'.$cd->case_id.'"><button class="btn btn-info">View</button></a>
											          </td>     
												</tr>
												 ';
										} ?>

								</tbody>
							</table>
						</div>
					</div>		 
				</div>
			</div>
		</div>
	</div>
 <script src="<?php echo base_url();?>public/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>public/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#example1').DataTable({
        buttons:[
        {
          text:'My Button'

        }]
      });
    });
  </script>
</body>
</html>				
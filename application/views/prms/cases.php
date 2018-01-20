<html>
<head>
<?php require('extensions.php'); ?>
  <link rel="stylesheet" href="<?php echo base_url();?>/Public/css/dataTables.bootstrap.min.css">

</head>
<style type="text/css">
.page-header
{
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eee;
}
</style>
<body>
  <?php require('sidenav.php'); ?>
  <br><br><br>

  <div class="container-fluid">
    <h1 class="page-header">Case List</h1>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li>
            <a href="../Main/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li class="active">
            <i class="fa fa-plus-square"></i> Case
          </li>
        </ol>
      </div>
  </div>
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                 <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="addLabel">New Case</h4>
                          </div>                            
                          <div class="modal-body form-horizontal">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <h3>New Patient</h3>
                                          <a href="../prms/profiling"><button class="btn btn-success">Create new patient profile</button></a>
                                      </div>
                                      <div class="col-md-3">
                                          <h3>Existing Patient</h3>
                                          <form method="POST" action="../prms/create_case_existing">
                                            <div class="form-group">
                                              <label>Last Name</label>
                                              <select name="last_name" class="form-control">
                                                  <option></option>
                                                  <?php foreach($patient_names as $pn)
                                                  { 
                                                      echo '<option>'.$pn->last_name.', '.$pn->given_name.' '.$pn->middle_initial.'</option>';
                                                  }
                                                      echo '<input type="hidden" name="patient_id" value="'.$pn->patient_ID.'" >';
                                                  ?>
                                              </select>
                                            </div>
                                              <div class="form-group">
                                                <label>Physician ID</label>
                                                <select name="physician_id" class="form-control">
                                                    <option></option>
                                                    <?php 
                                                        foreach($physician_id as $pi)
                                                        {
                                                            echo '<option>'.$pi->physician_id.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                               </div>
                                              <br>

                                              <input type="submit" value="Create new case" class="btn btn-success">                                                                                      
                                          </form>
                                      </div>
                                      <div class="col-md-3">
                                      </div>
                                  </div>
                                  <br><br><br>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
<div class="container-fluid">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add New Case</button>
              
    <br><br>
    <div class="container-fluid">
        <table class="table table-bordered" id="case_list">
         <tr>
          <th>Case ID</th>
          <th>Patient ID</th>
          <th>Patient Name</th>
          <th>Physician ID</th>
          <th>Physician Name</th>
          <th>Date Start</th>
          <th>Status</th>
          <th>Action</th>
         </tr>
        <?php 
        $start_date = date('Y-m-01');
        $end_date = date('Y-m-31');
        foreach($case_details as $row)
        { echo '
         <tr>
          <td>'.$row->case_id.'</td>
          <td>'.$row->patient_id.'</td>
          <td>'.$row->last_name.', '.$row->given_name.' '.$row->middle_initial.'</td>
          <td>'.$row->physician_id.'</td>
          <td>'.$row->physician_last_name.'</td>
          <td>'.$row->date_start.'</td>
          <td>'.$row->status.'</td> 
          <td>
            <a href="../prms/case_timeline/'.$row->case_id.'"><button class="btn btn-info">View</button></a>
            <a href="../prms/prenatal/'.$row->patient_id.'/'.$row->case_id.'"><button class="btn btn-success">Prenatal</button></a>';
            if($row->date_start == $start_date )
            {
              echo ' <button class="btn btn-warning">Childbirth </button> ';
            }
            elseif($row->date_start < $end_date)
            {
              echo '<button class="btn btn-danger ">Childbirth </button>';
            }
            else
            {
              echo '<button class="btn btn-success" disabled>Childbirth </button>';
            }
            echo'
          </td>     
         </tr>';
        } ?>
       </table>
    </div>
</div>
<?php
$date = date('d-m-Y');
$total = date('d-m-Y', strtotime('-2 week', strtotime($date)));
echo $total;
?>
</body>
</html>
  <script>
    $(function () {
      $('#case_list').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
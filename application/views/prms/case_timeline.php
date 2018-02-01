<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "mcms";

    $conn = new mysqli($server, $username, $password, $db);
    if($conn->connect_error)
    {
        die("Connecting to database failed.");
    }

    $query = "SELECT `date`, `weight` FROM `physicalexamination` WHERE `case_id` = $case_id ORDER BY `date` ASC";
    $result = $conn->query($query);
    $chart_data = '';
    while($row = $result->fetch_array())
    {
        $chart_data .= "{ date:'".$row["date"]."', weight:".$row["weight"]."}, ";
    }
        $chart_data = substr($chart_data, 0, -2);
?>
<?php 
    if($conn->connect_error)
    {
        die("Connecting to database failed.");
    }
    $query1 = "SELECT `date`, `height` FROM `physicalexamination` WHERE `case_id` = $case_id ORDER BY `date` ASC";
    $result = $conn->query($query1);
    $chart_data1 = '';
    while($row = $result->fetch_array())
    {
        $chart_data1 .= "{ date:'".$row["date"]."', height:".$row["height"]." }, ";
    }
        $chart_data1 = substr($chart_data1, 0, -2);
?>
<html>
<head>
    <?php require('extensions.php') ?>
    <link rel="stylesheet" href="<?php echo base_url();?>/Public/css/LTE.css">


</head>
<body style="margin-left: 5px; margin-right: 5px;">
    <?php require 'sidenav.php';  ?>
    <br><br><br>
    <div class="container-fluid">
        <h1 class="page-header">Maternity Case Profile</h1>
           <div class="pull-right">
                <ol class="breadcrumb">
                  <li >
                    <i class="fa fa-dashboard"></i> Dashboard
                  </li>
                  <li>
                    <i class="fa fa-plus-square">Maternity Case List</i>
                  </li>
                  <li class="active">
                    <i class="fa fa-list">Maternity Case Profile</i>
                  </li>
                </ol>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <div class="panel panel-info">
                        <?php foreach ($case_details as $cs): ?>
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10">
                                    Maternity Case Details
                                </div>
                                <div class="col-md-2">
                                    <div class="pull-right">
                                        <?php  echo $cs->case_id;?>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-condensed">
                                <tr>
                                    <td>Maternity Case Number</td>
                                    <td><?php echo $cs->case_id;?></td>
                                </tr>
                                <tr>
                                    <td>Date Started</td>
                                    <td><?php echo $cs->date_start; ?></td>
                                </tr>
                                <tr>
                                    <td>Patient Name</td>
                                    <td><?php echo $cs->last_name; ?>, <?php echo $cs->given_name; ?> <?php echo $cs->middle_initial; ?></td>
                                </tr>
                                <tr>
                                    <td>Contact Number</td>
                                    <td><?php echo $cs->contact_num; ?> </td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td><?php echo $cs->occupation; ?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><?php echo $cs->street_no; ?> <?php echo $cs->brgy; ?> <?php echo $cs->city;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?php echo base_url();?>Prms/prenatal/<?php echo $cs->case_id;?>/<?php echo $cs->patient_ID; ?>"><button class="btn btn-info btn-block btn-lg">Prenatal</button></a>
                        </div>
                        <div class="col-md-6">
                            <?php 
                            $date = date('Y-m-d');
                            $total = date('Y-m-d', strtotime('+2 week', strtotime($date)));
                            if($expected_date_of_confinement === $date)
                            {
                                echo '<button class="btn btn-warning btn-block btn-lg" data-toggle="modal" data-target="#childbirth_modal">Childbirth</button>';
                            }
                            elseif($expected_date_of_confinement < $date)
                            {
                                echo '<button class="btn btn-danger btn-block btn-lg" data-toggle="modal" data-target="#childbirth_modal">Childbirth</button>';
                            }
                            elseif($expected_date_of_confinement > $date)
                            {
                                echo '<button class="btn btn-success btn-block btn-lg" disabled>Childbirth</button>';
                            }
                            ?>
                            <div id="childbirth_modal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <strong>Childbirth</strong>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <?php echo form_open('Prms/childbirth') ?>
                                        <div class="modal-body">
                                            <strong>Infant Information</strong>
                                            <br><br>
                                            <div class="row">
                                                <input type="hidden" name="patient_ID" value="<?php echo $cs->patient_ID; ?>">
                                                <input type="hidden" name="case_id" value="<?php echo $cs->case_id; ?>">
                                                <div class="col-md-4">
                                                    <label>First Name</label>
                                                    <input type="text" name="infant_first_name" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Surname</label>
                                                    <input type="text" name="infant_last_name" class="form-control"placeholder="Surname">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>M.I</label>
                                                    <input type="text" name="infant_middle_initial" class="form-control" placeholder="Middle Initial">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php $current_date = date('Y-m-d'); ?>
                                                    <label>Date of Birth</label>
                                                    <input type="date" name="infant_date_of_birth" class="form-control" placeholder="Date of Birth" value="<?php echo $current_date; ?>">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Time of Birth</label>
                                                    <input type="time" name="time_of_birth" class="form-control" placeholder="Time of Birth">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Weight</label>
                                                    <div class="input-group">
                                                        <input type="text" name="weight" class="form-control" placeholder="Weight">
                                                        <span class="input-group-addon">Kg</span>
                                                    </div>
                                                </div>     
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                        <label>Length</label>
                                                        <div class="input-group">
                                                            <input type="text" name="length" class="form-control" placeholder="Length">
                                                            <span class="input-group-addon">Cm</span>
                                                        </div>
                                                    </div>
                                                <div class="col-md-4">
                                                    <label>Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Gravida</label>
                                                    <input type="text" name="gravida" class="form-control" placeholder="Gravida">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Para</label>
                                                    <input type="text" name="para" class="form-control" placeholder="Para">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Head Circumference</label>
                                                    <div class="input-group">
                                                        <input type="text" name="head_circumference" class="form-control">
                                                        <span class="input-group-addon">Cm</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Chest Circumference</label>
                                                    <div class="input-group">
                                                        <input type="text" name="chest_circumference" class="form-control">
                                                        <span class="input-group-addon">Cm</span>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Newborn Screening: &nbsp;</label>
                                                    <label class="radio-inline"><input type="radio" name="newborn_screening">Yes</label>
                                                    <label class="radio-inline"><input type="radio" name="newborn_screening">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="pull-left">
                                                <button type="button" class="btn" data-dismiss="modal">Close</button>
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h5>Growth Chart</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="btn-group-vertical">
                                        <button id="weight_btn" class="btn btn-info">Weight</button>
                                        <!-- <br>
                                        <br> -->
                                        <button id="height_btn" class="btn btn-info">Height&nbsp;</button>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div id="weight_chart"></div>
                                    <div id="height_chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    
                </div>
            </div>
            <!-- <div class="jumbotron" id="case_details">
                <?php 
                    echo '
                        <div class="row">
                            <p>Case Details </p>
                            <div class="col-md-4">
                                <p> 
                                   Case Number: '.$cs->case_id.'
                                </p>
                            </div>                        
                            <div class="col-md-4">
                                <p> 
                                    Date started: '.$cs->date_start.'
                                </p>
                            </div>
                            <div class="col-md-4">
                              
                            </div>
                        </div>
                        <div class="row">
                            <p> Patient Information</p> 
                            <div class="col-md-4">
                                <p>
                                    Patient Name: '.$cs->last_name.', '.$cs->given_name.' '.$cs->middle_initial.'
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p> 
                                    Date of Birth: '.$cs->date_of_birth.'
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p> 
                                    Occupation: '.$cs->occupation.'
                                </p>
                            </div>                                                                                    
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>
                                    Address: '.$cs->street_no.', '.$cs->brgy.', '.$cs->city.'
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    Address: '.$cs->contact_num.'
                                </p>
                            </div>   
                            <div class="col-md-4">
                                <p>
                                    Date Registered: '.$cs->date_registered.'
                                </p>
                            </div>                           
                        </div>
                        <div class="row">
                            <p> Emergency Contact </p>
                            <div class="col-md-4">
                                <p>
                                    Address: '.$cs->emergency_contact_name.'
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    Address: '.$cs->emergency_contact_num.'
                                </p>
                            </div>   
                            <div class="col-md-4">
                                <p>
                                    Date Registered: '.$cs->emergency_contact_address.'
                                </p>
                            </div>    
                        </div>
                        ';
                    endforeach ?>
            </div> -->
           <h2 class="page-header">Maternity Case Timeline</h2>
            <ul class="timeline">

                <?php 
                if(isset($prenatal))
                {
                    foreach($prenatal as $pr) 
                    {
                        echo 
                            '
                            <li class="time-label"> 
                                <span class="bg-blue">
                                    '.$pr->date.'
                                </span>
                            </li>

                            <li>
                                <i class="fa fa-plus-square bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                    <h3 class="timeline-header"> Prenatal Checkup</h3>
                                    <div class="timeline-body">
                                        <button data-toggle="collapse" data-target="#result-'.$pr->Num.'" class="btn btn-success btn-sm">View Result</button>
                                        <a href="../../Prms/print_pe_report/'.$pr->Num.'"><button class="btn btn-info btn-sm">Report</button></a>
                                        <div class="collapse" id="result-'.$pr->Num.'">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <h5></h5>
                                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspBlood Type: <br>
                                                     <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspSystolic:<br>
                                                     <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspDiastolic:<br>
                                                     <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspHeight:<br>
                                                     <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspWeight:<br>
                                                </div>
                                                <div class="col-lg-1">
                                                                '.$pr->blood_type.' <br>
                                                                '.$pr->systolic.' <br>
                                                                '.$pr->diastolic.' <br>
                                                                '.$pr->height.' <br>
                                                                '.$pr->weight.' <br>
                                                </div>
                                                <div class="col-lg-2">
                                                    <h5>Conjunctiva</h5>
                                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspPale: <br>
                                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspYellowish: <br>
                                                </div>
                                                <div class="col-lg-1">
                                                             <br>
                                                                '.$pr->conjunctiva_pale.' <br>
                                                                '.$pr->conjunctiva_yellowish.' <br>
                                                            
                                                </div>
                                                <div class="col-lg-2"> 
                                                        <h5>Neck</h5>
                                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspEnlarged Thyroid: <br> 
                                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspEnlarged Lymp Nodes : <br>
                                                </div>
                                                <div class="col-lg-1"> 
                                                        <br>
                                                        '.$pr->neck_enlarged_thyroid.' <br>
                                                        '.$pr->neck_enlarged_lymph_nodes.' <br>
                                                                    
                                                </div>
                                                <div class="col-md-2"> 
                                                <h5>Thorax</h5>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspAbnormal heart sounds/Cardiac rate: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbspAbnormal breath sounds/Resperatory rate: <br>
                                              </div>
                                              <div class="col-md-1"> 
                                                        <br><br>
                                                        '.$pr->thorax_abnormal_cardiac_rate.' <br><br>
                                                        '.$pr->thorax_abnormal_respiratory_rate.' <br>
                                              </div>     
                                            </div>
                                            <div class="row">
                                                 <div class="col-md-2">
                                                <h5>Breast</h5>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspMass <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspNipple Discharged: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSkin-orange-peel or dimpling: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEnlarged axilary lymp nodes: <br>
                                              </div>
                                              <div class="col-md-1">
                                                  <br>
                                                            '.$pr->breast_mass.' <br>
                                                            '.$pr->breast_nipple_discharge.' <br>
                                                            '.$pr->breast_dimpling.' <br>
                                                            '.$pr->breast_enlarged_axillary_lymph_nodes.' <br>
                                                                      
                                              </div>
                                              <div class="col-md-2">
                                                <h5>Abdomen</h5>
                                                  <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspFundic Height: <br>
                                                  <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspFetal Movement: <br>
                                                  <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspFetal Heart Tone: <br>
                                                
                                              </div>
                                              <div class="col-md-1">
                                                        <br><br>
                                                            '.$pr->abdomen_pe_fundic_height.' <br>
                                                            '.$pr->abdomen_pe_fetal_movement.' <br>
                                                            '.$pr->abdomen_pe_fetal_heart_tone.' <br>
                                              </div>
                                              <div class="col-md-2">
                                                <h5>Leopolds Manuever</h5>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp1. Presenting Part: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp2. Position of fetal back: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp3. Fetal parts in fundus: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp4. Status of the presenting part: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspUterine Activity: <br>
                                              </div>
                                              <div class="col-md-1">
                                                            <br><br>
                                                            '.$pr->lm_presenting_part.' <br>
                                                            '.$pr->lm_position_of_fetal_back.' <br>
                                                            '.$pr->lm_fetal_parts.' <br>
                                                            '.$pr->lm_presenting_part_status.' <br>
                                                            '.$pr->lm_uterine_activity.' <br>
                                                                 
                                              </div>
                                              <div class="col-md-2">
                                                <h5>Perinuem:</h5>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspScars: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspWarts/Mass <br> 
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspLaceration: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSevere Varicosities: <br>
                                              </div>
                                              <div class="col-md-1">
                                                            <br><br>
                                                            '.$pr->perineum_scars.' <br>
                                                            '.$pr->perineum_warts_or_mass.' <br>
                                                            '.$pr->perineum_laceration.' <br>
                                                            '.$pr->perineum_severe_varicosities.' <br>
                                              </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                <h5>Vagina</h5>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspBartholins cyst: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspWarts/Skenes gland discharged: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspCystocoele/Rectocoele: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPurulent discharged/bleeding: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEroslon/Polyp/Foreign Body: <br>
                                              </div>
                                              <div class="col-md-1">
                                                          <br><br>
                                                            '.$pr->vagina_bartholins_cyst.' <br>
                                                            '.$pr->vagina_warts_gland_discharge.' <br>
                                                            '.$pr->vagina_cystocele_or_rectocoele.' <br>
                                                            '.$pr->vagina_purulant_discharge.' <br>
                                                            '.$pr->vagina_erosion_or_foreign_body.' <br>
                                                             
                                              </div>
                                                <h4>Internal Examination</h4>          
                                              <div class="col-md-2">
                                                <h3>Cervix</h3>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspConsistency: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDilation: <br> 
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPalpable Presenting Part: <br>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspStatus of Bag of Water: <br>
                                              </div>
                                              <div class="col-md-1">
                                                          <br><br><br>
                                                            '.$pr->cervix_consistency.' <br>
                                                            '.$pr->cervix_dilatation.' <br>
                                                            '.$pr->cervix_palpable_presenting_part.' <br>
                                                            '.$pr->cervix_status_BagOfWater.' <br>
                                                         
                                              </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                  <h3>Impression</h3>

                                                 <br>
                                                  <div class="well well-sm"> 
                                                     '.$pr->impression.'
                                          
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                <h3>Plans</h3>
                                                <br>
                                                <div class="well well-sm"> 
                                                   '.$pr->plans.'
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-footer">
                                    </div>
                                </div><br>
                            </li>
                            ';
                    }
       
            if(isset($medicalhistory))
            {
                foreach ($medicalhistory as $mh) 
                {
                    echo '
                        <li class="time-label">
                            <span class="bg-blue">
                                '.$mh->Date.'
                            </span>
                        </li>
                         <li>
                            <!-- timeline icon -->
                            <i class=" fa fa-medkit bg-green"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h3 class="timeline-header"><a href="#">Medical History</a></h3>
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>Expected Date of Confinemment</p>
                                            <div class="well well-sm">
                                                '.$mh->oh_expected_date_of_confinement.'
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Age of Gestation</p>
                                            <div class="well well-sm">
                                                '.$mh->oh_age_of_gestation_weeks.'
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Date of Last Delivery</p>
                                            <div class="well well-sm">
                                                '.$mh->oh_last_delivery_date.'
                                            </div>
                                        </div>                                                                                
                                    </div>
                                </div>
                                <div class="timeline-footer">
                                    <a href="../../Prms/medicalhistory_result/'.$mh->Num.'"><button class="btn btn-success btn-sm">View Result </button></a>
                                    <a href="../../Prms/print_mh_report/'.$mh->Num.'"><button class="btn btn-info btn-sm">Report</button></a>
                                </div>
                            </div>
                        </li>
                         ';
                }
            }?>
                <li class="time-label">
                    <span class="bg-green">
                        <?php echo $cs->date_start;?>
                    </span>
                </li>
                 <li>
                    <!-- timeline icon -->
                    <i class=" fa fa-user-plus bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                        <h3 class="timeline-header"><a href="#">Date Created</a> ...</h3>
                        <div class="timeline-body">
                            <?php echo $cs->date_start;?>
                        </div>
                    </div>
                </li>
            <?php }

            else 
            {
                echo '
                    <li class="time-label">
                    <span class="bg-green">
                        '.$cs->date_start.'
                    </span>
                </li>
                 <li>
                    <!-- timeline icon -->
                    <i class=" fa fa-wanning bg-red"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                        <h3 class="timeline-header"><a href="#">No Records</a></h3>
                        <div class="timeline-body">
                            This case has no records. <br>
                            </a href="../prms/"><button> </button>
                        </div>
                    </div>
                </li>
                     ';
            }
            ?>
            </ul>
    </div>
    <script>
        $(document).ready(function(){
            $('#height_chart').hide();
            $('#height_btn').click(function(){
                $('#weight_chart').hide(100);
                $('#height_chart').show(100);
            });
            $('#weight_btn').click(function(){
                $('#weight_chart').show(100);
                $('#height_chart').hide(100);
            });
        });
    </script>
    <script>
        Morris.Line({
            element: 'weight_chart',
            data: [<?php echo $chart_data; ?>],
            xkey: 'date',
            ykeys: ['weight'],
            labels: ['weight'],
            hideHover: 'auto',
            stacked: true
        });
    </script>
    <script>
        Morris.Line({
            element: 'height_chart',
            data: [<?php echo $chart_data1; ?>],
            xkey: 'date',
            ykeys: ['height'],
            labels: ['height'],
            hideHover: 'auto',
            stacked: true
        });
    </script>
</body>
</html>
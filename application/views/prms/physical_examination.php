<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php require('extensions.php'); ?>
  <style>
    

.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
  </style>
</head>
<body style="margin-left: 25px; margin-right: 25px;">
  <?php require('sidenav.php'); ?> 
    <br><br><br><br><br><br>
    <div>
      <div class="container-fluid">
          <div class="panel panel-default">
              <div class="panel-body">

                <div>
                    <div class="container">
                        <h3><strong>Physical Examination</strong></h3>
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                    <p><small>Vital Signs</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p><small>Conjunctiva</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p><small>Neck</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                    <p><small>Thorax</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                    <p><small>Breast</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                                    <p><small>Abdomen</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                                    <p><small>Leopold's Manuever</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                                    <p><small>Perineum</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
                                    <p><small>Vagina</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-1"> 
                                    <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">10</a>
                                    <p><small>Cervix</small></p>
                                </div>
                                <div class="stepwizard-step col-xs-2"> 
                                    <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled">11</a>
                                    <p><small>Impression and Plans</small></p>
                                </div>
                            </div>
                        </div>
                        
                        <?php echo form_open('Prms/prenatal_physical_examination'); ?>
                            <input type="hidden" name="patient_id" value="<?php echo $patient_ID;?>">
                            <input type="hidden" name="case_id" value="<?php echo $last_case_id;?>"> 
                            <div class="panel panel-primary setup-content" id="step-1">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Vital Signs</h3>
                                </div>
                                <div class="panel-body">
                                      <div class="row">
                                                  <div class="col-md-3">
                                                      <strong>Blood Type:</strong>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <select name="blood_type" id="blood_type" class="form-control pull-right pull-right">
                                                          <option value="O">O</option>
                                                          <option value="A">A</option>
                                                          <option value="B">B</option>
                                                          <option value="AB">AB</option>
                                                      </select>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <strong>Blood Pressure:</strong>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <div class="input-group">
                                                        <input type="text" class="form-control pull-right " placeholder="Systolic" name="systolic">
                                                        <span class="input-group-addon">mmHg</span>
                                                      </div>
                                                      <br>
                                                      <div class="input-group">
                                                        <input type="text" class="form-control pull-right " placeholder="Diastolic" name="diastolic">
                                                        <span class="input-group-addon">mmHg</span>
                                                      </div>
                                                  </div>
                                      </div><br>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <strong>Height:</strong>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control pull-right" name="height">
                                                      <span class="input-group-addon">cm</span>   
                                                    </div>                               
                                                </div>
                                                <div class="col-md-3">
                                                    <strong>Weight:</strong>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control pull-right" name="weight">
                                                      <span class="input-group-addon">Kg</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button" disabled>Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-primary setup-content" id="step-2">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Conjunctiva</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Pale:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="pale">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Yellowish:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="yellowish">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-primary setup-content" id="step-3">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Neck</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Enlarged Thyroid:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="enlargedthyroid" id="enlargedthyroid">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select> 
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Enlarged Lymp Nodes:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="enlargedlympnodes">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>  
                                        </div>
                                    </div>
                                    <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-primary setup-content" id="step-4">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Thorax</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Abnormal heart sounds/Cardiac rate:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="abnormalheartsound">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Abnormal breath sounds/Resperatory rate:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="abnormalbreathsounds">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-5">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Breast</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Mass:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="mass">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select> 
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Nipple Discharged:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="nippledischarged">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Skin-orange-peel or dimpling :</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="skinorangepeel">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Enlarged axilary lymp nodes :</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="enlargedaxilarylympnodes">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-6">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Abdomen</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Abnormal heart sounds/Cardiac rate:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control pull-right" name="abdomenheight">
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Fetal Movement:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control pull-right" name="fetalmovement">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Fetal Heart Tone:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                              <input type="number" class="form-control pull-right" name="fetalhearttone">
                                              <span class="input-group-addon">BPM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-7">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Leopold's Maneuver</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>1. Presenting Part:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control pull-right" name="presentingpart" >
                                        </div>
                                        <div class="col-md-3">
                                            <strong>2. Position of fetal back:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control pull-right" name="positionfetalback" >
                                        </div>
                                    </div><br>
                                     <div class="row">
                                        <div class="col-md-3">
                                            <strong>3. Fetal parts in fundus:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control pull-right" name="fetalparts" >
                                        </div>
                                        <div class="col-md-3">
                                            <strong>4. Status of the presenting part:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control pull-right" name="statuspresenntingpart" >
                                        </div>
                                    </div><br>
                                     <div class="row">
                                        <div class="col-md-3">
                                            <strong>Uterine Activity:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control pull-right" name="urineactivity" >
                                        </div>
                                    </div>
                                            <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-8">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Perineum</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Scars:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="scars">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Warts/Mass:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="wartsmass">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select> 
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Laceration:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="laceration">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>  
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Severe Varicosities:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="severevaricosities">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                            <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-9">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Vagina</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Bartholin's cyst:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="bartholinscyst">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Warts/Skene's gland discharged:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="wartsskenesgland">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Cystocoele/Rectocoele:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="crystocoele">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select> 
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Purulent discharged/bleeding:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="purulentdischarged">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Eroslon/Polyp/Foreign Body:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="eroslon">
                                                     <option value="No">No</option>
                                                     <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                            <br>
                                        <div class="pull-right">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                                </div> 
                                                <div class="col-md-6">
                                                     <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                                </div>
                                            </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-10">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Cervix</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Consistency:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="consistency">
                                              <option value="Firm">Firm</option>
                                              <option value="Soft">Soft</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Dilation:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control pull-right" name="dilation">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Palpable Presenting Part:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="palpablepresentingpart">
                                              <option>Head</option>
                                              <option>Buttocks</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Status of Bag of Water:</strong>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control pull-right" name="statusofbagofwater">
                                              <option>Intact</option>
                                              <option>Ruptured</option>
                                            </select>
                                        </div>
                                    </div>
                                            <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-11">
                                <div class="panel-heading">
                                     <h3 class="panel-title">Impression and Plans</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Impression</strong>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea rows="4" cols="50" name="impression" class="form-control"></textarea>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Plans</strong>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea rows="4" cols="50" name="plans" class="form-control"></textarea>
                                        </div>
                                    </div>
                                            <br>
                                    <div class="pull-right">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-default  prevBtn" type="button">Previous</button> 
                                            </div> 
                                            <div class="col-md-6">
                                                 <button class="btn btn-success nextBtn pull-right" type="submit">Submit</button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>

<script>
  $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');
        allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    allPrevBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>
</body>
</html>
<html>
<head>

<?php require('extensions.php'); ?>
<style>
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
</style>
</head>
<body>
    
<?php 
    if($this->session->flashdata('success'))
    {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('success');
        echo '</div>';
    }

?>
<?php require('sidenav.php'); ?>
      <br><br><br><br><br><br>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container">
                <h3><strong>Medical History</strong></h3>
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <center>
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                            <p><small>Heent</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p><small>Chest/Heart</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p><small>Extremities</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                            <p><small>Skin</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2"> 
                            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                            <p><small>Obstetrical History</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3"> 
                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                            <p><small>History of any of the ff.</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                            <p><small>Abdomen</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-2"> 
                            <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                            <p><small>Obstetrical History</small></p>
                        </div>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <?php echo form_open('Prms/medical_history'); 

                    ?>
                    <!-- <input type="hidden" name="patient_ID" id="patient_ID"  value="<?php echo $patient_ID;?>">
                    <input type="hidden" name="case_id" id="case_id" value="<?php echo $case_ID;?>"> -->
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                             <h3 class="panel-title">Heent</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-md-3">
                                        <strong>Epilepsy/Convulsion:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="epilepsy" id="epilepsy"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                
                                    <div class="col-md-3">
                                        <strong>Severe Headache/Dizziness:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="severeheadache" id="severeheadache"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select> 
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Visual Disturbance:</strong>
                                    </div>
                                    <div class="col-md-3">
                                            <select class="form-control" name="visualdisturbance" id="visualdisturbance"><br>
                                                 <option value="No">No</option>
                                                 <option value="Yes">Yes</option>
                                            </select> 
                                        </div>
                                    <div class="col-md-3">
                                        <strong>Yellowish Discoloration::</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="yellowdiscoloration" id="yellowdiscoloration"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Enlarged Thyroid</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="enlargedthyroid" id="enlargedthyroid"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7"></div>
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
                             <h3 class="panel-title">Chest/Heart</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-md-3">
                                        <strong>Severe Chest pain:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="severechestpain" id="severechestpain" ><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Easy fatigability:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="easyfatig" id="easyfatig"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Axillary masses:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="axillarymasses" id="axillarymasses"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Nipple Discharge:</strong>
                                    </div>
                                    <div class="col-md-3">    
                                        <select class="form-control" name="nippledischarge" id="nippledischarge"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Systolic of 140 and above:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="systolic" id="systolic" ><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Diastolic of 90 and above:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="diastolic" id="diastolic"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Family History of CVA:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="familyhistory" id="familyhistory"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div><br>
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
                             <h3 class="panel-title">Extremities</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-md-3">
                                        <strong>Severe varicosities:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="severevaricosities" id="severevaricosities"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">    
                                        <strong>Deformities:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="deformities" id="deformities"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Swelling or severe pain in the legs:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="swellingorsevereinlegs" id="swellingorsevereinlegs"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div><br>
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
                             <h3 class="panel-title">Skin</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-md-3">
                                        <strong>Yellowish Discoloration:</strong>
                                    </div>  
                                    <div class="col-md-3">
                                        <select class="form-control" name="yellowish" id="yellowish"><br>
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select> 
                                    </div> 
                                    <div class="col-md-7"></div>
                                </div><br>
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
                             <h3 class="panel-title">Obstetrical History</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-md-3">
                                        <strong>Fullterm:</strong>  
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" value="0" min="0" name="fullterm" id="fullterm" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Preterm:</strong>  
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" min="0" value="0" name="preterm" id="preterm" class="form-control">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Abortion:</strong>  
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" min="0"  value="0" name="abortion" id="abortion" class="form-control"> 
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Living Children:</strong> 
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" min="0" value="0" name="livingchildren" id="livingchildren" class="form-control">
                                    </div>  
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Date of Last Delivery:</strong> <?php $maxdate = date('Y-m-d'); ?>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="datelastdelivery" id="datelastdelivery" class="form-control" max="<?php echo $maxdate; ?>"> 
                                    </div> 
                                    <div class="col-md-3">
                                        <strong>Type of Last Delivery:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="typeslastdelivery" id="typeslastdelivery"><br>
                                             <option value="Spontaneous">Spontaneous</option>
                                             <option value="Forcep">Forcep</option>
                                             <option value="Ceasarian">Ceasarian</option>
                                        </select>    
                                    </div> 
                                </div> <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Age of Gestation:</strong>  
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" min="0" value="0" name="agegestation" id="agegestation" class="form-control">
                                    </div> 
                                    <div class="col-md-3">
                                        <strong>Expected Date of Confinement:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="dateconfinement" id="dateconfinement" placeholder="Date Picker" class="form-control" min="<?php echo $maxdate; ?>">
                                    </div>
                                </div><br>
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
                             <h3 class="panel-title">History of any of the ff.</h3>
                        </div>
                        <div class="panel-body">
                            <<div class="row">
                                    <div class="col-md-3">
                                        <strong>Smoking:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="smoking" id="smoking"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Allergies:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="allergies" id="allergies"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Drug Intake:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="drugintake" id="drugintake"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>  
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Drug Abuse and Alcoholism:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="drugabuse" id="drugabuse"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>STD, Multiple Partners:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="std" id="std"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>  
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Bleeding tendencies, anemia:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="anemia" id="anemia"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Diabeties/Congenital anomalies:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="diabetes" id="diabetes"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>  
                                    </div>
                                    <div class="col-md-7"></div>
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
                             <h3 class="panel-title">Abdomen</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-md-3">
                                        <strong>Mass in the abdomen:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="massinabdomen" id="massinabdomen"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>History of Gallbladder Disease:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="historyofgallbladder" id="historyofgallbladder"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>History of Liver Disease:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="historyofliver" id="historyofliver"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Previous Surgical Operation:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="prevsurgical" id="prevsurgical"><br>
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
                    <div class="panel panel-primary setup-content" id="step-8">
                        <div class="panel-heading">
                             <h3 class="panel-title">Obstetrical History</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-md-3">
                                        <strong>Previous Cesarean Section:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="prevcs" id="prevcs"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select> 
                                    </div>
                                    <div class="col-md-3">
                                        <strong>3 Consecutive Miscarriages:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="consecmiss" id="consecmiss"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select> 
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Ectopic pregnancy/H.Mole:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="ectopicpregnancy" id="ectopicpregnancy"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select> 
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Post Partnum hemorrhage:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="postpartum" id="postpartum"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select> 
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Forcep Delivery:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="forcepdelivery" id="forcepdelivery"><br>
                                             <option value="No">No</option>
                                             <option value="Yes">Yes</option>
                                        </select> 
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Pregnancy Induced Hypertension:</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="pih" id="pih"><br>
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
                                         <button type="submit" id="medical_history_button" class="btn btn-success">Submit</button> 
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
            
        </form>
    </div>
</div>

<!-- <script>
    $(function(){
        $( "#medical_history_button" ).click(function(event)
        {
            event.preventDefault();//prevent auto submit data

            var patient_ID = $("#patient_ID").val();
            var case_id = $("#case_id").val();
            var epilepsy = $("#epilepsy").val();
            var severeheadache = $('#severeheadache').val();
            var visualdisturbance = $('#visualdisturbance').val();
            var yellowdiscoloration = $('#yellowdiscoloration').val();
            var enlargedthyroid = $('#enlargedthyroid').val();
            var severechestpain = $('#severechestpain').val();
            var easyfatig = $('#easyfatig').val();
            var axillarymasses = $('#axillarymasses').val();
            var nippledischarge = $('#nippledischarge').val();
            var systolic = $('#systolic').val();
            var diastolic = $('#diastolic').val();
            var familyhistory = $('#familyhistory').val();
            var massinabdomen = $('#massinabdomen').val();
            var historyofgallbladder = $('#historyofgallbladder').val();
            var historyofliver = $('#historyofliver').val();
            var prevsurgical = $('#prevsurgical').val();
            var severevaricosities = $('#severevaricosities').val();
            var deformities = $('#deformities').val();
            var swellingorsevereinlegs = $('#swellingorsevereinlegs').val();
            var yellowish = $('#yellowish').val();
            var smoking = $('#smoking').val();
            var allergies = $('#allergies').val();
            var drugintake = $('#drugintake').val();
            var drugabuse = $('#drugabuse').val();
            var std = $('#std').val();
            var anemia = $('#anemia').val();
            var diabetes = $('#diabetes').val();
            var fullterm = $('#fullterm').val();
            var preterm = $('#preterm').val();
            var abortion = $('#abortion').val();
            var livingchildren = $('#livingchildren').val();
            var datelastdelivery = $('#datelastdelivery').val();
            var typeslastdelivery = $('#typeslastdelivery').val();
            var agegestation = $('#agegestation').val();
            var dateconfinement = $('#dateconfinement').val();
            var prevcs = $('#prevcs').val();
            var consecmiss = $('#consecmiss').val();
            var ectopicpregnancy = $('#ectopicpregnancy').val();
            var postpartum = $('#postpartum').val();
            var forcepdelivery = $('#forcepdelivery').val();
            var pih = $('#pih').val();
           
            $.ajax(
                {
                    type:"post",
                    url: "<?php echo site_url();?>Prms/medical_history",
                    data:{  patient_ID:patient_ID, 
                            case_id:case_id, 
                            epilepsy:epilepsy, 
                            severeheadache:severeheadache, 
                            visualdisturbance:visualdisturbance,
                            yellowdiscoloration: yellowdiscoloration,
                            enlargedthyroid: enlargedthyroid,
                            severechestpain: severechestpain,
                            easyfatig: easyfatig,
                            axillarymasses: axillarymasses,
                            nippledischarge: nippledischarge,
                            systolic: systolic,
                            diastolic: diastolic,
                            familyhistory: familyhistory,
                            massinabdomen: massinabdomen,
                            historyofgallbladder: historyofgallbladder,
                            historyofliver: historyofliver,
                            prevsurgical: prevsurgical,
                            severevaricosities: severevaricosities,
                            deformities: deformities,
                            swellingorsevereinlegs: swellingorsevereinlegs,
                            yellowish: yellowish,
                            smoking: smoking,
                            allergies: allergies,
                            drugintake: drugintake,
                            drugabuse: drugabuse,
                            anemia: anemia,
                            diabetes: diabetes,
                            fullterm: fullterm,
                            preterm: preterm,
                            abortion: abortion,
                            livingchildren: livingchildren,
                            datelastdelivery: datelastdelivery,
                            typeslastdelivery: typeslastdelivery,
                            agegestation: agegestation,
                            dateconfinement: dateconfinement,
                            prevcs: prevcs,
                            consecmiss: consecmiss,
                            ectopicpregnancy: ectopicpregnancy,
                            postpartum: postpartum,
                            forcepdelivery: forcepdelivery,
                            pih:pih },
                    success:function(data)
                    {
                        // var obj = jQuery.parseJSON(data); //use parseJSON on returned json_encode
                        // alert(obj.patient_ID);
                        alert('Successfully inserted');
                    }
             
                
                });
            
        });
      
    });


</script> -->
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
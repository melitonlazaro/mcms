<html>
<head>

<?php require('extensions.php'); ?>

</head>
<body>
      <?php require('sidenav.php'); ?>
      <br><br><br>

      <H1>Medical History</H1>
<?php 
    if($this->session->flashdata('success'))
    {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('success');
        echo '</div>';
    }

?>
<?php echo form_open('Prms/medical_history'); ?>
<input type="hidden" name="patient_ID" value="<?php echo $patient_ID;?>">
<input type="hidden" name="case_id" value="<?php echo $last_case_id;?>">
<div class="row">
    <div class="col-md-6">
        <h3>Heent</h3>
            <h6>Epilepsy/Convulsion:</h6>
            <select class="form-control" name="epilepsy"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
            <h6>Severe Headache/Dizziness:</h6>
            <select class="form-control" name="severeheadache"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select> 
            <h6>Visual Disturbance:</h6>
            <select class="form-control" name="visualdisturbance"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select> 
            <h6>Yellowish Discoloration::</h6>
            <select class="form-control" name="yellowdiscoloration"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
            <h6>Enlarged Thyroid</h6>
            <select class="form-control" name="enlargedthyroid"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
    </div>
    <div class="col-md-6">
        <h3>Chest/Heart</h3>
         <h6>Severe Chest pain:</h6>
            <select class="form-control" name="severechestpain"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Easy fatigability:</h6>
            <select class="form-control" name="easyfatig"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Axillary masses:</h6>
            <select class="form-control" name="axillarymasses"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Nipple Discharge:</h6>
            <select class="form-control" name="nippledischarge"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Systolic of 140 and above:</h6>
            <select class="form-control" name="systolic"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Diastolic of 90 and above:</h6>
            <select class="form-control" name="diastolic"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Family History of CVA:</h6>
            <select class="form-control" name="familyhistory"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
    </div>  
</div>
        
<div class="row">
    <div class="col-md-6">
    <h3>Abdomen</h3>
         <h6>Mass in the abdomen:</h6>
            <select class="form-control" name="massinabdomen"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
         <h6>History of Gallbladder Disease:</h6>
            <select class="form-control" name="historyofgallbladder"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
         <h6>History of Liver Disease:</h6>
            <select class="form-control" name="historyofliver"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
         <h6>Previous Surgical Operation:</h6>
            <select class="form-control" name="prevsurgical"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>                                 
    </div>
    <div class="col-md-6">
        <h3>Extrimities</h3>
        <h6>Severe varicosities:</h6>
            <select class="form-control" name="severevaricosities"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Deformities:</h6>
            <select class="form-control" name="deformities"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Swelling or severe pain in the legs:</h6>
            <select class="form-control" name="swellingorsevereinlegs"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h3>Skin</h3>
        <h6>Yellowish Discoloration:</h6>  
            <select class="form-control" name="yellowish"><br>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>       
    </div>
    <div class="col-md-6">
        <h3>Obstetrical History</h3>
        <h6>Fullterm:</h6>  
        <input type="text" name="fullterm" class="form-control">
        <h6>Preterm:</h6>  
        <input type="text" name="preterm" class="form-control">
        <h6>Abortion:</h6>  
        <input type="text" name="abortion" class="form-control">  
        <h6>Living Children:</h6>  
        <input type="text" name="livingchildren" class="form-control">   
        <h6>Date of Last Delivery:</h6> <?php $maxdate = date('Y-m-d'); ?>
        <input type="date" name="datelastdelivery" class="form-control" max="<?php echo $maxdate; ?>">   
        <h6>Type of Last Delivery:</h6>
        <select class="form-control" name="typeslastdelivery"><br>
             <option value="Spontaneous">Spontaneous</option>
             <option value="Forcep">Forcep</option>
             <option value="Ceasarian">Ceasarian</option>
        </select>                 
        <h6>Age of Gestation:</h6>  
        <input type="text" name="agegestation" class="form-control"> 
        <h6>Date of Confinement:</h6>
        <input type="date" name="dateconfinement" placeholder="Date Picker" class="form-control" min="<?php echo $maxdate; ?>">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h3>History</h3>
        <h6>Smoking:</h6>
            <select class="form-control" name="smoking"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>
        <h6>Allergies:</h6>
            <select class="form-control" name="allergies"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>  
        <h6>Drug Intake:</h6>
            <select class="form-control" name="drugintake"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>  
        <h6>Drug Abuse and Alcoholism:</h6>
            <select class="form-control" name="drugabuse"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>  
        <h6>STD, Multiple Partners:</h6>
            <select class="form-control" name="std"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>  
        <h6>Bleeding tendencies, anemia:</h6>
            <select class="form-control" name="anemia"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>  
        <h6>Diabeties/Congenital anomalies:</h6>
            <select class="form-control" name="diabetes"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select>                                                
    </div>
    <div class="col-md-6">
        <h3>History of anf of the following:</h3>
        <h6>Previous Cesarean Section:</h6>
            <select class="form-control" name="prevcs"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select> 
        <h6>3 Consecutive Miscarriages:</h6>
            <select class="form-control" name="consecmiss"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select> 
        <h6>Ectopic pregnancy/H.Mole:</h6>
            <select class="form-control" name="ectopicpregnancy"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select> 
        <h6>Post Partnum hemorrhage:</h6>
            <select class="form-control" name="postpartum"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select> 
        <h6>Forcep Delivery:</h6>
            <select class="form-control" name="forcepdelivery"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select> 
        <h6>Pregnancy Induced Hypertension:</h6>
            <select class="form-control" name="pih"><br>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
            </select> 
    </div>
</div>
        <button type="submit" class="btn btn-success"> Submit and proceed to Physical Examination</button> 


</form>

</body>
</html>
<html>
<head>
<?php require('extensions.php'); ?>
</head>
<body>
  <?php require('sidenav.php'); ?>
  <br><br><br>
      <H1>Physical Examination</H1>

<?php echo form_open('Prms/physical_examination'); ?>

<div class="container">
    <input type="hidden" name="patient_id" value="<?php echo $patient_ID;?>">
    <input type="hidden" name="case_id" value="<?php echo $last_case_id;?>"> 

    <div class="row">
        <div class="col-md-6">
            <h3>Vital Signs</h3>
            <div class="form-inline form-group">
                <label for="blood_type">Blood Type:</label>
                <select name="blood_type" id="blood_type" class="form-control pull-right pull-right">
                    <option value="O">O</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                </select>
            </div>
            <div class="form-inline form-group">      
                <label>Blood Pressure:</label>
                    <input type="text" class="form-control pull-right" name="blood_pressure">
            </div>
            <div class="form-inline form-group">                   
                <label>Height:</label>
                    <input type="text" class="form-control pull-right" name="height" placeholder="in Centimeters">            
            </div>
            <div class="form-inline form-group"> 
                <label>Weight:</label>
                    <input type="text" class="form-control pull-right" name="weight" placeholder="in kilograms">            
            </div>
        </div>
        <div class="col-md-6">
            <h3>Conjunctiva</h3>
            <div class="form-inline form-group"> 
                <label>Pale:</label>
                    <select class="form-control pull-right" name="pale">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                    </select>
            </div>    
            <div class="form-inline form-group"> 
                <label>Yellowish:</label>
                    <select class="form-control pull-right" name="yellowish">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                    </select>            
            </div>    
        </div>
    </div>    

    <div class="row">
        <div class="col-md-6">
            <h3>Neck</h3>
            <div class="form-inline form-group"> 
                <label for="enlargedthyroid">Enlarged Thyroid:</label>
                <select class="form-control pull-right" name="enlargedthyroid" id="enlargedthyroid">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select>           
            </div>    
            <div class="form-inline form-group"> 
                <label>Enlarged Lymp Nodes:</label>
                <select class="form-control pull-right" name="enlargedlympnodes">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select>   
            </div>
        </div>
        <div class="col-md-6">
            <h3>Thorax</h3>
            <div class="form-inline form-group"> 
                <label>Abnormal heart sounds/Cardiac rate:</label>
                <select class="form-control pull-right" name="abnormalheartsound">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>
            <div class="form-inline form-group"> 
                <label>Abnormal breath sounds/Resperatory rate:</label>
                <select class="form-control pull-right" name="abnormalbreathsounds">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>
        </div>
    </div>    

    <div class="row">
        <div class="col-md-6">
            <h3>Breast</h3>
            <div class="form-inline form-group"> 
                <label>Mass:</label>
                <select class="form-control pull-right" name="mass">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select>   
            </div>
                <div class="form-inline form-group"> 
                <label>Nipple Discharged:</label>
                <select class="form-control pull-right" name="nippledischarged">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select>   
            </div>
                <div class="form-inline form-group"> 
                <label>Skin-orange-peel or dimpling :</label>
                <select class="form-control pull-right" name="skinorangepeel">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>
                <div class="form-inline form-group"> 
                <label>Enlarged axilary lymp nodes :</label>
                <select class="form-control pull-right" name="enlargedaxilarylympnodes">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>
        </div>
        <div class="col-md-6">
            <h3>Abdomen</h3>
            <div class="form-inline form-group"> 
                <label>Abnormal heart sounds/Cardiac rate:</label>
                <input type="text" class="form-control pull-right" name="abdomenheight" placeholder="in Centimeters">
            </div>    
            <div class="form-inline form-group"> 
                <label>Fetal Movement:</label>
                <input type="text" class="form-control pull-right" name="fetalmovement">
            </div>    
            <div class="form-inline form-group"> 
                <label>Fetal Heart Tone:</label>
                <input type="text" class="form-control pull-right" name="fetalhearttone" placeholder="if applicable by AOG">
            </div>    
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-6">
            <h3>Leopard's Manuever</h3>
            <div class="form-inline form-group">
                <label>1. Presenting Part:</label>
                <input type="text" class="form-control pull-right" name="presentingpart" placeholder="in Centimeters"> 
            </div>
            <div class="form-inline form-group">
                <label>2. Position of fetal back:</label>
                <input type="text" class="form-control pull-right" name="positionfetalback" placeholder="in Centimeters">
            </div>
            <div class="form-inline form-group">
                <label>3. Fetal parts in fundus:</label>
                <input type="text" class="form-control pull-right" name="fetalparts" placeholder="in Centimeters">    
            </div>
        </div>
        <div class="col-md-6">
            <br><br><br>
        <div class="form-inline form-group">
                <label>4. Status of the presenting part:</label>
                <input type="text" class="form-control pull-right" name="statuspresenntingpart" placeholder="in Centimeters">
            </div>
            <div class="form-inline form-group">
                <label>Uterine Activity:</label>    
                <input type="text" class="form-control pull-right" name="urineactivity" placeholder="in Centimeters">
            </div>
        </div>
    </div>
        <h2>Pelvic Examination</h2>

    <div class="row">
        <div class="col-md-6">
            <h3>Perinuem:</h3>
            <div class="form-inline form-group">
                <label>Scars:</label>
                <select class="form-control pull-right" name="scars">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>  
            <div class="form-inline form-group">
                <label>Warts/Mass:</label>
                <select class="form-control pull-right" name="wartsmass">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>  
            <div class="form-inline form-group">
                <label>Laceration:</label>
                <select class="form-control pull-right" name="laceration">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>  
            <div class="form-inline form-group">
                <label>Severe Varicosities:</label>
                <select class="form-control pull-right" name="severevaricosities">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>  
        </div>
        <div class="col-md-6">
            <h3>Vagina:</h3>
            <div class="form-inline form-group">
                <label>Bartholin's cyst:</label>
                <select class="form-control pull-right" name="bartholinscyst">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>  
            <div class="form-inline form-group">
                <label>Warts/Skene's gland discharged:</label>
                <select class="form-control pull-right" name="wartsskenesgland">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select>
            </div>  
            <div class="form-inline form-group">
                <label>Cystocoele/Rectocoele:</label>
                <select class="form-control pull-right" name="crystocoele">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>  
            <div class="form-inline form-group">
                <label>Purulent discharged/bleeding:</label>
                <select class="form-control pull-right" name="purulentdischarged">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select> 
            </div>  
            <div class="form-inline form-group">
                <label>Eroslon/Polyp/Foreign Body:</label>
                <select class="form-control pull-right" name="eroslon">
                         <option value="No">No</option>
                         <option value="Yes">Yes</option>
                </select>  
            </div>  
        </div>
    </div>
        <h2>Internal Examination</h2>

    <div class="row">
        <div class="col-md-6">
            <h3>Cervix:</h3>
            <div class="form-inline form-group">
                <label>Consistency:</label>
                <input type="text" class="form-control pull-right" name="consistency">
            </div>
            <div class="form-inline form-group">
                <label>Dilation:</label>
                <input type="text" class="form-control pull-right" name="dilation">    
            </div>
            <div class="form-inline form-group">
                <label>Palpable Presenting Part:</label>
                <input type="text" class="form-control pull-right" name="palpablepresentingpart">    
            </div>
            <div class="form-inline form-group">
                <label>Status of Bag of Water:</label>
                <input type="text" class="form-control pull-right" name="statusofbagofwater">         
            </div>
        </div>
        <div class="col-md-6">
            <label>Impression</label>
            <textarea rows="4" cols="50" name="impression" class="form-control"></textarea>
            <br><br>
            <label>PLANS</label>
            <textarea rows="4" cols="50" name="plans" class="form-control"></textarea>

        </div>   
    </div>
    <br><br>
    <center>
        <input type="submit" value="Submit" class="btn btn-success">
    </center>
    </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <?php require('extensions.php'); ?>
</head>
<body>
  <?php require('sidenav.php'); ?>


</head>
<body>
  <br><br><br>
    <div class="container-fluid">
      <div class="pull-right">
        <ol class="breadcrumb">
          <li>
            <a href="../Main/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li>
            <i class="fa fa-plus-square"></i> Case List
          </li>
            <li>
              <i class="fa fa-plus-square"></i> Case Profile
            </li>
            <li class="active">
             Medical History Result
            </li>
        </ol>
      </div>
  </div>
  <div class="container-fluid">
          <h1 class="page-header"> Medical History Result</h1>
        <?php foreach ($mh_result as $mh) 
        {?>
        <div class="row">
          <div class="col-md-4">
            <h6>Case Number</h6>
            <div class="well well-sm">
              <?= $mh->case_id; ?>
            </div>
          </div>
          <div class="col-md-4">
            <h6>Patient ID</h6>
            <div class="well well-sm">
              <?= $mh->Patient_ID; ?>
            </div>
          </div>
          <div class="col-md-4">
            <h6>Date</h6>
            <div class="well well-sm">
              <?= $mh->Date; ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h5>Chest/Heart</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSevere Chest pain: <br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEasy fatigability:<br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspAxillary masses:<br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspNipple Discharge:<br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSystolic of 140 and above: <br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDiastolic of 90 and above: <br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspFamily History of CVA: <br>
          </div>
          <div class="col-md-2">
              <?php echo'<br>
                        '.$mh->ch_severe_chest_pain.' <br>
                        '.$mh->ch_easy_fatigability.' <br>
                        '.$mh->ch_axillary_masses.' <br>
                        '.$mh->ch_nipple_discharge.' <br>
                        '.$mh->ch_systolic140_and_above.' <br>
                        '.$mh->ch_diastolic90_and_above.' <br>
                        '.$mh->ch_family_history_of_CVA.' <br>
                        '; ?>
          </div>
          <div class="col-md-4">
            <h5>Heent</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEpilepssy/Convulsion: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSevere Headache/Dizziness: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspVisual Disturbance: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspYellowish Discoloration <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEnlarged Thyroid: <br>
          </div>
          <div class="col-md-2">
                      <?php echo'<br>
                        '.$mh->heent_epilepsy_convulsion.' <br>
                        '.$mh->heent_severe_headache_dizzines.' <br>
                        '.$mh->heent_visual_disturbance.' <br>
                        '.$mh->heent_yellowish_discoloration.' <br>
                        '.$mh->heent_enlarged_thyroid.' <br>
                        '; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"> 
            <h5>Extremities</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSevere varicosities: <br> 
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDeformities : <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSwelling or severe pain in the leg: <br>
          </div>
          <div class="col-md-2"> 
                    <?php echo'<br>
                        '.$mh->extremities_severe_varicositles.' <br>
                        '.$mh->extremities_deformities.' <br>
                        '.$mh->extremities_severe_pain_in_legs.' <br>
                        '; ?>
          </div>
          <div class="col-md-4"> 
            <h5>Skin</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspYellowish discoloration: <br>
          </div>
          <div class="col-md-2"> 
                      <?php echo'<br>
                        '.$mh->skin_yellowish_discoloration.' <br>
                        '; ?>
          </div>                              
        </div>       
        <div class="row">
          <div class="col-md-4">
            <h5>Obsetetrical History</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspFullterm <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPre-term: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspAbortion: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspLiving Children: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDate of Last Delivery: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspType of Last Delivery: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspAge of Gestation: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDate of confinement: <br>
          </div>
          <div class="col-md-2">
              <?php echo'<br>
                        '.$mh->oh_fullterm.' <br>
                        '.$mh->oh_preterm.' <br>
                        '.$mh->oh_abortion.' <br>
                        '.$mh->oh_living_children.' <br>
                        '.$mh->oh_last_delivery_date.' <br>
                        '.$mh->oh_last_delivery_type.' <br>
                        '.$mh->oh_age_of_gestation_weeks.' <br>
                        '.$mh->oh_expected_date_of_confinement.' <br>
                        '; ?>            
          </div>
          <div class="col-md-4">
            <h5>History of any of the following</h5>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSmoking: <br>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspAllergies: <br>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDrug Intake: <br>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDrug Abuse and Alcoholism: <br>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSTD, Multiple partners: <br>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspBleeding tendencies,anemia: <br>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDiabeties/Congenital anomalies: <br>
          </div>
          <div class="col-md-2">
                    <?php echo'<br>
                        '.$mh->history_smoking.' <br>
                        '.$mh->history_allergies.' <br>
                        '.$mh->history_drug_intake.' <br>
                        '.$mh->history_drug_abuse.' <br>
                        '.$mh->history_STD.' <br>
                        '.$mh->history_anemia.' <br>
                        '.$mh->history_diabetes.' <br>
                        '; ?>   
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h5>Obsetetrical History</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPrevious Cesarean Section: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp3Consecutive Miscarriages: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEctopic pregnancy/H.Mole: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPost Partnum hemorrhage: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspForcep Delivery: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPregnancy Induced Hypertension: <br>
          </div>
          <div class="col-md-2">
                      <?php echo'<br>
                        '.$mh->oh_previous_CS.' <br>
                        '.$mh->oh_3_consec_miscarriages.' <br>
                        '.$mh->oh_ectopic_pregnancy.' <br>
                        '.$mh->oh_post_partum_hemor.' <br>
                        '.$mh->oh_forcep_delivery.' <br>
                        '.$mh->oh_pregnancy_induced_hypertension.' <br>
                        '; ?>   
          </div>
          <div class="col-md-4">
            <h5>Abdomen</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspMass in the abdomen: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspHistory of Gallbladder <br> 
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspHistory of Liver Disease: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPrevious Surgical Operation: <br>
          </div>
          <div class="col-md-2">
                      <?php echo'<br>
                        '.$mh->abdomen_mass_in_abdomen.' <br>
                        '.$mh->abdomen_gallbladder_disease.' <br>
                        '.$mh->abdomen_liver_disease.' <br>
                        '.$mh->abdomen_previous_surgical_operation.' <br>
                        '; ?> 
          </div>
        </div>

  </div>
        <?php } ?>
</body>
</html> 

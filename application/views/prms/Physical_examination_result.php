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
              <li >
                <i class="fa fa-plus-square"></i> Case List
              </li>
                <li>
                  <i class="fa fa-plus-square"></i> Case Profile
                </li>
                <li class="active">
                 Physical Examination Result
                </li>
            </ol>
          </div>
      </div>
  <div class="container-fluid">
          <h1 class="page-header"> Physical Examination Result</h1>
        <?php foreach ($prenatal as $mh) 
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
              <?= $mh->date; ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h5></h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspBlood Type: <br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspBlood Pressure:<br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspHeight:<br>
             <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspWeight:<br>
          </div>
          <div class="col-md-2">
              <?php echo'<br>
                        '.$mh->blood_type.' <br>
                        '.$mh->blood_pressure.' <br>
                        '.$mh->height.' <br>
                        '.$mh->weight.' <br>
                        '; ?>
          </div>
          <div class="col-md-4">
            <h5>Conjunctiva</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPale: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspYellowish: <br>
          </div>
          <div class="col-md-2">
                      <?php echo'<br>
                        '.$mh->conjunctiva_pale.' <br>
                        '.$mh->conjunctiva_yellowish.' <br>
                        '; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"> 
            <h5>Neck</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEnlarged Thyroid: <br> 
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEnlarged Lymp Nodes : <br>
          </div>
          <div class="col-md-2"> 
                    <?php echo'<br>
                        '.$mh->neck_enlarged_thyroid.' <br>
                        '.$mh->neck_enlarged_lymph_nodes.' <br>
                        '; ?>
          </div>
          <div class="col-md-4"> 
            <h5>Thorax</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspAbnormal heart sounds/Cardiac rate: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspAbnormal breath sounds/Resperatory rate: <br>
          </div>
          <div class="col-md-2"> 
                      <?php echo'<br>
                        '.$mh->thorax_abnormal_cardiac_rate.' <br>
                        '.$mh->thorax_abnormal_respiratory_rate.' <br>
                        '; ?>
          </div>                              
        </div>       
        <div class="row">
          <div class="col-md-4">
            <h5>Breast</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspMass <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspNipple Discharged: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSkin-orange-peel or dimpling: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEnlarged axilary lymp nodes: <br>
          </div>
          <div class="col-md-2">
              <?php echo'<br>
                        '.$mh->breast_mass.' <br>
                        '.$mh->breast_nipple_discharge.' <br>
                        '.$mh->breast_dimpling.' <br>
                        '.$mh->breast_enlarged_axillary_lymph_nodes.' <br>
                        '; ?>            
          </div>
          <div class="col-md-4">
            <h5>Abdomen</h5>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspFundic Height: <br>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspFetal Movement: <br>
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspFetal Heart Tone: <br>
            
          </div>
          <div class="col-md-2">
                    <?php echo'<br><br>
                        '.$mh->abdomen_pe_fundic_height.' <br>
                        '.$mh->abdomen_pe_fetal_movement.' <br>
                        '.$mh->abdomen_pe_fetal_heart_tone.' <br>
                        '; ?>   
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h5>Leopold's Manuever</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp1. Presenting Part: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp2. Position of fetal back: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp3. Fetal parts in fundus: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbsp4. Status of the presenting part: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspUterine Activity: <br>
          </div>
          <div class="col-md-2">
                      <?php echo'<br><br>
                        '.$mh->lm_presenting_part.' <br>
                        '.$mh->lm_position_of_fetal_back.' <br>
                        '.$mh->lm_fetal_parts.' <br>
                        '.$mh->lm_presenting_part_status.' <br>
                        '.$mh->lm_uterine_activity.' <br>
                        '; ?>   
          </div>
          <div class="col-md-4">
            <h4>Pelvic Examination</h4>
            <h3>Perinuem:</h3>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspScars: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspWarts/Mass <br> 
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspLaceration: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspSevere Varicosities: <br>
          </div>
          <div class="col-md-2">
                      <?php echo'<br><br><br><br>
                        '.$mh->perineum_scars.' <br>
                        '.$mh->perineum_warts_or_mass.' <br>
                        '.$mh->perineum_laceration.' <br>
                        '.$mh->perineum_severe_varicosities.' <br>
                        '; ?> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h5>Vagina</h5>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspBartholin's cyst: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspWarts/Skene's gland discharged: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspCystocoele/Rectocoele: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPurulent discharged/bleeding: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspEroslon/Polyp/Foreign Body: <br>
          </div>
          <div class="col-md-2">
                      <?php echo'<br><br>
                        '.$mh->vagina_bartholins_cyst.' <br>
                        '.$mh->vagina_warts_gland_discharge.' <br>
                        '.$mh->vagina_cystocele_or_rectocoele.' <br>
                        '.$mh->vagina_purulant_discharge.' <br>
                        '.$mh->vagina_erosion_or_foreign_body.' <br>
                        '; ?>   
          </div>
            <h4>Internal Examination</h4>          
          <div class="col-md-4">
            <h3>Cervix</h3>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspConsistency: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspDilation: <br> 
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspPalpable Presenting Part: <br>
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp &nbspStatus of Bag of Water: <br>
          </div>
          <div class="col-md-2">
                      <?php echo'<br><br><br>
                        '.$mh->cervix_consistency.' <br>
                        '.$mh->cervix_dilatation.' <br>
                        '.$mh->cervix_palpable_presenting_part.' <br>
                        '.$mh->cervix_status_BagOfWater.' <br>
                        '; ?> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <h3>Impression</h3>

             <br>
              <div class="well well-sm"> 
                <?= $mh->impression; ?>
      
              </div>
          </div>
          <div class="col-md-6">
            <h3>Plans</h3>
            <br>
            <div class="well well-sm"> 
              <?= $mh->plans; ?>
            </div>
          </div>
        </div>

  </div>
        <?php } ?>
</body>
</html> 

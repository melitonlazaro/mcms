<?php
ob_clean();
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
$this->load->library('Pdf');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Print PDF');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE. '', PDF_HEADER_STRING, '', '');
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'1.png';
        $this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }
}
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 11);

// add a page
$pdf->AddPage('P', 'A4');

// create some HTML content
$title = <<<EOD
EOD;
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);  
$this->load->library('Pdf');

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE. '', PDF_HEADER_STRING, '', '');
// class MYPDF extends TCPDF {

//     //Page header
//     public function Header() {
//         // Logo
//         $image_file = K_PATH_IMAGES.'1.png';
//         $this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
//         // Set font
//         $this->SetFont('helvetica', 'B', 20);
//         // Title
//         $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
//     }
// }
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

$title = <<<EOD
EOD;
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);  
foreach($n_status as $status){
$table = '<table>';
$table .= '
<style>
	td {
		 padding: 10px;
		 align: justify;
	}
	table { 
    border-spacing: 5px;
    border-collapse: collapse;
}
</style>
<h2>Maternity Case Summary</h2>
			<tr>
				<td align="left">Maternity Case No.: '.$status->case_id.'</td>
				<td align="right">Status: '.$status->status.' </td>
			</tr>
			<tr>		
				<td align="left">Patient Name: '.$status->last_name.', '.$status->given_name.' '.$status->middle_initial.'.</td>
				<td align="right">Date Started: '.$status->date_registered.'</td>
			</tr>
			<tr>
				<td align="left">Address: '.$status->street_no.','.$status->brgy.','.$status->city.' </td>
				<td align="right">Date of Birth: '.$status->date_of_birth.'</td>
			</tr>
			<tr>
				<td align="left">Contact Number: '.$status->contact_num.'</td>
			</tr>
</table>

';
}
$table .= '</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);
foreach($n_pe1 as $pe1){
$table = '<table>';
$table .= '
<style>
	td {
		 padding: 10px;
		 align: justify;
	}
	table { 
    border-spacing: 5px;
    border-collapse: collapse;
    border: 1px solid black;
    th{
    	text-align: left;
    }
}
</style>
<h2 align="center">Growth Monitoring</h2>
<tr>
	<th> Date </th>
	<th> Height </th>
	<th> Weight </th>
</tr>
<tr>
	<td>'.$pe1->date.'</td>
	<td>'.$pe1->height.'</td>
	<td>'.$pe1->weight.'</td>
</tr>
</table>
';
}
$table .= '</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, '', true);
foreach($n_mh as $mh){
$table = '<table>';
$table .= '
<style>
	td {
		 padding: 10px;
		 align: justify;
	}
	table { 
    border-spacing: 5px;
    border-collapse: collapse;
}
</style>
<h2>Medical Result</h2>
			<tr>		
				<td></td>
				<td> </td>
			</tr>
			<tr>
				<h2 align="left"> Test Result </h2>
			</tr>
			<tr>
				<td align="left"><b> Heart/Chest </b></td>	
				<td align="left"><b> Heent </b></td>	
			</tr>
			<tr>
				<td align="left">Severe Chest Pain: '.$mh->ch_severe_chest_pain.'</td>
				<td align="left">Epilepssy/Convulsion: '.$mh->heent_epilepsy_convulsion.'</td>
			</tr>
			<tr>	
				<td align="left">Easy fatigability: '.$mh->ch_easy_fatigability.' </td>
				<td align="left">Severe Headache/Dizziness: '.$mh->heent_severe_headache_dizzines.'</td>
			</tr>
			<tr>	
				<td align="left">Axillary masses: '.$mh->ch_axillary_masses.' </td>
				<td align="left">Visual Disturbance: '.$mh->heent_visual_disturbance.'</td>
			</tr>
			<tr>
				<td align="left">Nipple Discharge:  '.$mh->ch_nipple_discharge.' </td>
				<td align="left">Yellowish Discoloration '.$mh->heent_yellowish_discoloration.'</td>
			</tr>
			<tr>
				<td align="left">Systolic of 140 and above: '.$mh->ch_systolic140_and_above.' </td>
				<td align="left">Enlarged Thyroid: '.$mh->heent_enlarged_thyroid.'</td>
			</tr>
			<tr>
				<td align="left">Diastolic of 90 and above: '.$mh->ch_diastolic90_and_above.'</td>
			</tr>
			<tr>
				<td align="left">Family History of CVA: '.$mh->ch_family_history_of_CVA.' </td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b> Extremeties </b></td>
				<td align="left"><b> Skin </b></td>
			</tr>
			<tr>
				<td align="left">Severe varicosities: '.$mh->extremities_severe_varicositles.'</td>
				<td align="left">Yellowish discoloration: '.$mh->skin_yellowish_discoloration.'</td>
			</tr>
			<tr>
				<td align="left">Deformities: '.$mh->extremities_deformities.' </td>
			</tr>
			<tr>
				<td align="left">Swelling or severe pain in the leg: '.$mh->extremities_severe_pain_in_legs.' </td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Obsetetrical History</b></td>
				<td align="left"><b>History of any of the following</b></td>
			</tr>
			<tr>
				<td align="left">Fullterm: '.$mh->oh_fullterm.'</td>
				<td align="left">Smoking: '.$mh->history_smoking.'</td>
			</tr>
			<tr>
				<td align="left">Pre-term: '.$mh->oh_preterm.'</td>
				<td align="left">Allergies: '.$mh->history_allergies.'</td>
			</tr>
			<tr>
				<td align="left">Abortion: '.$mh->oh_abortion.'</td>
				<td align="left">Drug Intake: '.$mh->history_drug_intake.'</td>
			</tr>
			<tr>
				<td align="left">Living Children: '.$oh_living_children.'</td>
				<td align="left">Drug Abuse and Alcoholism: '.$mh->history_drug_abuse.'</td>
			</tr>
			<tr>
				<td align="left">Date of Last Delivery: '.$mh->oh_last_delivery_date.'</td>
				<td align="left">STD, Multiple partners: '.$mh->history_STD.'</td>
			</tr>
			<tr>
				<td align="left">Type of Last Delivery: '.$mh->oh_last_delivery_type.'</td>
				<td align="left">Bleeding tendencies,anemia: '.$mh->history_anemia.'</td>
			</tr>
			<tr>
				<td align="left">Age of Gestation: '.$oh_age_of_gestation_weeks.'</td>
				<td align="left">Diabeties/Congenital anomalies:  '.$mh->history_diabetes.'</td>
			</tr>
			<tr>
				<td align="left">Date of confinement: '.$mh->oh_expected_date_of_confinement.'</td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Obsetetrical History</b></td>
				<td align="left"><b>Abdomen</b></td>
			</tr>
			<tr>
				<td align="left">Previous Cesarean Section: '.$mh->oh_previous_CS.'</td>
				<td align="left">Mass in the abdomen: '.$mh->abdomen_mass_in_abdomen.'</td>
			</tr>
			<tr>
				<td align="left">Consecutive Miscarriages:  '.$mh->oh_3_consec_miscarriages.'</td>
				<td align="left">History of Gallbladder: '.$mh->abdomen_gallbladder_disease.'</td>
			</tr>
			<tr>
				<td align="left">Ectopic pregnancy/H.Mole:  '.$mh->oh_ectopic_pregnancy.'</td>
				<td align="left">History of Liver Disease: '.$mh->abdomen_liver_disease.'</td>
			</tr>
			<tr>
				<td align="left">Post Partnum hemorrhage: '.$mh->oh_post_partum_hemor.'</td>
				<td align="left">Previous Surgical Operation: '.$mh->abdomen_previous_surgical_operation.'</td>
			</tr>
			<tr>
				<td align="left">Force Delivery: '.$mh->oh_forcep_delivery.'</td>

			</tr>
			<tr>
				<td align="left">Pregnancy Induced Hypertension: '.$mh->oh_pregnancy_induced_hypertension.'</td>
			</tr>
			
			</tr>
</table>
';
}
$table .= '</table>';

// output the HTML content
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);  
$table = '<table>';
$table .= '
<style>
table {
    border-collapse: collapse;
    width: 90%;
}

th, td {
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
<h2 align="center">Physical Examination Result</h2>
<table>
  <tr>
    <th>Checkup Name</th>
    <th>Result</th>
    <th>Date</th>
  </tr>
  <tr>
    <td>Blood type</td>
    <td>'.$n_pe->blood_type.'</td>
    <td>'.$n_pe->date.'</td>
  </tr>
  <tr>
    <td>Systolic</td>
    <td>'.$n_pe->systolic.'</td>
  </tr>
  <tr>
    <td>Dystolic</td>
    <td>'.$n_pe->diastolic.'</td>
  </tr>
  <tr>
    <td>Height</td>
    <td>'.$n_pe->height.'</td>
 </tr>
  <tr>
	<td>Weight</td>
	<td>'.$n_pe->weight.'</td>
 </tr>
   <tr>
	<td>Pale</td>
	<td>'.$n_pe->conjunctiva_pale.'</td>
 </tr>
   <tr>
	<td>Yellowish</td>
	<td>'.$n_pe->conjunctiva_yellowish.'</td>
 </tr>
   <tr>
	<td>Enlarged Thyroid</td>
	<td>'.$n_pe->neck_enlarged_thyroid.'</td>
 </tr>
   <tr>
	<td>Enlarged Lymp Nodes</td>
	<td>'.$n_pe->neck_enlarged_lymph_nodes.'</td>
 </tr>
   <tr>
	<td>Abnormal heart sounds/Cardiac rate</td>
	<td>'.$n_pe->thorax_abnormal_cardiac_rate.'</td>
 </tr>
 <tr>
	<td>Abnormal breath sounds/Respiratory</td>
	<td>'.$n_pe->thorax_abnormal_respiratory_rate.'</td>
 </tr>
 <tr>
	<td>Mass</td>
	<td>'.$n_pe->breast_mass.'</td>
 </tr>
<tr>
	<td>Nipple Discharged</td>
	<td>'.$n_pe->breast_nipple_discharge.'</td>
 </tr>
<tr>
	<td>Skin-orange-peel or dimpling</td>
	<td>'.$n_pe->breast_dimpling.'</td>
 </tr>
<tr>
	<td>Enlarged axillary lymp nodes</td>
	<td>'.$n_pe->breast_enlarged_axillary_lymph_nodes	.'</td>
 </tr>
<tr>
	<td>Fundic Height</td>
	<td>'.$n_pe->abdomen_pe_fundic_height.'</td>
 </tr>
<tr>
	<td>Fetal Movement</td>
	<td>'.$n_pe->abdomen_pe_fetal_movement.'</td>
 </tr>
<tr>
	<td>Fetal Heart Tone</td>
	<td>'.$n_pe->abdomen_pe_fetal_heart_tone.'</td>
 </tr>
<tr>
	<td>Presenting part</td>
	<td>'.$n_pe->lm_presenting_part.'</td>
 </tr>
<tr>
	<td>Position of the fetal back</td>
	<td>'.$n_pe->lm_position_of_fetal_back.'</td>
 </tr>
<tr>
	<td>Petal parts of fundus</td>
	<td>'.$n_pe->lm_fetal_parts.'</td>
 </tr>
  <tr>
	<td>Urine Test</td>
	<td>'.$n_pe->lm_uterine_activity.'</td>
 </tr>
  <tr>
	<td>Scars</td>
	<td>'.$n_pe->perineum_scars.'</td>
 </tr>
   <tr>
	<td>Warts/Mass</td>
	<td>'.$n_pe->perineum_warts_or_mass.'</td>
 </tr>
 <tr>
	<td>Laceration</td>
	<td>'.$n_pe->perineum_laceration.'</td>
 </tr>
<tr>
	<td>Severe Varicosities</td>
	<td>'.$n_pe->perineum_severe_varicosities.'</td>
 </tr>
 <tr>
	<td>Bartholins Cyst</td>
	<td>'.$n_pe->vagina_bartholins_cyst.'</td>
 </tr>
<tr>
	<td>Warts/Skenes gland discharged</td>
	<td>'.$n_pe->vagina_warts_gland_discharge.'</td>
 </tr>
<tr>
	<td>Cystocoele/Rectocoele</td>
	<td>'.$n_pe->vagina_cystocele_or_rectocoele.'</td>
 </tr>
<tr>
	<td>Purulent</td>
	<td>'.$n_pe->vagina_purulant_discharge.'</td>
 </tr>
<tr>
	<td>Eroslon/Polyp/Foreign Body</td>
	<td>'.$n_pe->vagina_erosion_or_foreign_body.'</td>
 </tr>
<tr>
	<td>Consistency</td>
	<td>'.$n_pe->cervix_consistency.'</td>
 </tr>
<tr>
	<td>Dilation</td>
	<td>'.$n_pe->cervix_dilatation.'</td>
 </tr>
<tr>
	<td>Palpable Presenting Part</td>
	<td>'.$n_pe->cervix_palpable_presenting_part.'</td>
 </tr>
<tr>
	<td>status of Bag Water</td>
	<td>'.$n_pe->cervix_status_BagOfWater.'</td>
 </tr>
<tr>
	<td>Impression</td>
	<td>'.$n_pe->impression.'</td>
 </tr>
<tr>
	<td>Plans</td>
	<td>'.$n_pe->plans.'</td>
 </tr>
';

$table .= '</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);  
foreach($n_pn as $pn){
$table = '<table>';
$table .= '
<style>
	td {
		 padding: 10px;
		 align: justify;
	}
	table { 
    border-spacing: 5px;
    border-collapse: collapse;
}
</style>
<h2>Postnatal Result</h3>
<tr>		
				<td></td>
				<td> </td>
			</tr>
			<tr>

				<td align="left">Patient Name: '.$pn->last_name.', '.$pn->given_name.' '.$pn->middle_initial.'.</td>
				<td align="left">Date: '.$pn->date.' </td>
			</tr>
			<tr>
				<td align="left">Infant Weight: '.$pn->infant_weight.'</td>
				<td align="left">Blood Pressure: '.$pn->blood_pressure.'</td>
			</tr>
			<tr>		
				<td align="left">Infant Height: '.$pn->infant_height.'</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="left">Impression: '.$pn->impression.'</td>
			</tr>
			<tr>
								<td align="left">Plans: '.$pn->plans.'</td>
			</tr>
';
}
$table .= '</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);  
foreach($n_infant as $in){
$table = '<table>';
$table .= '
<style>
	td {
		 padding: 10px;
		 align: justify;
	}
	table { 
    border-spacing: 5px;
    border-collapse: collapse;
}
</style>
<h2>Infant Information</h3>
<tr>		
				<td></td>
				<td> </td>
			</tr>
			<tr>
				<td align="left">Infant ID: '.$in->infant_id.'</td>
				<td align="left">Infant DOB: '.$in->infant_date_of_birth.' </td>
			</tr>
			<tr>
				<td align="left">Name of Infant`s Mother: '.$in->last_name.','.$in->given_name.','.$in->middle_initial.'</td>
				<td align="left">Time of Birth: '.$in->time_of_birth.'</td>
			</tr>
			<tr>		
				<td align="left">Infant Name: '.$in->infant_last_name.', '.$in->infant_first_name.' '.$in->infant_middle_initial.'</td>
				<td align="left">Gender: '.$in->gender.'</td>
			</tr>
			<tr>
				<td align="left">Weight: '.$in->weight.'</td>
				<td align="left">Gravida: '.$in->gravida.'</td>
			</tr>
			<tr>
				<td align="left">Length: '.$in->length.'</td>
				<td align="left">Para: '.$in->para.'</td>
			</tr>
			<tr>
				<td align="left">Head Circumference: '.$in->head_circumference.'</td>
				<td align="left">Newborn Screening: '.$in->newborn_screening.'</td>
			</tr>
			<tr>
				<td align="left">Chest Circumference: '.$in->chest_circumference.'</td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<p text-align="center">
			<b><i>
			I hereby certify that the above information given are true and correct as to the best of my knowledge. 
			</i></b>
			</p>
			<tr><td></td></tr>
			<p text-align="center">
			<b><i>
			_________________________________
			<br>
			SIGNATURE OVER PRINTED NAME 
			</i></b>
			</p>
</table>
';
}
$table .= '</table>';
// output the HTML content
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);
// $pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_end_clean();
$pdf->Output('example_006.pdf', 'I');

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

$pdf->writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='');
$pdf->writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true);

// create some HTML content
$title = <<<EOD
EOD;
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);  
foreach($get_mh as $dt){
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
<h3>Medical Result</h3>
<tr>
				<td align="left">Patient ID: '.$dt->Patient_ID.'</td>
				<td align="right">Checkup Date: '.$dt->Date.' </td>
			</tr>
			<tr>		
				<td align="left">Patient Name: '.$dt->last_name.', '.$dt->given_name.' '.$dt->middle_initial.'.</td>
				<td align="right">Contact Number: '.$dt->contact_num.'</td>
			</tr>
			<tr>
				<td>   </td>
			</tr>
			<tr>
				<h2 align="left"> Test Result </h2>
			</tr>
			<tr>
				<td align="left"><b> Heart/Chest </b></td>	
				<td align="left"><b> Heent </b></td>	
			</tr>
			<tr>
				<td align="left">Severe Chest Pain: '.$dt->ch_severe_chest_pain.'</td>
				<td align="left">Epilepssy/Convulsion: '.$dt->heent_epilepsy_convulsion.'</td>
			</tr>
			<tr>	
				<td align="left">Easy fatigability: '.$dt->ch_easy_fatigability.' </td>
				<td align="left">Severe Headache/Dizziness: '.$dt->heent_severe_headache_dizzines.'</td>
			</tr>
			<tr>	
				<td align="left">Axillary masses: '.$dt->ch_axillary_masses.' </td>
				<td align="left">Visual Disturbance: '.$dt->heent_visual_disturbance.'</td>
			</tr>
			<tr>
				<td align="left">Nipple Discharge:  '.$dt->ch_nipple_discharge.' </td>
				<td align="left">Yellowish Discoloration '.$dt->heent_yellowish_discoloration.'</td>
			</tr>
			<tr>
				<td align="left">Systolic of 140 and above: '.$dt->ch_systolic140_and_above.' </td>
				<td align="left">Enlarged Thyroid: '.$dt->heent_enlarged_thyroid.'</td>
			</tr>
			<tr>
				<td align="left">Diastolic of 90 and above: '.$dt->ch_diastolic90_and_above.'</td>
			</tr>
			<tr>
				<td align="left">Family History of CVA: '.$dt->ch_family_history_of_CVA.' </td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b> Extremeties </b></td>
				<td align="left"><b> Skin </b></td>
			</tr>
			<tr>
				<td align="left">Severe varicosities: '.$dt->extremities_severe_varicositles.'</td>
				<td align="left">Yellowish discoloration: '.$dt->skin_yellowish_discoloration.'</td>
			</tr>
			<tr>
				<td align="left">Deformities: '.$dt->extremities_deformities.' </td>
			</tr>
			<tr>
				<td align="left">Swelling or severe pain in the leg: '.$dt->extremities_severe_pain_in_legs.' </td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Obsetetrical History</b></td>
				<td align="left"><b>History of any of the following</b></td>
			</tr>
			<tr>
				<td align="left">Fullterm: '.$dt->oh_fullterm.'</td>
				<td align="left">Smoking: '.$dt->history_smoking.'</td>
			</tr>
			<tr>
				<td align="left">Pre-term: '.$dt->oh_preterm.'</td>
				<td align="left">Allergies: '.$dt->history_allergies.'</td>
			</tr>
			<tr>
				<td align="left">Abortion: '.$dt->oh_abortion.'</td>
				<td align="left">Drug Intake: '.$dt->history_drug_intake.'</td>
			</tr>
			<tr>
				<td align="left">Living Children: '.$oh_living_children.'</td>
				<td align="left">Drug Abuse and Alcoholism: '.$dt->history_drug_abuse.'</td>
			</tr>
			<tr>
				<td align="left">Date of Last Delivery: '.$dt->oh_last_delivery_date.'</td>
				<td align="left">STD, Multiple partners: '.$dt->history_STD.'</td>
			</tr>
			<tr>
				<td align="left">Type of Last Delivery: '.$dt->oh_last_delivery_type.'</td>
				<td align="left">Bleeding tendencies,anemia: '.$dt->history_anemia.'</td>
			</tr>
			<tr>
				<td align="left">Age of Gestation: '.$oh_age_of_gestation_weeks.'</td>
				<td align="left">Diabeties/Congenital anomalies:  '.$dt->history_diabetes.'</td>
			</tr>
			<tr>
				<td align="left">Date of confinement: '.$dt->oh_expected_date_of_confinement.'</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Obsetetrical History</b></td>
				<td align="left"><b>Abdomen</b></td>
			</tr>
			<tr>
				<td align="left">Previous Cesarean Section: '.$dt->oh_previous_CS.'</td>
				<td align="left">Mass in the abdomen: '.$dt->abdomen_mass_in_abdomen.'</td>
			</tr>
			<tr>
				<td align="left">Consecutive Miscarriages:  '.$dt->oh_3_consec_miscarriages.'</td>
				<td align="left">History of Gallbladder: '.$dt->abdomen_gallbladder_disease.'</td>
			</tr>
			<tr>
				<td align="left">Ectopic pregnancy/H.Mole:  '.$dt->oh_ectopic_pregnancy.'</td>
				<td align="left">History of Liver Disease: '.$dt->abdomen_liver_disease.'</td>
			</tr>
			<tr>
				<td align="left">Post Partnum hemorrhage: '.$dt->oh_post_partum_hemor.'</td>
				<td align="left">Previous Surgical Operation: '.$dt->abdomen_previous_surgical_operation.'</td>
			</tr>
			<tr>
				<td align="left">Force Delivery: '.$dt->oh_forcep_delivery.'</td>

			</tr>
			<tr>
				<td align="left">Pregnancy Induced Hypertension: '.$dt->oh_pregnancy_induced_hypertension.'</td>
				
				<td align="right">Checked by: _______________</td>
			
			</tr>
			
			</tr>
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

//============================================================+
// END OF FILE
//============================================================+

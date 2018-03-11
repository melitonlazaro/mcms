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
// set header and footer fonts
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
foreach($get_pe as $dt){
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
<h3>Physical Exam Result</h3>
<tr>
				<td align="left">Patient ID: '.$dt->Patient_ID.'</td>
				<td align="right">Checkup Date: '.$dt->date.' </td>
			</tr>
			<tr>		
				<td align="left">Patient Name: '.$dt->last_name.','.$dt->given_name.','.$dt->middle_initial.'</td>
				<td align="right">Contact Number: '.$dt->contact_num.'</td>
			</tr>
			<tr>
				<h3 align="left"> Test Result </h3>
			</tr>
			<tr>
				<td align="left">Blood type: '.$dt->blood_type.'</td>
				<td align="left"><b>Conjunctiva</b></td>
			</tr>
			<tr>	
				<td align="left">Systolic: '.$dt->systolic.' </td>
				<td align="left">Pale: '.$dt->conjunctiva_pale.'</td>
			</tr>
			<tr>	
				<td align="left">Diastolic: '.$dt->diastolic.' </td>
				<td align="left">Yellowish: '.$dt->conjunctiva_yellowish.'</td>
			</tr>
			<tr>
				<td align="left">Height:  '.$dt->height.' </td>
			</tr>
			<tr>
				<td align="left">Weight: '.$dt->weight.' </td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Neck</b></td>

				<td align="left"><b>Thorax</b></td>
			</tr>
			<tr>
				<td align="left">Enlarged Thyroid:  '.$dt->neck_enlarged_thyroid.' </td>
				<td align="left">Abnormal heart sounds/Cardiac rate:  '.$dt->thorax_abnormal_cardiac_rate.' </td>
			</tr>
			<tr>
				<td align="left">Enlarged Lymp Nodes :   '.$dt->neck_enlarged_lymph_nodes.' </td>
				<td align="left">Abnormal breath sounds/Resperatory rate:  '.$dt->thorax_abnormal_respiratory_rate.' </td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Breast</b></td>
				<td align="left"><b>Abdomen</b></td>
			</tr>
			<tr>
				<td align="left">Mass: '.$dt->breast_mass.' </td>
				<td align="left">Fundic Height: '.$dt->abdomen_pe_fundic_height.' </td>
			</tr>
			<tr>
				<td align="left">Nipple Discharged: '.$dt->breast_nipple_discharge.' </td>
				<td align="left">Fetal Movement: '.$dt->abdomen_pe_fetal_heart_tone.' </td>
			</tr>
			<tr>
				<td align="left">Skin-orange-peel or dimpling: '.$dt->breast_dimpling.' </td>			
				<td align="left">Fetal Heart Tone: '.$dt->abdomen_pe_fetal_movement.' </td>
			</tr>
			<tr>
				<td align="left">Enlarged axilary lymp nodes: '.$dt->breast_enlarged_axillary_lymph_nodes.'</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Leopolds Manuever</b></td>
				<td align="left"><b>Perinuem</b></td>
			</tr>
			<tr>
				<td align="left">1. Presenting Part: '.$dt->lm_presenting_part.'</td>
				<td align="left">Scars: '.$dt->perineum_scars.'</td>
			</tr>
			<tr>
				<td align="left">2. Position of the fetal back: '.$dt->lm_position_of_fetal_back.'</td>
				<td align="left">Warts/Mass: '.$dt->perineum_warts_or_mass.'</td>
			</tr>
			<tr>
				<td align="left">3. Fetal parts in fundus: '.$dt->lm_fetal_parts.'</td>
				<td align="left">Laceration: '.$dt->perineum_laceration.'</td>
			</tr>
			<tr>
				<td align="left">4. Status of the presenting part: '.$dt->lm_presenting_part_status.'</td>
				<td align="left">Severe Varicosities: '.$dt->perineum_severe_varicosities.'</td>
			</tr>
			<tr>
				<td align="left">Uterine activity: '.$dt->lm_uterine_activity.'</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Vagina</b></td>
				<td align="left"><b>Internal Examination</b></td>
			</tr>
			<tr>
				<td align="left">Bartholins Cyst: '.$dt->vagina_bartholins_cyst.'</td>
				<td align="left"><b>Cervix</b></td>
			</tr>
			<tr>
				<td align="left">Warts/Skenes gland discharged: '.$dt->vagina_warts_gland_discharge.'</td>
				<td align="left">Consistency: '.$dt->cervix_consistency.'</td>
			</tr>
			<tr>
				<td align="left">Cystocoele/Rectocoele:  '.$dt->vagina_cystocele_or_rectocoele.'</td>
				<td align="left">Dilation: '.$dt->cervix_dilatation.'</td>
			</tr>
			<tr>
				<td align="left">Purulent:  '.$dt->vagina_purulant_discharge.'</td>
				<td align="left">Palpable Presenting Part: '.$dt->cervix_palpable_presenting_part.'</td>
			</tr>
			<tr>
				<td align="left">Eroslon/Polyp/Foreign Body: '.$dt->vagina_erosion_or_foreign_body.'</td>
				<td align="left">Status of Bag Water: '.$dt->cervix_status_BagOfWater.'</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td align="left"><b>Impression: '.$dt->impression.'</b></td>
				<td align="left">Checked by: _______________</td>
			</tr>
			<tr>
				<td align="left"><b>Plans: '.$dt->plans.'</b></td>
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

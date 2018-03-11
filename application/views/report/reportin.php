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
foreach($get_in as $dt){
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
<h1>Infant Info</h1>
<tr>
	<td align="left">Infant Name: '.$dt->infant_last_name.', '.$dt->infant_first_name.' '.$dt->infant_middle_initial.'.</td>
	<td align="left">Date of Birth: '.$dt->infant_date_of_birth.' </td>
</tr>
<tr>
	<td align="left">Gender: '.$dt->gender.'</td>
	<td align="left">Time of Birth: '.$dt->time_of_birth.' </td>
</tr>
<tr>
	<td align="left">Gravida: '.$dt->gravida.'</td>
	<td align="left">Weight: '.$dt->weight.' </td>
</tr>
<tr>
	<td align="left">Para: '.$dt->para.'</td>
	<td align="left">Length: '.$dt->length.' </td>
</tr>
<tr>
	<td align="left">Head Circumference: '.$dt->head_circumference.'</td>
</tr>
<tr>
	<td align="left">Chest Circumference: '.$dt->chest_circumference.'</td>
</tr>
';
}
$table .= '</table>';
// output the HTML content
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);
foreach($get_co as $ex){
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
<h1>Consultations</h1>
<h3 align="left">Consultation Results</h3>
<tr>
	<td align="left">Weight:'.$ex->weight.'</td>
	<td align="left">Pulse Rate:'.$ex->pulse_rate.'</td>
</tr>	
<tr>
	<td align="left">Height:'.$ex->height.'</td>
	<td align="left">HeartRate:'.$ex->heart_rate.'</td>
</tr>
<tr>	
	<td align="left">Chief Complaint:'.$ex->chief_complaint.'</td>
	<td align="left">Remarks:'.$ex->remarks.'</td>
</tr>

<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr>
	<td align="left"> Checked by:</td>
</tr>
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

<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
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
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

// create new PDF document

$this->load->library('Pdf');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(Admin);
$pdf->SetAuthor('Admin');
$pdf->SetTitle('Patient List Report');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING);

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
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

$title = <<<EOD
<h3>Report</h3>
EOD;
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);
$table = '<table style="border:1px solid #000; padding:6px;">';
$table .= '<tr style="background-color:#ccc;">
				<th style="border:1px solid #000;">Patient ID</th>
				<th style="border:1px solid #000;">Patient Name</th>
				<th style="border:1px solid #000;">Occupation</th>
				<th style="border:1px solid #000;">Date of Birth</th>
				<th style="border:1px solid #000;">Contact Number</th>
				<th style="border:1px solid #000;">Address</th>
				<th style="border:1px solid #000;">Emergency Contact Person</th>
				<th style="border:1px solid #000;">Emergency Contact Number</th>
				<th style="border:1px solid #000;">Emergency Contact Address</th>
				<th style="border:1px solid #000;">Date Registered</th>
		  </tr>';
foreach($dt_re as $dt) {
$table .= 	
			'<tr>
					<td>'.$dt->patient_ID.'</td>
		            <td>'.$dt->last_name.','.$dt->given_name.','.$dt->middle_initial.'</td>
		            <td>'.$dt->occupation.'</td>
		            <td>'.$dt->date_of_birth.'</td>
		            <td>'.$dt->contact_num.'</td>
		            <td>'.$dt->street_no.','.$dt->brgy.','.$dt->city.'</td>
		            <td>'.$dt->emergency_contact_name.'</td>
		            <td>'.$dt->emergency_contact_num.'</td>
		            <td>'.$dt->emergency_contact_add.'</td>
		            <td>'.$dt->date_registered.'</td>
		  </tr>';
 }
$table .= '</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);
// set some text for example

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('report.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

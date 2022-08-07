<?php
ob_start();
require_once "../../fpdf/fpdf.php";
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image("../../Resource/subharti logo.jpg", 10, 5, 30, 30);

$pdf->SetFont('Arial', 'B', 15);
//         width, height, text, border, new line, align
$pdf->Cell(0, 5, "TRAINING AND PLACEMENT DEPARTMENT", 0, 1, "C");
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 5, "SWAMI VIVEKANAND SUBHARTI UNIVERSITY", 0, 1, "C");
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 3, "(Established under U.P. Govt. Act no. 29 of 2008 and approved under section 2(f) of UGC Act 1956)", 0, 1, "C");
$pdf->Cell(0, 3, "Ph. 0121-2439043, 2439052, +91 7302319995; Telfax: 0121-2439067", 0, 1, "C");
$pdf->Cell(0, 3, "Email: placement@subharti.org, Website: www.subharti.org", 0, 1, "C");

$pdf->Image("../../Resource/naac.png", 165, 5, 40, 28);
$pdf->SetLineWidth(1);
$pdf->Line(0, 35, $pdf->GetPageWidth(), 35);

$pdf->Ln(8);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, "Ref. No. SVSU/SPC/".date("Y"), 0, 0, "L");
date_default_timezone_set('Asia/Calcutta');
$pdf->Cell(0, 10, "Date: ".date("d-m-Y h:i:sa"), 0, 1, "R");

$pdf->Line(0, $pdf->GetPageHeight()-35, $pdf->GetPageWidth(), $pdf->GetPageHeight()-35);
$pdf->SetY($pdf->GetPageHeight()-31);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 5, "Subhartipuram, NH-58, Delhi-Haridwar, Meerut Bypass Rd, Meerut, Uttar Pradesh 250005", 0, 1, "C");
$pdf->Cell(0, 5, "Email: placement@subharti.org, Website: www.subharti.org", 0, 1, "C");

$pdf->output();
?>
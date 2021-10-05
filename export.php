<?php
require('libs/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'SILAHKAN MELAKUKAN PENGISIAN DATA SESUAI DENGAN DATA YANG SEBENARNYA');
$pdf->Output();

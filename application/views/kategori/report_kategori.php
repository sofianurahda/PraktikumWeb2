<?php
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 18);

// Adding header image and main title
$pdf->Image('assets/assets/img/cart.jpg', 30, 5, 27, 24);
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(0, 5, 'KOPERASI HARUM MANIS BERSATU', 0, 1, 'C');

// Adding website and contact information
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'Website: WWW.HARUMBERSATU.COM / E-Mail: admin@harumbersatu.com', 0, 1, 'C');
$pdf->Cell(25);
$pdf->Cell(0, 5, 'Banjarmasin Utara: Telp/Fax: 081349685149 / KOPERASI HARUM MANIS BERSATU', 0, 1, 'C');

// Adding lines after header
$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 197, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 197, 37);

// Adding title for the report
$pdf->SetFont('Times', 'B', 18);
$pdf->Cell(0, 10, 'LAPORAN DATA KATEGORI', 0, 1, 'C');
$pdf->Ln(10);

// Adding table headers
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'No', 1, 0, 'C');
$pdf->Cell(40, 7, 'ID', 1, 0, 'C');
$pdf->Cell(80, 7, 'Name', 1, 1, 'C');

// Fetching data and adding rows
$pdf->SetFont('Times', '', 9);
$i = 1;
$data = $this->db->get('kategori')->result_array();
foreach ($data as $d) {
    $pdf->Cell(10, 6, $i++, 1, 0, 'C');
    $pdf->Cell(40, 6, $d['id'], 1, 0, 'C');
    $pdf->Cell(80, 6, $d['name'], 1, 1, 'C');
}

// Output the PDF
$pdf->Output('I', 'report_kategori.pdf');
?>

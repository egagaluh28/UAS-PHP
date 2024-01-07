<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function header()
    {
        // Add your header content here
    }

    function footer()
    {
        // Add your footer content here
    }

    function chapterTitle($num, $label)
    {
        // Add chapter title content here
    }

    function chapterBody($body)
    {
        // Add chapter body content here
    }
}

$pdf = new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial', '', 12);

$pdf->Cell(0, 10, 'Biodata Diri', 0, 1, 'C');
$pdf->Ln(10); 

$pdf->Ln(10);
$pdf->Image('C:/xampp/htdocs/uas ega/img/avatar.jpg', 10, $pdf->GetY(), 40);
$pdf->Ln(50); 

$pdf->Cell(0, 10, 'Nama: Muhammad Galuh Gumelar ', 0, 1);
$pdf->Cell(0, 10, 'NIM: J0403221017', 0, 1);
$pdf->Cell(0, 10, 'Jenis Kelamin: Pria', 0, 1);
$pdf->Cell(0, 10, 'Tempat Lahir: Ciamis', 0, 1);
$pdf->Cell(0, 10, 'Tanggal Lahir: 28 April 2004', 0, 1);
$pdf->Cell(0, 10, 'Email: galuhmuhammad@apps.ipb.ac.id', 0, 1);
$pdf->Cell(0, 10, 'Telepon: 082123378718', 0, 1);
$pdf->Cell(0, 10, 'Program Studi: Teknologi Rekayasa Perangkat Lunak B1', 0, 1);



// Output PDF
$pdf->Output('J0403221017_Muhammad Galuh Gumelar_BiodataDiri.pdf', 'D');

?>
<?php
include('pdf/fpdf.php');
$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial','B','16');

$pdf -> Cell(190,7,'Program Studi teknik Informatika',0,1,'C');
$pdf -> SetFont('Arial','B','12');
$pdf -> Cell(190,7,'Daftar Mahasiswa Pemrograman Web Dinamis 2019',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf -> SetFillColor(225,100,100);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Nama User',1,0);
$pdf->Cell(50,6,'Email User',1,0);
$pdf->Cell(25,6,'Password',1,0);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$user = mysqli_query($konek, "select * from tbl_user");
while ($row = mysqli_fetch_array($user)){
$pdf->Cell(20,6,$row['nama_user'],1,0);
$pdf->Cell(50,6,$row['email_user'],1,0);
$pdf->Cell(25,6,$row['password_user'],1,0);

}


$pdf -> Output();
?>
<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($konek, "DELETE FROM tbl_pelanggan WHERE id='$id'");

header('location:index.php');
?>
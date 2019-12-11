<?php 
include 'koneksi.php';
$nama = $_POST['xnama'];
$alamat = $_POST['xalamat'];
$jk = $_POST['xjk'];
$ttl = $_POST['xttl'];

mysqli_query($konek, "UPDATE tbl_pelanggan SET nama='$nama', alamat='$alamat', tanggal_lahir='$ttl', jenis_kelamin='$jk'");

header('location:index.php');
?>
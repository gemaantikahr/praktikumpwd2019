<?php 

include 'koneksi.php';

echo $nama = $_POST['xnama'];
echo $alamat = $_POST['xalamat'];
echo $ttl = $_POST['xttl'];
echo $jk = $_POST['xjk'];

mysqli_query($konek, "INSERT INTO tbl_pelanggan VALUES('','$nama','$alamat','$ttl','$jk')");
header('location:index.php');


?>
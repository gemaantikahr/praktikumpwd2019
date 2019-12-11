<?php

//mengubah username dan password yang telah dimasukkan menjadi sebuah variabel dan meng-enkripsi password ke md5
include '../../pwd19/koneksi.php';
$email = $_POST['xusername'];
$password = $_POST['xpassword'];
$aslinya = $_POST['xa'];


$result = mysqli_query($konek, "SELECT *FROM tbl_user WHERE email_user='$email' AND password_user='$password'");
// get one value
$nama = mysqli_query($konek, "SELECT nama_user FROM tbl_user WHERE email_user='$email' AND password_user='$password'");
$valuenamanya = mysqli_fetch_object($nama);

$rowCheck  = mysqli_num_rows($result);
if($rowCheck > 0){
//mulai session dan register variabelnya
session_start();
$_SESSION["nama_user"] = $valuenamanya->nama_user;

echo ' <div class="container">
<div class="alert alert-success">
  <strong>Berhasil Login!</strong>
</div>
</div> ';
header('location:../../pwd19/login/v_loginok.php');
}
else {
    echo ' <div class="container">
<div class="alert alert-success">
  <strong>Login Gagal, perikan email dan password!</strong>
</div>
</div> ';
header('location:../../pwd19/login/formlogin.php');
//jika $rowCheck = 0, berarti username atau password salah, atau tidak terdaftar di database
}
// if(!$result){
//     echo mysqli_error($konek);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
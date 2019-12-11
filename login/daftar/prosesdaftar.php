<?php 

$email = $_POST['xusername'];
$password = $_POST['xpassword'];
$aslinya = $_POST['xa'];

include "../../koneksi.php";
if($_POST["xcaptcha"] == $aslinya){
    mysqli_query($konek,"INSERT INTO tbl_user(email_user, password_user) VALUES ('$email','$password')");
    header("location:../../login/formlogin.php");
}else{
    echo "chapta salah";
}


?>
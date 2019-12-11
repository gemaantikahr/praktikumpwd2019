<?php
//function start lagi
session_start();

//cek apakah session terdaftar
if (isset($_SESSION["nama_user"])){

//session terdaftar, saatnya logout
session_unset();
session_destroy();
header("Location:../../pwd19/login/formlogin.php");
}
else{
    
}
?>
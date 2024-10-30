<?php
session_start();

if(!isset($_SESSION)){
    header('location:../login.php');
}

if($_SESSION['role'] != "admin"){
    echo "anda tidak memiliki akses";
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>INI HALAMAN ADMIN</h1> 
</body>
</html>
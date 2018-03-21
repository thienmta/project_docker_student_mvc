<?php
    $host = 'thuctapphp.com';
    $user = 'root';
    $pass = '1';
    $database = 'thuctapPHP';
    $conn = mysqli_connect($host,$user,$pass,$database);
    if(!$conn){
        echo 'Khong the ket noi duoc den MySQL!';die;
    }
    include_once 'function.php';
?>
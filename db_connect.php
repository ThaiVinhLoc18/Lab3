<?php 
    $severName="localhost";
    $userName="root";
    $password="root";
    $db="bai4";
    $con = new mysqli($severName,$userName,$password,$db);
    if($con->connect_error){
        die("Connect error");
    }
?>
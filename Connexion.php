<?php 
   $dsn = "jdbc:mysql://172.16.220.2:3306/ArtsPluriel";
   $user='root';
   $pwd ='root';
   
    $connexion = new PDO($dsn,$user,$pwd);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
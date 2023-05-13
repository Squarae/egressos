<?php
    $host='localhost';
    $username='root';
    $password='root';
    $dbname = "dbegresso";
    
    $conn=mysqli_connect($host,$username,$password,$dbname);
    if(!$conn){
          die('Nao Foi Possivel Conectar:' .mysql_error());
    }
?> 

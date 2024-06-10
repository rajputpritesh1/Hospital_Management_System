<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hms_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with Database: ". mysqli_connect_error());
    }else{
        echo("Connection Successfull!!");
    }
?> 
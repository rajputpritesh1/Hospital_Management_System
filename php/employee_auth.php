<?php      
    include('connection.php');
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $msg = 'Incorrect Details!!';
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
    
    $sql = "select *from employee where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        header("Location: ./../employee dashboard/employee_dashboard.html");
    }  
    else{  
      echo $msg;
    }     
?> 
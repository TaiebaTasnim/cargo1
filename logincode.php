<?php
session_start();
include('database/dbcon.php');

if(isset($_POST['login_btn']))
 {
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $log_query="SELECT * FROM admin WHERE email='$email' AND password='$password' LIMIT 1";

    $log_query_run=mysqli_query($con,$log_query);

    if(mysqli_num_rows($log_query_run)>0)
    {
        foreach($log_query_run as $row)
        {
        $admin_id= $row['id'];
        $admin_email= $row['email'];
        }

    
    $_SESSION['auth']=true;
    $_SESSION['auth_user']=[
        'admin_id'=>$admin_id,
        'admin_email'=>$admin_email
    ];
    $_SESSION['status'] ="Logged in successfully!";
    
       header("Location:admin.php"); 
}
    else{
        $_SESSION['status'] ="Invalid email or password";
    
       header("Location:login.php"); 
        

    }
}
    else{
        $_SESSION['status'] ="Access denied";
    
       header("Location:login.php"); 
        
    }

    ?>
    
    

    
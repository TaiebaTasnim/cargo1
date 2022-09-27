<?php
session_start();
include('database/dbcon.php');

if(isset($_POST['add_admin']))
 {
    $name=$_POST['admin_name'];
    $email=$_POST['email'];
    $branch=$_POST['branch_name'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $admin_query="INSERT INTO admin (admin_name,email,branch_name,phone,password) VALUES ('$name','$email','$branch','$phone','$password')";

    $admin_query_run=mysqli_query($con,$admin_query);

    

    if($admin_query_run)
    {
        
        $_SESSION['status'] ="New admin added successfully!";
    
       header("Location:admin-member.php"); 
    }
    else{
        $_SESSION['status'] ="New admin added failed!";
        header("Location:admin-member.php"); 
        
    }
 }
 if(isset($_POST['deleteadminbtn'])){
    $admin_id=$_POST['deleteid'];
    $adminquery="DELETE FROM admin WHERE id=' $admin_id'";
    $adminquery_run=mysqli_query($con,$adminquery);

    if($adminquery_run)
    {
        
        $_SESSION['status'] =" admin deleted successfully!";
    
       header("Location:admin-member.php"); 
    }
    else{
        $_SESSION['status'] ="admin deleting failed!";
        header("Location:admin-member.php"); 
        
    }
     
 }
 

 
 
 ?>
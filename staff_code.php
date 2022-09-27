<?php
session_start();
include('database/dbcon.php');

if(isset($_POST['add_staff']))
 {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $branch=$_POST['branch'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $staff_query="INSERT INTO staffs (first_name,last_name,branch,email,password) VALUES ('$first_name','$last_name','$branch','$email','$password')";

    $staff_query_run=mysqli_query($con,$staff_query);
    
    

    if($staff_query_run)
    {
        
        $_SESSION['status'] ="New staff added successfully!";
    
       header("Location:branch-staff.php"); 
    }
    else{
        $_SESSION['status'] ="New staff added failed!";
        header("Location:branch-staff.php"); 
        
    }
 }
 if(isset($_POST['deletestaffbtn'])){
    $staff_id=$_POST['deleteid'];
    $staffquery="DELETE FROM staffs WHERE id=' $staff_id'";
    $staffquery_run=mysqli_query($con,$staffquery);

    if($staffquery_run)
    {
        
        $_SESSION['status'] =" Branch staff deleted successfully!";
    
       header("Location:branch-staff.php"); 
    }
    else{
        $_SESSION['status'] ="Branch staff deleting failed!";
        header("Location:branch-staff.php"); 
        
    }
     
 }
 

 
 
 ?>
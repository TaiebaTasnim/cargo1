<?php
session_start();
include('database/dbcon.php');
if(isset($_POST['logout_btn']))
{
unset($_SESSION['auth']);
unset($_SESSION['auth_user']);
$_SESSION['status'] ="Logged out successfully!";
    
       header("Location:login.php"); 
       exit(0);
}


if(isset($_POST['add_branch']))
 {
    $branch_name=$_POST['branch_name'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $contact=$_POST['contact'];

    $branch_query="INSERT INTO branches (branch_name,street,city,country,contact) VALUES ('$branch_name','$street','$city','$country','$contact')";

    $branch_query_run=mysqli_query($con,$branch_query);
    
    

    if($branch_query_run)
    {
        
        $_SESSION['status'] ="New branch added successfully!";
    
       header("Location:branch.php"); 
    }
    else{
        $_SESSION['status'] ="New branch added failed!";
        header("Location:branch.php"); 
        
    }
 }

 if(isset($_POST['deleteuserbtn'])){
    $userid=$_POST['delete_id'];
    $query="DELETE FROM branches WHERE id=' $userid'";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        
        $_SESSION['status'] =" Branch deleted successfully!";
    
       header("Location:branch.php"); 
    }
    else{
        $_SESSION['status'] ="Branch deleting failed!";
        header("Location:branch.php"); 
        
    }
     
 }
 

 
 
 ?>
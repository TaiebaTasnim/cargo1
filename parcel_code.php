<?php
session_start();
include('database/dbcon.php');

if(isset($_POST['add_item']))
 {
    $reference_number=$_POST['reference_number'];
    $sender_name=$_POST['sender_name'];
    $recipient_name=$_POST['recipient_name'];
    $delivery_branch=$_POST['delivery_branch'];
    $total_item=$_POST['total_item'];
    $status=$_POST['status'];
    $total_price=$_POST['total_price'];

    $parcel_query="INSERT INTO parcels (reference_number,sender_name,recipient_name,delivery_branch,total_item,status,total_price) VALUES ('$reference_number','$sender_name','$recipient_name',' $delivery_branch','$total_item','$status','$total_price')";

    $parcel_query_run=mysqli_query($con,$parcel_query);
    
    

    if($parcel_query_run)
    {
        
        $_SESSION['status'] ="New parcel added successfully!";
    
       header("Location:new_parcel.php"); 
    }
    else{
        $_SESSION['status'] ="New parcel added failed!";
        header("Location:new_parcel.php"); 
        
    }
 }
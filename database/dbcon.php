<?php

$host ="localhost";
$username ="root";
$password ="";
$database ="cargo_db";

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con)
{
    die(mysqli_connect_error());
}
 //else{
    //echo "Database Connected";
 //}
?>
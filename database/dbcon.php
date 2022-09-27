<?php

$host ="sql301.byethost5.com";
$username =	"b5_32677397";
$password ="1246t1246";
$database ="b5_32677397_cargo_db";

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con)
{
    die(mysqli_connect_error());
}
 //else{
    //echo "Database Connected";
 //}
?>
<?php

$host ="sql300.epizy.com";
$username =	"epiz_32676653";
$password ="7pKH1Q0vTnxxQ";
$database ="epiz_32676653_database";

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con)
{
    die(mysqli_connect_error());
}
 //else{
    //echo "Database Connected";
 //}
?>
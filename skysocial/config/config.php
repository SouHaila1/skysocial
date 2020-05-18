<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Africa/Casablanca");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect("localhost", "root", "", "skysocial"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
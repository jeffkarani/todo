<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "6470";

$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn){
	die("Connection failed" . mysqli_error());
 }
?>
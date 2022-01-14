<?php
session_start(); 


$servername = "localhost";
$username = "root";
$password = "";
$dbname ="brands";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); }
echo "Connected successfully";
$i =$_GET['i'];						//storing ordercount in counter
$id =$_GET['remove'];											

if ($i==1)
{
foreach($_SESSION["cartarray"] as $key => $value) 
{
	if (strcmp($id,$key)==0) 	
	{
		unset($_SESSION["cartarray"][$key]);
	}
}
header("location: view_cart.php");
print_r($_SESSION["cartarray"]);
}


?>
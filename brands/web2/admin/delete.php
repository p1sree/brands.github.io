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

$sid=$_GET['sid']; echo $sid;

$a=$_GET['a'];echo $a;
if($a==1)
{$sql = "DELETE FROM products  WHERE SN='$sid' "; } 
else 
if($a==2)
{$sql = "DELETE FROM brands WHERE SN='$sid' "; } 

	
if(mysqli_query($conn,$sql)){  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  


?>
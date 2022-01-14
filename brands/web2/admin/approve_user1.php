<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "brands";
$conn =  mysqli_connect($hostname, $username, $password , $dbname);


$sid=$_GET['sid']; echo $sid;

$a=$_GET['a'];echo $a;
if($a==1)
{$sql = "UPDATE login SET USTATUS='Approved' WHERE SN='$sid' "; } 
else 
if($a==2)
{$sql = "UPDATE login SET USTATUS='Rejected' WHERE SN='$sid' "; } 

	
if(mysqli_query($conn,$sql)){  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  

?>
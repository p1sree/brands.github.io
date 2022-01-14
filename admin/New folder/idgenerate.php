<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="restaurant_database";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);}
  
//echo "Connected successfully<br>";
$sql = "SELECT * FROM   order1234343_table";
 
$retval=mysqli_query($conn, $sql);  
 echo  mysqli_num_rows($retval);
if(mysqli_num_rows($retval) > 0)
	
	{   
	$i=1;$s='o';$j=90;
	while($row = mysqli_fetch_assoc($retval))
			{ 
			$s='o';
			$s =$s.$j.$i;echo $s;
			$_SESSION['orderid']=$s;
			$i++;$j++;
			$SN =$row['SN'];
			echo $row['SN'];
			$sql = "UPDATE order1234343_table SET Order_ID='$s' WHERE SN='$SN'"; 
			if ($conn->query($sql) == TRUE) {
  echo "New record created successfully<br>";} 
			}
			
	}
	


?>
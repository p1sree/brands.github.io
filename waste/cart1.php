<?php  session_start(); 


$servername = "localhost";
$username = "root";
$password = "";
$dbname ="restaurant_database";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); }
echo "Connected successfully";


$i =$_GET['i'];

 


$sql = "SELECT * FROM menu_table WHERE SN='$i'";
$retval = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($retval);
$M=$row['Menu_ID'];// echo $M;
$N=$row['DishName'];
$Pr=$row['DishPrice'];
$Ab=$row['AboutDish'];
$I =$row['DishImage'];
$Dc=$row['DishCategory'];
$Q =1;$Tp=$Pr;

$cartArray = array(
	$M=>array(
	'DishName'=>$N,
	'Menu_ID'=>$M,
	'AboutDish'=>$Ab,
	'DishPrice'=>$Pr,
	'Quantity'=>1,
	'DishCategory'=>$Dc,
	'DishImage'=>$I,
	'TotalPrice'=>$Tp
	)
);
/*$cartkeys = array_keys($_SESSION["cartarray1"]);
/print_r($cartkeys);echo "<br>";echo $M;echo "<br>";
if(in_array($M,$cartkeys))
{

echo ("PRODUCT IS ALREADY IN THE CART ...");
 	

}				
else 
{

echo ("PRODUCT IS ADDED IN THE CART ...");
 	

}*/
$_SESSION["cartarray1"] = array_merge($_SESSION["cartarray1"],$cartArray);

echo "<br>";

print_r($_SESSION["cartarray1"]);

echo "<br>";






?>





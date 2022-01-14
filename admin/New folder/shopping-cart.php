<?php  session_start(); 


$servername = "localhost";
$username = "root";
$password = "";
$dbname ="brands";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); }
echo "Connected successfully";


$i =$_GET['i'];


$sql = "SELECT * FROM products WHERE SN='$i'";
$retval = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($retval);
$i=$row['SN'];
		$pcode=$row['Product_Code'];
		$pname=$row['Product_Name'];
		$brands=$row['Brands'];
		$sp =$row['Selling_Price'];
		$offer=$row['Offer_Price'];
		$images=$row['Images'];
$Q =1;$Tp=$sp;

$cartArray = array(
	$pcode=>array(
	'Product_Code'=>$pcode,
	'Product_Name'=>$pname,
	'Brands'=>$brands,
	'Selling_Price'=>$sp,
	'Quantity'=>1,
	'Offer_Price'=>$offer,
	'Images'=>$images,
	'TotalPrice'=>$Tp
	)
);
$cartkeys = array_keys($_SESSION["cartarray"]);
print_r($cartkeys);echo "<br>";echo "<br>";
if(in_array($pcode,$cartkeys))
{

echo ("PRODUCT IS ALREADY IN THE CART ...");
 	

}				
else 
{

echo ("PRODUCT IS ADDED IN THE CART ...");
 	

}
$_SESSION["cartarray"] = array_merge($_SESSION["cartarray"],$cartArray);

echo "<br>";

print_r($_SESSION["cartarray"]);

echo "<br>";






?>





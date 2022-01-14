<?php session_start();  ?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
<style>
body{background-color:#B3B300;} 

th,td{
padding :20px;font:"Times New Roman", Times, serif;font-size:10px; text-align:center;} 
th{background-color:#0066FF; color:#FFFFFF;  }
</style>
<title>FORM</title>
</head>
<body>
<?php include ("navbar.php");?>
<div class="container-fluid"> 
<h1 class= "heading">Restaurant Form</h1>
	<div class = "form">
	<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
		<div class ="col-sm-2">
		<div class ="vertical_tabs">
				<ul class="nav nav-tabs nav-stacked" >
						<li class="active"><a href="menu1.php">Home</a></li>
						
						<li><a href="menu.php?i=Thai food">Thai Food</a></li>
						<li><a href="menu.php?i=Punjabi food">Punjabi</a></li>
						<li><a href="menu.php?i=Chinese food">Chinese Food</a></li>
						<li><a href="menu.php?i=North Indian food">NorthIndian</a></li>
						<li><a href="menu.php?i=South Indian food">SouthIndian</a></li>
						<li><a href="menu.php?i=Continental food">Continental</a></li>
						<li><a href="menu.php?i=Italian food">Italian</a></li>
						<li><a href="menu.php?i=Pizzas food">Pizzas</a></li>
						<li><a href="menu.php?i=Muglai food">Muglai</a></li>
				</ul>
		</div>
		</div>
		<div class="col-sm-2">
		
				<div class = "form">
	<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
					<div class = "table">
					<table  border="2" class ="table table-striped table-bordered">
					<tbody>
					<tr>
	 
	

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="restaurant_database";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); }
echo "Connected successfully";

$str =$_GET['i'];echo $str;//$n= stripos($str,'Thai'); echo $n;
$sql = "SELECT * FROM menu_table WHERE MenuName='$str'";



//echo $n;
$retval = mysqli_query($conn,$sql);
//if(	mysqli_num_rows>0)
{
	while ($row=mysqli_fetch_assoc($retval))
	{
	$i =$row['SN'];
		$N=$row['DishName'];
		$Pr=$row['DishPrice'];
		$Ab=$row['AboutDish'];
		$I =$row['DishImage'];
		$Dc=$row['DishCategory'];
		

?>

<td style="font-size:15px; text-transform: capitalize; "><b><u><?php echo $N;?></u></b></br><br>
				
<img src ="images/<?php echo $I;?>" style ="width:200px;height:150px;"><br><br><?php echo $Dc;?><br><br>
<p>-----------------------------</p>		
<p style="color:red;">Price :		<?php echo $Pr;?> </p>	
<div class="btn btn-default" style="border:1.5px dashed red; font-color:red;" >
	
<button style="font-color:red;" >	<a  href="cart1.php?i=<?php echo $i?>">Order Now</a>  </button><!---Add to Cart-->
</td>
<?php
}

  
$conn->close();
}


 ?>
 
	</tr></tbody>
	</table>
	
	</form>			
	</div></div>
	
	

</body>
<html>		


<?php

?>
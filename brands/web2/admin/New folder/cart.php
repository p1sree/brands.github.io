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



<!-- Trigger the modal with a button -->
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Cart
  </button>
<div class="dropdown-menu">
    
     

<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
	
<table  border="2"  class ="table table-striped table-bordered">
<thead>
<th>DishImage</th>	<th >Dish Name</th><th >Dish Price</th><th>Dish Category</th>
</thead>
<tbody>

<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname ="restaurant_database";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); }
echo "Connected successfully";
$I=null;$N=null;$Pr=0;$Dc=null;$I1=null;$N1=null;$Pr1=0;$Ic1=null;
foreach($_SESSION["cartarray1"] as $key => $value) 
{
	//echo $key;		
	foreach($value as $key1 => $value1) 	
	{
		if ($key1=='DishImage') {$I=$value1;	}
		if ($key1=='DishName') {$N=$value1;	}
		if ($key1=='DishPrice') {$Pr=$value1;		}
		if ($key1=='DishCategory') 			{$Dc=$value1;		}
	}
	?>
<tr>
<td><img src ="images/<?php echo $I;?>" style ="width:50px;height:50px;"><br><?php echo $I;?></td>
<td><?php echo $N;?></td><td><?php echo $Pr;?></td><td><?php echo $Dc;?></td>
</tr>
<?php
}
?>
</tbody>
</table>
<table  border="2"     class ="table table-striped table-bordered">
<thead><th>Item Image</th>	<th >Item Name</th><th >Item Price</th><th>Item Category</th>
</thead>
<tbody>


<?php
foreach($_SESSION["cartarray2"] as $key => $value) 
{
	//echo $key;		
	foreach($value as $key1 => $value1) 	
	{
		if ($key1=='ItemImage') {$I1=$value1;	}
		if ($key1=='ItemName') {$N1=$value1;	}
		if ($key1=='ItemPrice') {$Pr1=$value1;		}
		if ($key1=='ItemCategory') 			{$Ic1=$value1;		}
	}
	?>
<tr>
<td><img src ="images/<?php echo $I1;?>" style ="width:50px;height:50px;"><br><?php echo $I1;?></td>
<td><?php echo $N1;?></td><td><?php echo $Pr1;?></td><td><?php echo $Ic1;?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</form>

 </div><!------body--->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div><!-----footer---->
    </div>

  </div>
</div>
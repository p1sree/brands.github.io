<?php include "header.php" ?>
<?php session_start();   ?>
   <head>

<style>
body{background-color:#cccccc;}
table,th,td,thead,tbody{ font-family:"Courier New", Courier, monospace;}
table{width:900px;}
td{ padding:15px;font-size:15px;} 
th {background-color:#009966; font-size:15px; text-transform:uppercase;padding:15px;} 
</style>
<title>FORM</title>
</head> 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Specialties</h1>
            <p class="breadcrumbs">
			<span class="mr-2"><a href="index.html">User Dasboard <i class="ion-ios-arrow-forward"></i></a></span>			
			<span class="mr-2"><a href="index.html">Menu <i class="ion-ios-arrow-forward"></i></a></span>
			<span class="mr-2"><a href="index.html">Confectionery <i class="ion-ios-arrow-forward"></i></a></span>
			<span class="mr-2"><a href="index.html">View Cart <i class="ion-ios-arrow-forward"></i></a></span>
			</p>
			
          </div>
        </div>
      </div>
    </section>
<?php include "includes/navbar2.php" ?>

	<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id ="cw">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>View Cart</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
              <li class="breadcrumb-item"><a href="#">View Cart</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Cart</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <div class="card-body">

		
			<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
			
	
					<table  border="2" class ="table table-striped table-bordered">
<thead>	<th>Dish Image</th><th >Dish Name</th><th>Dish Category</th><th >Dish Price</th><th>Quantity</th><th>Total</th></thead>
<tbody>
		
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname ="restaurant_database";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); }
else echo "Connected successfully";
								
$j=1;
$Q=1; $T=1;	$M=null;												
$arr= array(0,0,0,0,0,0,0,0,0,0,0,1,1,1,1);
foreach($_SESSION["cartarray1"] as $key => $value) 
{
		
	foreach($value as $key1 => $value1) 	
	{
		
		if ($key1=='Quantity') {$Q=$value1;		//echo "Q=".$Q	; //echo $value1;
		}
		if ($key1=='TotalPrice') {$T=$value1;	//echo "T=".$T;	//echo $value1;
		}
	}													
//echo $key;
$serialno=$key;


$sql23 = "SELECT * FROM menu_table WHERE Menu_ID='$key'";
$retval = mysqli_query($conn,$sql23);

echo mysqli_num_rows($retval)."nof";
$row=mysqli_fetch_assoc($retval);




if ($key=='0')  {continue;}    
 

$i=$row['SN'];
$M=$row['Menu_ID'];
$N=$row['DishName'];
$Pr=$row['DishPrice'];
$Ab=$row['AboutDish'];
$I =$row['DishImage'];
$Dc=$row['DishCategory'];
//$Q=1;

?>


<tr>
<td style ="width:100px;height:100px"><img src ="images/<?php echo $I;?>" style ="width:50px;height:50px;"><br><?php echo $I;?></td>
<td><?php echo $N;?><br><a href ="remove.php?i=1&remove=<?php echo $M;?>">Remove</a></td>
<td><?php echo $Dc;?></td><td><?php echo $Pr;?></td>
<td><input type="number" name="quantity-<?php echo $M;?>" min="0" max="80"><br><br><?php echo $Q;?></td>
<td><?php echo $T;?></td>
</tr>



<?php
} 	



?>
	

</tbody>
		
</table>
	
					<table  border="2" class ="table table-striped table-bordered">
<thead>	<th>Item Image</th><th >Item Name</th><th>Item Category</th><th >Item Price</th><th>Quantity</th><th>Total</th></thead>
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
								//storing ordercount in counter
$j=1;
$Q=1; $T=1;													

foreach($_SESSION["cartarray2"] as $key => $value) 
{
	//echo $key;		
	foreach($value as $key1 => $value1) 	
	{
		
		if ($key1=='Quantity') {$Q=$value1;		echo "Q=".$Q	; echo $value1;}
		if ($key1=='TotalPrice') {$T=$value1;	echo "T=".$T;	echo $value1;	}
	}													
	
$serialno=$key;
$sql = "SELECT * FROM confectionery_table WHERE Item_ID='$serialno'";
$retval = mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($retval);
if(mysqli_num_rows($retval) > 0)
{  

$i=$row['SN'];
$It=$row['Item_ID'];
$N=$row['ItemName'];
$Pr=$row['ItemPrice'];
$Ab=$row['AboutItem'];
$I =$row['ItemImage'];
$Dc=$row['ItemCategory'];
//$Q=1;

?>


<tr>
<td style ="width:100px;height:100px"><img src ="images/<?php echo $I;?>" style ="width:50px;height:50px;"><br><?php echo $I;?></td>
<td><?php echo $N;?><br><a href ="remove.php?i=2&remove=<?php echo $It;?>">Remove</a></td>
<td><?php echo $Dc;?></td><td><?php echo $Pr;?></td>
<td><input type="number" name="quantity-<?php echo $It;?>" min="0" max="80"><br><br><?php echo $Q;?></td>
<td><?php echo $T;?></td>
</tr>



<?php
} 	

}

?>
	

</tbody>
		
</table>



<div class="btn" class ="col-sm-offset-8"><input type ="submit" class ="submit" name ="update" value ="UPDATE"></div><br><br>
<div class="btn" class ="col-sm-offset-8"><button><a href ="idgenerate1.php" >PLACEORDER	</a></button></div>
</form>	


				</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
			 </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.section -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "includes/cardfooter.php"; ?>
<?php include "../footer.php"; ?>
  </body>

</html>
			
<?php
if (isset($_POST['update'])) 
{
foreach($_POST as $k=>$v)
{
	$qid=str_replace('quantity-', '', $k);
	//echo "qid=".$qid." ";
	 $v = (int)$v;
	// echo $v;
	foreach($_SESSION["cartarray2"] as $key => $value) 
{echo "key=".$key." ";
	if (strcmp($qid,$key)==0) 
	{//echo "fvdvdfvdf";
		$sql = "SELECT * FROM confectionery_table WHERE Item_ID='$key'";
		$retval = mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($retval);
		//echo mysqli_num_rows($retval)."=numofroww";
		//if(mysqli_num_rows($retval)>0)
		{
		$It=$row['Item_ID'];// echo $M;
		$N=$row['ItemName'];
		$Pr=$row['ItemPrice'];
		$Ab=$row['AboutItem'];
		$I =$row['ItemImage'];
		$Dc=$row['ItemCategory'];
		$Tp=$v*$Pr;  //echo $Tp;
		$cartArray = array(
						$It=>array(
									'ItemName'=>$N,
									'Item_ID'=>$It,
									'AboutItem'=>$Ab,
									'ItemPrice'=>$Pr,
									'Quantity'=>$v,
									'ItemCategory'=>$Dc,
									'ItemImage'=>$I,
									'TotalPrice'=>$Tp
									)
							);
		$_SESSION["cartarray2"]=(array_replace($_SESSION["cartarray2"],$cartArray));
			
		
		}
	
	}
}//foreach
}//foreach
//isset
print_r($_SESSION["cartarray2"]);
}
?>
<?php
if (isset($_POST['update'])) 
{
foreach($_POST as $k=>$v)
{
	$qid=str_replace('quantity-', '', $k);
	echo "qid=".$qid." ";
	 $v = (int)$v;
	// echo $v;
	foreach($_SESSION["cartarray1"] as $key => $value) 
{echo "key=".$key." ";
	if (strcmp($qid,$key)==0) 
	{echo "fvdvdfvdf";
		$sql = "SELECT * FROM menu_table WHERE Menu_ID='$key'";
		$retval = mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($retval);
		echo mysqli_num_rows($retval)."=numofroww";
		//if(mysqli_num_rows($retval)>0)
		{
		$M=$row['Menu_ID'];// echo $M;
		$N=$row['DishName'];
		$Pr=$row['DishPrice'];
		$Ab=$row['AboutDish'];
		$I =$row['DishImage'];
		$Dc=$row['DishCategory'];
		$Tp=$v*$Pr;  echo $Tp;
		$cartArray = array(
						$M=>array(
									'DishName'=>$N,
									'Menu_ID'=>$M,
									'AboutDish'=>$Ab,
									'DishPrice'=>$Pr,
									'Quantity'=>$v,
									'DishCategory'=>$Dc,
									'DishImage'=>$I,
									'TotalPrice'=>$Tp
									)
							);
		$_SESSION["cartarray1"]=(array_replace($_SESSION["cartarray1"],$cartArray));
			
		
		}
	
	}
}//foreach
}//foreach
//isset
print_r($_SESSION["cartarray1"]);
}

?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
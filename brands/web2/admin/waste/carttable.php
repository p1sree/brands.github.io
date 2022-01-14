<?php session_start();  ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<style>
	.top-header-info,.container,.top-nav, .main-menu{
	background-color:grey;
	}
.active,.heading {
		background-color:lightgreen;
		color:Red;
		
	}
	</style>
<title>Hotel  A Hotel category Flat bootstrap Responsive  Website Template | Rooms :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins)  font-family: "Times New Roman", Times, serif;-  	.nav-tabs->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
</head>
<body>
<?php include 'navbar.php' ; ?>
<?php //include 'navbarcart.php' ; ?>
    <div class="banner">
   	  <div class="container_wrap">
   		<h1>What are you looking for?</h1>
   	       <div class="dropdown-buttons">   
            		  <div class="dropdown-button">           			
            			<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Dubai</option>	
						<option value="1">Australia</option>
						<option value="2">Sri Lanka</option>
						<option value="3"> New Zealand</option>
						<option value="4">Pakistan</option>
						<option value="5">United Kingdom</option>
						<option value="6">United states</option>
						<option value="7">Russia</option>
						<option value="8">Mirum</option>
					  </select>
					</div>
				     <div class="dropdown-button">
					  <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Hotels</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
					  </select>
					 </div>
				   </div>  
		    <form>
				<input type="text" value="Keyword, name, date, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}">
			    <div class="contact_btn">
	               <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
	            </div>
			</form>        		
   		    <div class="clearfix"> </div>
         </div>
    </div>
	 <div class="container-fluid">
	   
	    </div>
      <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">Recommended</a></li> 
					<li><a href="#">Latest</a></li> 
					<li><a href="#">Highlights</a></li> 
				</ul>
			</div>
		</div>
		<div class="col-md-4 content_dropdown1">
		   <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Dubai</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		     </div>
		     <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Show Map</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		       </div>
		</div>
		<div class="col-md-4 filter_grid">
			<ul class="filter">
				<li class="fil">Filter :</li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon2"> </i> </a></li>
				<li><a href=""> <i class="icon3"> </i> </a></li>
				<li><a href=""> <i class="icon4"> </i> </a></li>
				<li><a href=""> <i class="icon5"> </i> </a></li>
			</ul>
		</div>
   	</div>
   </div>
   <div class="living_middle">
   	  <div class="container-fluid">
	  <!------------------------------------------------------------------------------------------->
	  <form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
		<div class ="col-sm-2">
		<div class ="vertical_tabs">
				<ul class="nav nav-tabs nav-stacked" >
						<li class="active"><a href="menu1.php">Home</a></li>
						
						<li><a href="products1.php?i=cars">CARS</a></li>
						<li><a href="products1.php?i=watches">WATCHES</a></li>
						<li><a href="products1.php?i=bikes">BIKES</a></li>
						<li><a href="products1.php?i=shoes">SHOES</a></li>
						<li><a href="products1.php?i=dress">DRESS</a></li>
						
				</ul>
		</div>
		</div>			
	</form>
	
	  <!------------------------------------------------------------------------------------------->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="brands";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); }
echo "Connected successfully";

$str =$_GET['i'];echo $str;//$n= stripos($str,'Thai'); echo $n;





	
$sql = "SELECT * FROM products";


$retval = mysqli_query($conn,$sql);

//if(	mysqli_num_rows>0)

	while ($row=mysqli_fetch_assoc($retval))
	{
		$i =$row['SN'];
		$pcode=$row['Product_Code'];
		$pname=$row['Product_Name'];
		$brands=$row['Brands'];
		$sp =$row['Selling_Price'];
		$offer=$row['Offer_Price'];
		echo $pcode;echo "<br>";
		$pcode =substr($pcode,2); echo $pcode;				
		$pcode= (int) $pcode; echo "<br>";	echo $pcode;
		if(strcmp($str,"cars")==0)
		{
			if ($pcode>100) 
				{
				continue;
				}
		}
		if(strcmp($str,"watches")==0)
		{
			if (($pcode<100)&& ($pcode<200))
				{
				continue;
				}
		}
		if(strcmp($str,"bikes")==0)
		{
			if (($pcode<200)&& ($pcode<300))
				{
				continue;
				}
		}
		if(strcmp($str,"shoes")==0)
		{
			if (($pcode<300)&& ($pcode<400))
				{
				continue;
				}
		}
		if(strcmp($str,"dress")==0)
		{
			if (($pcode<400)&& ($pcode<500))
				{
				continue;
				}
		}
		$images=$row['Images'];
		echo $images;

?>

   	  		<h2 class="title block-title">Luxury Rooms</h2>
   	    <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
   	     	<div class="living_box"><a href="#">
			    <img src="imagess/<?php echo $images;?>" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">PRODUCTS</span>
			    </span>
				</a>
				<div class="living_desc">
				<h3><a href="#">aliquam volutp</a></h3>
				<p>Lorem ipsum consectetuer adipiscing </p>
				<a href="single.html" class="btn3">PRICE</a>
				<p class="price">$<?php echo $sp; ?></p>
				</div>
			    <table border="1" class="propertyDetails">
                <tbody><tr>
                   <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                   <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                   <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                    </tr>
                </tbody></table>
				<button style="background-color:orange; border-color:white;" >	<a  href="shopping-cart.php?i=<?php echo $i?>" style="color:white;">Add to Cart</a>  </button>
				<button style="background-color:orange;border-color:white;" >	<a  href="#" style="color:white;">Remove	</a>  </button>
			</div>
   	     </div>
	<?php 
	} 



	?>
   	    
		 <!------------------------------------------------------------->
   	    </div>
   </div>
   <div class="card-body">

		
			<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
			
	
					<table  border="2" class ="table table-striped table-bordered">
<thead>	<th>Product_Code</th>	<th >Product_ Name</th><th >Brands</th><th>Selling Price</th><th>Offer Price</th><th>Images</th></thead>
<tbody>
		
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname ="brands";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); }
else echo "Connected successfully";
								
$j=1;
$Q=1; $T=1;	$M=null;												
$arr= array(0,0,0,0,0,0,0,0,0,0,0,1,1,1,1);
foreach($_SESSION["cartarray"] as $key => $value) 
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


$sql23 = "SELECT * FROM products WHERE Menu_ID='$key'";
$retval = mysqli_query($conn,$sql23);

echo mysqli_num_rows($retval);
$row=mysqli_fetch_assoc($retval);




if ($key=='0')  {continue;}    
 

$i=$row['SN'];
$pcode=$row['Product_Code'];
		$pname=$row['Product_Name'];
		$brands=$row['Brands'];
		$sp =$row['Selling_Price'];
		$offer=$row['Offer_Price'];
		$images=$row['Images'];
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
$dbname ="brands";
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
$pcode=$row['Product_Code'];
		$pname=$row['Product_Name'];
		$brands=$row['Brands'];
		$sp =$row['Selling_Price'];
		$offer=$row['Offer_Price'];
		$images=$row['Images'];
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

   <div class="living_bottom">
   	  <div class="container">
   	  	<h2 class="title block-title">Latest Posts</h2>
   	  	<div class="col-md-6 post_left wow fadeInLeft" data-wow-delay="0.4s">
   	  		<div class="mask1"><img src="images/pic4.jpg" alt="image" class="img-responsive zoom-img" /></div>
   	  	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single.html">More</a></p>
   	  	    <div class="divider"></div>
   	  	    <p class="field-content">30 Sep 2015</span></p>
   	  	</div>
   	  	<div class="col-md-6 post_left wow fadeInRight" data-wow-delay="0.4s">
   	  		<div class="mask1"><img src="images/pic5.jpg" alt="image" class="img-responsive zoom-img" /></div>
   	  	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single.html">More</a></p>
   	  	    <div class="divider"></div>
   	  	    <p class="field-content">30 Sep 2015</span></p>
   	  	</div>
   	  </div>
   </div>
   
	<?php include 'footer.php' ; ?>
      
</body>
</html>		
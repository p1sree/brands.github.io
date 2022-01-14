 
 
<?php  session_start(); 

$_SESSION["cartarray"] = array ();



?>

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
<div class="header">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    		<li><a href="index.php">Home</a></li>
						    	<li><a href="rooms.php">Rooms</a></li>
						    	<li><a href="news.php">News</a></li>
						    	<li class="active"><a href="gallery.php">Gallery</a></li>
						    	<li><a href="rooms.php">Blog</a></li>
								<div class="clearfix"> </div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"> </div>
	    	    </div>
			</div>
	            <div class="col-sm-4 header_center">
	    		      <div id="loginContainer"><a href="#" id="loginButton"><img src="images/login.png"><span>Sign</span></a>
						    <div id="loginBox"> 
										 <form id="loginForm" name="myform" method="post" onsubmit="return validate()">
						        
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Name</label>
						                          <input type="text" name="name" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="text" name="password" id="password">
						                     </fieldset>
											  
						                    <fieldset>
						                            <label for="password">Confirm Password</label>
						                            <input type="text" name="cpassword" id="cpassword">
						                     </fieldset>
						                    <input type="submit" name= "submit"  id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						                 <span><a href="#">Forgot your password?</a></span>
							      </form>
				              </div>
			             </div>
		                 <div class="clearfix"> </div>
	                 </div>
					 
	                <div class="clearfix"> </div>
					
    </div>
          		
   		    <div class="clearfix"> </div>
         </div>
    </div>
      
   <div class="living_middle">
   	  <div class="container-fluid">
	  <!------------------------------------------------------------------------------------------->
	  <form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
		<div class ="col-sm-2">
		<div class ="vertical_tabs">
				<ul class="nav nav-tabs nav-stacked" >
						
						
						
				</ul>
		</div>
		</div>			
	</form>
	  <!------------------------------------------------------------------------------------------->
  
   	    
		 <!------------------------------------------------------------->
   	    </div>
   </div>
   <div class="living_bottom">
   	  <div class="container">
   	  	
   	  </div>
   </div>
   <div class="footer">
   	<div class="container">
   	 <div class="footer_top">
   	   <h3>Subscribe to our newsletter</h3>
   	   <form>
		<span>
			<i><img src="images/mail.png" alt=""></i>
		    <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
		    <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Subscribe"> </label>
		    <div class="clearfix"> </div>
		</span>			 	    
	   </form>
	  </div>
	  <div class="footer_grids">
	     <div class="footer-grid">
			<h4>Ipsum Quis</h4>
			<ul class="list1">
				
			</ul>
		  </div>
		  <div class="footer-grid">
			<h4>Quis Ipsum</h4>
			<ul class="list1">
				
			</ul>
		  </div>
		  <div class="footer-grid last_grid">
			<h4>Follow Us</h4>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		 	<div class="copy wow fadeInRight" data-wow-delay="0.4s">
              <p> &copy; 2016 Hotel Deluxe. All rights reserved | Design <a href="http://w3layouts.com/">W3layouts</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
      </div>
   </div>
</body>
</html>		
<?php
if (isset($_POST['submit']))
 {
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="brands";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$N=$_POST["name"];
$P=$_POST["password"];
$Cp=$_POST["cpassword"];


$sql = "INSERT INTO login(UNAME,UPASSWORD) Values ( '$N','$P')";

  
if ($conn->query($sql) == TRUE) {
	echo "<script type='text/javascript'>document.location.href='user_login.php';</script>"; 
  echo "New record created successfully";} 
  else {  echo "Error: " . $sql . "<br>" . $conn->error;}
  
$conn->close();
 }
 
 ?>
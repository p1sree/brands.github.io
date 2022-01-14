<?php session_start();   ?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
<style>
body{background-color:#B3B300;} 
#cw{
background-color:#CCCCCC;}
</style>
<title>FORM</title>
</head>
<body>

<script>
function validate()
{
var iname1 =document.myform.iname.value;
var iprice1 =document.myform.iprice.value;
var aboutitem1 =document.myform.aboutitem.value;
var icategory1 =document.myform.icategory.value;
 
 
if(iname1 ==''||iname1==null)
{   alert("Item Name cant be left blank.");  return false; }

else if(iprice1==''|| iprice1== null)
{alert ("Item Price cant be left blank"); return false;}
 
else if (aboutitem1 ==''|| aboutitem1==null)
{alert ("About Item cant be left blank"); return false;}

else if (icategory1 ==''|| icategory1==null)
{alert ("Item Category cant be left blank"); return false;}



}


</script> 

<?php include "headbar.php";?>
<?php include "sidebar.php";?>


<div class="wrapper">
    
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="cw">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Confectionery Form</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
              <li class="breadcrumb-item"><a href="#">Confectionery Form</a></li>
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
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Confectionery Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
                <div class="card-body">
	<div class = "form">
	<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
			
		<div class ="col-sm-6">	
			<div class="form-group">				
			<label class="control-label col-sm-4">Item ID</label>
			<div class="col-sm-8">
			<input type ="text" class="form-control" id ="iid" name ="iid" placeholder ="Enter item id..." disabled="disabled"/><br/>
			</div>
			</div>
			
			<div class="form-group">			
			<label class="control-label col-sm-4">Item Name</label> 
			<div class="col-sm-8">
			<input type ="text" class="form-control" id ="iname" name ="iname" placeholder ="Enter Item name..."/><br/>
			</div>
			</div>
						
			<div class="form-group">
			<label class="control-label col-sm-4">About Item</label>
			<div class="col-sm-8">
			<textarea name="aboutitem" class="form-control"  id = "aboutitem" placeholder ="Enter about item..."></textarea><br />	
			</div>
			</div>
						
			
			<div class="form-group">
			<label class="control-label col-sm-4">Item Price </label> 
			<div class="col-sm-8">
			<input type="number" name="iprice" class="form-control"  id = "iprice" placeholder ="Enter item price ..."/><br />	
			</div>
			</div>
			
			<div class="form-group">
			<label class="control-label col-sm-4">Select Category</label>
			<label class="control-label col-sm-2">Snacks</label>
			<div class="col-sm-2">
			<input type="radio" name="icategory"   id="icategory" value="Snacks"/><br />	
			</div>
			<label class="col-sm-offset-0 col-sm-2">Sweets</label>
			<div class="col-sm-2">
			<input type="radio" name="icategory"  id="icategory" value="Sweets"/><br />			
			</div>		
			</div>
			
					
			<div class="form-group">		
			<label class="control-label col-sm-4">Item Image</label> 
			<div class="col-sm-8">
			<input type="file" name="FTU" class="form-control"  value = 'FTU'/><br />	
			</div>
			</div>
			<br/>
							
			<div class ="col-sm-offset-2 col-sm-10">
			<div class="btn btn-primary btn-block">
			<input type ="submit" class ="submit" name ="submit" value ="SUBMIT">
			</div>
			</div>
		</div>
	</form>			
 </div>            <!-- /.card body-->
			  
			</div>  <!-- /.card primary-->
			</div><!--col--> 

			</div> <!---row-->
			
			</div> <!--container--fluid--->
		</section>
		</div>			 <!-- /.content wrapper-->
		</div><!-- / wrapper-->	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="restaurant_database";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if (isset($_POST['submit'])) 
{
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	
			$OK=1;
			$target_path = "C:\xampp\htdocs\b";  
			$target_file = $target_path.basename( $_FILES['FTU']['name']);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
			$imagename	=$_FILES['FTU']['name'];
			$tempname 	=$_FILES['FTU']['tmp_name'];
	
			if ($_FILES['FTU']['size'] > 500000) 
					{	
						echo "Sorry, your file is too large.";
						$OK = 0;
					}
									// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
					{
						echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$OK = 0;
					}
			if($OK==1)
					{
					$image =$imagename;
					move_uploaded_file ($tempname, "$imagename");
					?>

<img src =<?php echo $image;?>  style=" max-width: 300px;height:300px;"  >
<?php
			
//$Id=$_POST["id"];
$N=$_POST["iname"];
$P=$_POST["iprice"];
$Ab=$_POST["aboutitem"];
$Im=$image;
$Ic=$_POST["icategory"];
 //$_SESSION["N1"]=$N;


$sql = "INSERT INTO confectionery_table(ItemName,ItemPrice,AboutItem,ItemImage,ItemCategory) Values ( '$N','$P','$Ab','$Im','$Ic')";

if ($conn->query($sql) == TRUE) {
  echo "New record created successfully<br>";} 
  else {  echo "Error: " . $sql . "<br>" . $conn->error;}
  
$conn->close();
}}}									
 ?>
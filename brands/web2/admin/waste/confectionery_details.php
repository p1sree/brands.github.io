<?php session_start();   ?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<style>
#cw{
background-color:#CCCCCC;}
body{background-color:#cccccc;}
table,th,td,thead,tbody{ font-size:10px;font-family:"Courier New", Courier, monospace;}
table{width:900px;}
td{ padding:15px;} 
th {background-color:#009966;
font-size:15px;
text-transform:uppercase;padding:15px;}
</style>
<title>FORM</title>
</head>
<body>
<?php include "headbar.php"; ?>
    <?php include "sidebar.php"; ?>
	
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="cw">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Portal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
              <li class="breadcrumb-item"><a href="#">Confectionery Details</a></li>
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
                <h3 class="card-title">CONFECTIONERY DETAILS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
				<table  border="2" class = "table table-striped table-bordered">
	<thead>
	<th>Confectionery Id</th><th >Confectionery Name</th><th>About Confectionery</th><th >Confectionery Price</th><th>Confectionery Image</th>
	<th>Confectionery Category</th>	</thead>
	 
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

$sql = "SELECT * FROM confectionery_table";
$retval = mysqli_query($conn,$sql);


	
//if(	mysqli_num_rows>0)
{
	while ($row=mysqli_fetch_assoc($retval))
	{
		$I=$row['Item_ID'];
		$N=$row['ItemName'];
		$Ab=$row['AboutItem'];
		$Pr=$row['ItemPrice'];
		$Im =$row['ItemImage'];
		$C=$row['ItemCategory'];
		

?>


<tr><td><?php echo $I;?></td><td><b><?php echo $N;?></b></td><td><?php echo $Ab;?></td><td><b><?php echo $Pr;?></b></td>
<td><img src ="images/<?php echo $Im;?>" style ="width:50px;height:50px;"><br><?php echo $Im;?></td>
<td><b><?php echo $C;?></b></td>
			</tr>
	<?php
	}


}

$conn->close();
 ?>
 
 </tbody>
 </table>
 </div><!----table-->
 </div><!----form-->
 </div><!---container-->
 </body>
 </html>
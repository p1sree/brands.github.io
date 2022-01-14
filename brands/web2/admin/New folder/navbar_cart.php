<!-- Button to Open the Modal -->

<div class="dropdown">

  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Cart  </button>
<div class="dropdown-menu">
    
     

<form  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
	
<table  border="2"  class ="table table-striped table-bordered">
<thead>
<th>Product_Code</th>	<th >Product_ Name</th><th >Brands</th><th>Selling Price</th><th>Offer Price</th><th>Images</th>
</thead>
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
$I=null;$N=null;$Pr=0;$Dc=null;$I1=null;$N1=null;$Pr1=0;$Ic1=null;
foreach($_SESSION["cartarray"] as $key => $value) 
{
	//echo $key;		
	foreach($value as $key1 => $value1) 	
	{
			if ($key1=='Product_Code') {$PC=$value1;	}
		if ($key1=='Brands') {$B=$value1;	}
		if ($key1=='Product_Name') {$PN=$value1;	}
		if ($key1=='Selling_price') {$SP=$value1;		}
		if ($key1=='Offer_price') 			{$OP=$value1;		}
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

</form>

 

  </div>
</div>		
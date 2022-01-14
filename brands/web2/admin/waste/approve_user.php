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
body,table{background-color:#fec107;
font-family:Geneva, Arial, Helvetica, sans-serif;
font-size:10px;text-align:center;
text-transform:uppercase;
width:1500px;}
td  {background-color:#fec107;}
</style>
<title>VIEW USER DETAILS</title>
</head>
<body>
 
<?php include "headbar1.php";?>
<?php include "sidebar.php";?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="cw">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VIEW USER DETAILS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Approve User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">VIEW USER DETAILS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <table id="example2" class="table table-striped table-hovered">
                  <thead>
                  <tr>
				  
					<th>User SN</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Password</th>
                    <th>User Email</th>
                    <th>User Location</th>
                    <th>User Contact Number</th>					
                    <th>User Status</th>
					<th>User Status--APPROVE/REJECT</th>
					<th>User Store Status--APPROVE/REJECT</th>
                  </tr>
                  </thead>
                  <tbody>



					</tbody>
                </table>
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
  </body>

</html>
<?php session_start();  ?>
<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>

<script>
function validate()
{
var name1 =document.myform.name.value;
var password1 =document.myform.password.value;
var rpassword1 =document.myform.rpassword.value;

if(name1==''||name1== null)
{alert ("name cant be left blank"); return false;}
else if (password1 ==''||password1==null)
{alert ("password cant be left blank"); return false;}
else if(password1.length<6)
{alert ("password must be 6 digits"); return false;}

else if(password1!=rpassword1){ alert("password must be same!"); return false;  }
}

</script> 
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign Up to start your session</p>

    <form  name="myform" method="post" onsubmit="return validate()">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name ="name" placeholder="Name">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name ="password"  placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" name ="rpassword"  placeholder="Retype Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div><br><br>
        <!-- /.col -->
        <div class="col-xs-4">
        <center>  <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></center>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="user_login_signup.php" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
<html>

<?php
if (isset($_POST['submit']))
 {
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="restaurant_database";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$N=$_POST["name"];
$P=$_POST["password"];
$Rp=$_POST["rpassword"];


$sql = "INSERT INTO user_table(U_Name,U_Password) Values ( '$N','$P')";

  
if ($conn->query($sql) == TRUE) {
	echo "<script type='text/javascript'>document.location.href='user_login.php';</script>"; 
  echo "New record created successfully";} 
  else {  echo "Error: " . $sql . "<br>" . $conn->error;}
  
$conn->close();
 }
 
 ?>
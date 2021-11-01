<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="home.php";//
$_SESSION['alogin']=$_POST['email'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid email or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Darzi.pk | Admin login</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
				  Darzi.pk | Tailor 
			  	</a>
				  <a href="" style="margin-left:19%">
                    <img src="images/logo.jpg" style="width:150px;height:150px; margin-left: 8em;" alt="">
                </a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<!-- <ul class="nav pull-right">

						<li><a href="http://localhost/s4/">
						Back to Portal
						
						</a></li>

						

						
					</ul> -->
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="post">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
						<div class="module-body">
						<div class="control-group">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">Email</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="email" id="inputEmail" name="email" placeholder="Enter your Email" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">Password</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="password" id="inputPassword" name="password" placeholder="Enter your Password" required>
                                </div>
                            </div>
						</div>
						<div class="module-foot">
						<div class="control-group">
                                <div class="controls row-fluid">
								<button type="submit" class="btn btn-primary pull-right" name="submit">Login</button>
                                </div>
                            </div>
							<div class="control-group">
								<div class="controls clearfix">
								
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

		<b class="copyright">&copy; 2021 Darzi.pk   </b> 
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
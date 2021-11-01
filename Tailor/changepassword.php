<?php
session_start();
include('config.php');
if(strlen($_SESSION['tlogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Karachi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
$tid = $_SESSION['id'];
$ret1=mysqli_query($con,"select * from tailor where id='$tid'");
$row1=mysqli_fetch_array($ret1); //for tailor name


if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM  tailor  where password='".md5($_POST['password'])."' && email='".$_SESSION['tlogin']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update tailor set password='".md5($_POST['newpassword'])."', updationDate='$currentTime' where email='".$_SESSION['tlogin']."'");
$_SESSION['msg']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tailor | Change Password</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">
	<script type="text/javascript">
    
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container" style="margin-top:1%">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                <a class="brand" href="index.php" style="margin-bottom:2%">
                    Darzi.pk | Tailor
                    </a>
                <a href="" style="margin-left:19%">
                    <img src="images/logo.jpg" style="width:150px;height:150px; margin-left: 8em;" alt="">
                </a>

                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav pull-right">
                    <li><a href="#">
                        <?php echo htmlentities($row1['firstname']);?>
                        <?php echo htmlentities($row1['lastname']);?>
                            </a></li>
                        <li class="nav-user dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img  style="width:40px;height:40px;border-radius:20px" src="mediaimage/<?php echo htmlentities($row1['id']);?>/<?php echo htmlentities($row1['image']);?>" class="img-fluid">
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="changepassword.php">Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->

	<div class="wrapper">
		<div class="container">
			<div class="row">
			<div class="span3">
                    <div class="sidebar">


                    <ul class="widget widget-menu unstyled"  style=" background-color: white;border-top: 5px; ">

<li><a href="home.php"><i class="menu-icon icon-tasks"></i>Home</a></li>

<li>
    <a class="collapsed" data-toggle="collapse" href="#togglePages2">
        <i class="menu-icon icon-cog"></i>
        <i class="icon-chevron-down pull-right"></i><i
            class="icon-chevron-up pull-right"></i> Order Management
    </a>
    <ul id="togglePages2" class="collapse unstyled">
        <li>
            <a href="pendingorders.php">
                <i class="icon-tasks"></i> Pending Orders
                <b class="label orange pull-right">
                    3
                </b>

            </a>
        </li>
        <li>
            <a href="readyorders.php">
                <i class="icon-tasks"></i> Ready To Deliver
                <b class="label orange pull-right">
                    3
                </b>
            </a>
        </li>
        <li>
            <a href="deliveredorders.php">
                <i class="icon-inbox"></i> Delivered Orders
                <b class="label green pull-right">
                    3
                </b>

            </a>
        </li>
    </ul>
<li><a href="viewprice.php"><i class="menu-icon icon-cog"></i>Set Your Pricing</a>
</li>
<li><a href="ratings.php"><i class="menu-icon icon-comments-alt"></i>Your Ratings &
        Reviews</a></li>
<li><a href="updateprofile.php"><i class="menu-icon icon-tasks"></i>Profile Update</a></li>
<li><a href="logout.php"><i class="menu-icon icon-cog"></i>Logout</a></li>
</li>
</ul>






                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->			
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Tailor Change Password</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
									<br />

			<form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">
									
<div class="control-group">
<label class="control-label" for="basicinput">Current Password</label>
<div class="controls">
<input type="password" placeholder="Enter your current Password"  name="password" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">New Password</label>
<div class="controls">
<input type="password" placeholder="Enter your new current Password"  name="newpassword" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">confirm Password</label>
<div class="controls">
<input type="password" placeholder="Enter your new Password again"  name="confirmpassword" class="span8 tip" required>
</div>
</div>




										

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Submit</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

		<b class="copyright">&copy; 2021 Darzi.pk   </b> 
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
<?php } ?>
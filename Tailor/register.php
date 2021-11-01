<?php
session_start();
include('config.php');


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];

    $query = "INSERT INTO darzi.tailor (email,password,firstname,lastname,phonenumber,address) VALUES ('$email','$password','$firstname','$lastname','$phonenumber','$address')";
    $sql = mysqli_query($con, $query) or die("Unsuccessful Retry ");
    $_SESSION['msg'] = "Tailor Registered Successfully !!";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darzi.pk | Tailor Registration</title>
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

                <a class="brand" href="home.php">
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
                            <h3>Register</h3>
                        </div>
                        <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg'] = ""); ?></span>
                        <div class="module-body">
                        <?php if (isset($_POST['submit'])) { ?>
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
										</div>
									<?php } ?>


									<?php if (isset($_GET['del'])) { ?>
										<div class="alert alert-error">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
										</div>
									<?php } ?>

									<br />
                            <div class="control-group" style="border:0px">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">Email</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="email" id="email" name="email"  placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">Password</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="password" id="password" name="password" placeholder="Enter your Password" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">Confirm Password</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter your  Password again" required>
                                </div>
                            </div>
                            <div class="control-group" style="border:0px">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">First Name</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" placeholder="Enter first name" required id="FirstName" name="firstname" required>
                                </div>
                            </div>

                            <div class="control-group" style="border:0px">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">Last Name</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" placeholder="Enter last name" required id="LastName" name="lastname" required>
                                </div>
                            </div>

                            <div class="control-group" style="border:0px">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">Phone Number</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="tel" id="PhoneNum" name="phonenumber" placeholder="Enter your number" required>
                                </div>
                            </div>

                      

                            <div class="control-group" style="border:0px">
                                <label class="control-label" for="basicinput" style="color:black;font-weight:bold">Address</label>
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="Address" name="address" placeholder="Enter Your Address" required>
                                </div>
                            </div>
                        </div>
                        <div class="module-foot">
                            <div class="control-group">
                                <div class="controls clearfix">
                                    <button type="submit" class="btn btn-primary pull-right" name="submit">Register</button>
                                    
                                </div>
                            
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="control-group">
                                    <div class="controls clearfix">
                                    <a href="index.php"><button class="btn btn-info pull-left">Back</button></a>

                                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.wrapper-->

    <div class="footer">
        <div class="container">


            <b class="copyright">&copy; 2021 Darzi.pk </b>
        </div>
    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    
</body>

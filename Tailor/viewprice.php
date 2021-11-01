<?php
session_start();
include('config.php');
if (strlen($_SESSION['tlogin']) == 0) {
    header('location:index.php');
} 
else
{
    $tid = $_SESSION['id'];
    $ret1=mysqli_query($con,"select * from tailor where id='$tid'");
    $row1=mysqli_fetch_array($ret1); //for tailor name
    $ret=mysqli_query($con,"select * from tailor_price where id='$tid'");
    $row=mysqli_fetch_array($ret);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailor | View Prices</title>
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
            <div class="container" style="margin-top:1%">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                <a class="brand" href="home.php" style="margin-bottom:2%">
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
                                <img src="images/tailor.jpg" class="nav-avatar" />
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
                                <h3>Set Your Stitching Prices</h3>
                            </div>
                            <div class="module-body">
                                <h2 style="text-align:center; margin-top: 10px; font-family: sans-serif;">Prices for Men</h2>
                                <div class="col-md-8">
                                    <div class="profileDetails">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Kurta</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span> <?php echo htmlentities($row['mkurta']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Pajama</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mpajama']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Kameez</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mkameez']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Shalwar</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mshalwar']);?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Shirt</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mshirt']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Pant</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mpant']);?></p>
                                            </div>
                                        </div>

                                        <h2 style="text-align:center; margin-top: 10px; font-family: sans-serif;">Prices for Women</h2>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Kameez</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mkameez']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Shalwar</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mshalwar']);?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Shirt</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mshirt']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Pant</h3>
                                            </div>
                                            <div class="col-md-6">

                                                <p><span>PKR </span><?php echo htmlentities($row['mpant']);?></p>
                                            </div>
                                        </div>
                                        <div class="row" style="border-bottom: 0.5em white;">
                                            <div class="chngbtn">
                                                <a class="btn btn-info " target="__blank" href="updateprice.php">Update Prices</a>
                                            </div>

                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
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
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
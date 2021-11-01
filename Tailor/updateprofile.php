<?php
session_start();
include('config.php');
if (strlen($_SESSION['tlogin']) == 0) {
    header('location:index.php');
} else {

    $tid = $_SESSION['id'];
    $ret1=mysqli_query($con,"select * from tailor where id='$tid'");
    $row1=mysqli_fetch_array($ret1); //for tailor name

    if (isset($_POST['submit'])) 
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $mediaimage = str_replace(' ', '', $_FILES["MediaImage"]["name"]);


        //for getting media id
        $mediaid = $tid;
        $dir = "mediaimage/$mediaid";
        if (!is_dir($dir)) {
            mkdir("mediaimage/" . $mediaid);
        }
    
        move_uploaded_file($_FILES["MediaImage"]["tmp_name"], "mediaimage/$mediaid/" . (str_replace(' ', '', $_FILES["MediaImage"]["name"])));
        $sql=mysqli_query($con,"update  tailor set firstname='$firstname',lastname='$lastname',phonenumber='$phonenumber',image='$mediaimage' where id='$tid' ");
        $_SESSION['msg']="Profile Updated Successfully !!";
    }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailor | Update Prices</title>
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
                                <div class="module-head" style="color:white">
                                    <h3>Update Profile</h3>
                                </div>
                                <div class="module-body">

                                <?php if(isset($_SESSION['msg'])) { ?>
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<?php echo $_SESSION['msg']; ?>
											<?php unset($_SESSION['msg']); ?>
										</div>
									<?php } 
										

									?>


									<?php if (isset($_GET['del'])) { ?>
										<div class="alert alert-error">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
										</div>
									<?php } ?>

									<br />

                                    <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                                        <div class="control-group" style="border:0px">
                                            <label class="control-label" for="basicinput">First Name</label>
                                            <div class="controls">
                                                <input type="text" placeholder="Enter first name" required id="FirstName" name="firstname" required class="span8 tip" required>
                                            </div>
                                        </div>

                                        <div class="control-group" style="border:0px">
                                            <label class="control-label" for="basicinput">Last Name</label>
                                            <div class="controls">
                                                <input type="text" placeholder="Enter last name" required id="LastName" name="lastname" required class="span8 tip" required>
                                            </div>
                                        </div>

                                        <div class="control-group" style="border:0px">
                                            <label class="control-label" for="basicinput">Phone Number</label>
                                            <div class="controls">
                                                <input type="tel" id="PhoneNum" name="phonenumber" placeholder="Enter your number" required class="span8 tip" required>
                                            </div>
                                        </div>

                                        <div class="control-group" style="border:0px">
                                            <label class="control-label" for="basicinput">Address</label>
                                            <div class="controls">
                                                <input type="text" id="Address" name="address" placeholder="Enter Your Address" required class="span8 tip" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tailor Image</label>
                                            <div class="controls">
                                            <input type="file" accept="image/*" name="MediaImage" id="productimage1"  class="span8 tip" required>
                                            </div>
                                        </div>



                                        <div class="control-group" style="border:0px">
                                            <div class="controls">
                                                <button type="submit" style="background-color: #28b0b9;" name="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>



                                    </form>
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
        <script src="scripts/datatables/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('.datatable-1').dataTable();
                $('.dataTables_paginate').addClass("btn-group datatable-pagination");
                $('.dataTables_paginate > a').wrapInner('<span />');
                $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
                $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
            });
        </script>
    </body>
<?php } ?>
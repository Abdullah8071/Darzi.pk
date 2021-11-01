<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailor | Delivered Orders</title>
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
                                    Tailor abc
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
                                <h3>Delivered Orders</h3>
                            </div>
                            <div class="module-body table">


                                <br />

                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Name</th>
                                            <th width="50">Email</th>
                                            <th>Product </th>
                                            <th>Qty </th>
                                            <th>Amount </th>
                                            <th>Fabric</th>
                                            <th>Order Date</th>
                                            <th>Delete</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ali</td>
                                            <td>ali123@gmail.com</td>
                                            <td>Kurta</td>
                                            <td>2</td>
                                            <td>2400</td>
                                            <td>Not Recieved</td>
                                            <td>12-09-2021</td>
                                            <td>
                                                <center>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" name="submit" class="btn btn-danger">X</button>
                                                        </div>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ahmad</td>
                                            <td>ahmad98@gmail.com</td>
                                            <td>Kameez Shalwar</td>
                                            <td>1</td>
                                            <td>1200</td>
                                            <td>Recieved</td>
                                            <td>12-09-2021</td>
                                            <td>
                                                <center>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" name="submit" class="btn btn-danger">X</button>
                                                        </div>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sheikh Amjad</td>
                                            <td>sheikhamjad@gmail.com</td>
                                            <td>Kurta Pajama</td>
                                            <td>1</td>
                                            <td>1000</td>
                                            <td>Not Recieved</td>
                                            <td>12-09-2021</td>
                                            <td>
                                                <center>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" name="submit" class="btn btn-danger">X</button>
                                                        </div>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                </table>
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
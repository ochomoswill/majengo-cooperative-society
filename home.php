<!--Connection to database-->
<?php

session_start();

include "database.php";

$query = oci_parse($connect, "SELECT clientid FROM tblclients");
oci_execute($query);
$no_of_clients = 0;
while (($row = oci_fetch_array($query, OCI_NUM)) != false)
{
    $no_of_clients ++;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Majengo Cooperative Society! | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link href="css/floatexamples.css" rel="stylesheet" />

    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="home.php" class="site_title"><!--<i class="fa fa-building-o"></i>--> <span> Majengo Cooperative!</span></a>
                </div>
                <div class="clearfix"></div>


                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="images/CD3.png" alt="..." class="img-circle profile_img">
                        <br />
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?php echo " ".$_SESSION['username'];"";?></h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->




                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="home.php"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li><a><i class="fa fa-tree"></i> Land Management<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="landdetails.php">Land Details</a>
                                    </li>
                                    <li><a href="landtranscations.php">Land Transactions</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-wrench"></i> Construction <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="employee.php">Employee Details</a>
                                    </li>
                                    <li><a href="worker.php">Worker Details</a>
                                    </li>
                                    <li><a href="contractor.php">Contractor Details</a>
                                    </li>
                                    <li><a href="client.php">Client Details</a>
                                    </li>
                                    <li><a href="project.php">Project Details</a>
                                    </li>
                                    <li><a href="supplier.php">Supplier Details</a>
                                    </li>
                                    <li><a href="eqptissue.php">Issuance of Equipment</a>
                                    </li>
                                    <li><a href="mtrlissue.php">Issuance of Material</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-building-o"></i> Property Management<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="clientproperty.php">Client Details</a>
                                    </li>
                                    <li><a href="tenant.php">Tenant Details</a>
                                    </li>
                                    <li><a href="lease.php">Lease Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-coffee"></i> Dairy Management<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="farmer.php">Farmer Details</a>
                                    </li>
                                    <li><a href="factory.php">Factory Details</a>
                                    </li>
                                    <li><a href="market.php">Market Agents</a>
                                    </li>
                                    <li><a href="milk.php">Milk Details</a>
                                    </li>
                                    <li><a href="farminputs.php">Farming Inputs</a>
                                    </li>
                                    <li><a href="loans.php">Loans</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href = "map.php"><i class="fa fa-map-marker"></i> Map</a>

                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a href="logout.php" data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt=""><?php echo " ".$_SESSION['username'];"";?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">


                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>


                    </ul>
                </nav>
            </div>

        </div>
<!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

            <br />
            <div class="">

                <div class="row top_tiles">
                    <h4>Registered Personnel</h4>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-circle"></i>
                            </div>
                            <div class="count">9</div>

                            <h4> Registered Employees</h4>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-circle"></i>
                            </div>
                            <div class="count"><?php echo ($no_of_clients); ?></div>

                            <h4>  Registered Clients</h4>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-circle"></i>
                            </div>
                            <div class="count">179</div>

                            <h4> Registered Workers</h4>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-circle"></i>
                            </div>
                            <div class="count">17</div>

                            <h4> Registered Contractors</h4>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                        </div>
                    </div>
                    <h4>Project Statistics</h4>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-circle"></i>
                            </div>
                            <div class="count">17</div>

                            <h4> Registered Projects</h4>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-dot-circle-o"></i>
                            </div>
                            <div class="count">11</div>

                            <h4> Completed Projects</h4>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-circle-o"></i>
                            </div>
                            <div class="count">7</div>

                            <h4> On-going Projects</h4>
                            <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Transaction Summary <small>Weekly progress</small></h2>
                                <div class="filter">
                                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="demo-container" style="height:280px">
                                        <div id="placeholder33x" class="demo-placeholder"></div>
                                    </div>
                                    <div class="tiles">
                                        <div class="col-md-4 tile">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                        <span class="sparkline11 graph" style="height: 160px;">
                                        <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                    </span>
                                        </div>
                                        <div class="col-md-4 tile">
                                            <span>Total Revenue</span>
                                            <h2>$231,809</h2>
                        <span class="sparkline22 graph" style="height: 160px;">
                                        <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                    </span>
                                        </div>
                                        <div class="col-md-4 tile">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                        <span class="sparkline11 graph" style="height: 160px;">
                                        <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                    </span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div>
                                        <div class="x_title">
                                            <h2>Top Profiles</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <ul class="list-unstyled top_profiles scroll-view">
                                            <li class="media event">
                                                <a class="pull-left border-aero profile_thumb">
                                                    <i class="fa fa-user aero"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">Ms. Mary Jane</a>
                                                    <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                    <p> <small>12 Sales Today</small>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="media event">
                                                <a class="pull-left border-green profile_thumb">
                                                    <i class="fa fa-user green"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">Ms. Mary Jane</a>
                                                    <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                    <p> <small>12 Sales Today</small>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="media event">
                                                <a class="pull-left border-blue profile_thumb">
                                                    <i class="fa fa-user blue"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">Ms. Mary Jane</a>
                                                    <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                    <p> <small>12 Sales Today</small>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="media event">
                                                <a class="pull-left border-aero profile_thumb">
                                                    <i class="fa fa-user aero"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">Ms. Mary Jane</a>
                                                    <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                    <p> <small>12 Sales Today</small>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="media event">
                                                <a class="pull-left border-green profile_thumb">
                                                    <i class="fa fa-user green"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">Ms. Mary Jane</a>
                                                    <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                                    <p> <small>12 Sales Today</small>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Weekly Summary <small>Activity shares</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                                    <div class="col-md-7" style="overflow:hidden;">
                      <span class="sparkline_one" style="height: 160px; padding: 10px 25px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                                        <h4 style="margin:18px">Weekly sales progress</h4>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="row" style="text-align: center;">
                                            <div class="col-md-4">
                                                <canvas id="canvas1i" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                                <h4 style="margin:0">Bounce Rates</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <canvas id="canvas1i2" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                                <h4 style="margin:0">New Traffic</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <canvas id="canvas1i3" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                                <h4 style="margin:0">Device Share</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-4">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Top Profiles <small>Sessions</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item One Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Three Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Top Profiles <small>Sessions</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item One Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Three Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Top Profiles <small>Sessions</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item One Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Two Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">April</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">Item Three Tittle</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    <img src = "images/picsq.png" height="40" width = "40"> Majengo Cooperative Society by <img src = "images/ochomoswill3.png" height="40" width = "40"> <i>Ochomoswill Incorporated.</i></img>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

        </div>
        <!-- /page content -->
    </div>


</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="js/bootstrap.min.js"></script>

<!-- bootstrap progress js -->
<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
<!-- icheck -->
<script src="js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="js/moment/moment.min.js"></script>
<script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
<!-- chart js -->
<script src="js/chartjs/chart.min.js"></script>
<!-- sparkline -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>

<script src="js/custom.js"></script>

<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="js/flot/jquery.flot.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="js/flot/date.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/flot/curvedLines.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
<!-- pace -->
<script src="js/pace/pace.min.js"></script>
<!-- flot -->
<script type="text/javascript">
    //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
    var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

    //generate random number for charts
    randNum = function() {
        return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
    }

    $(function() {
        var d1 = [];
        //var d2 = [];

        //here we generate data for chart
        for (var i = 0; i < 30; i++) {
            d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
            //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
        }

        var chartMinDate = d1[0][0]; //first day
        var chartMaxDate = d1[20][0]; //last day

        var tickSize = [1, "day"];
        var tformat = "%d/%m/%y";

        //graph options
        var options = {
            grid: {
                show: true,
                aboveData: true,
                color: "#3f3f3f",
                labelMargin: 10,
                axisMargin: 0,
                borderWidth: 0,
                borderColor: null,
                minBorderMargin: 5,
                clickable: true,
                hoverable: true,
                autoHighlight: true,
                mouseActiveRadius: 100
            },
            series: {
                lines: {
                    show: true,
                    fill: true,
                    lineWidth: 2,
                    steps: false
                },
                points: {
                    show: true,
                    radius: 4.5,
                    symbol: "circle",
                    lineWidth: 3.0
                }
            },
            legend: {
                position: "ne",
                margin: [0, -25],
                noColumns: 0,
                labelBoxBorderColor: null,
                labelFormatter: function(label, series) {
                    // just add some space to labes
                    return label + '&nbsp;&nbsp;';
                },
                width: 40,
                height: 1
            },
            colors: chartColours,
            shadowSize: 0,
            tooltip: true, //activate tooltip
            tooltipOpts: {
                content: "%s: %y.0",
                xDateFormat: "%d/%m",
                shifts: {
                    x: -30,
                    y: -50
                },
                defaultTheme: false
            },
            yaxis: {
                min: 0
            },
            xaxis: {
                mode: "time",
                minTickSize: tickSize,
                timeformat: tformat,
                min: chartMinDate,
                max: chartMaxDate
            }
        };
        var plot = $.plot($("#placeholder33x"), [{
            label: "Email Sent",
            data: d1,
            lines: {
                fillColor: "rgba(150, 202, 89, 0.12)"
            }, //#96CA59 rgba(150, 202, 89, 0.42)
            points: {
                fillColor: "#fff"
            }
        }], options);
    });
</script>
<!-- /flot -->
<!--  -->
<script>
    $('document').ready(function() {
        $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
            type: 'bar',
            height: '125',
            barWidth: 13,
            colorMap: {
                '7': '#a1a1a1'
            },
            barSpacing: 2,
            barColor: '#26B99A'
        });

        $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
            type: 'bar',
            height: '40',
            barWidth: 8,
            colorMap: {
                '7': '#a1a1a1'
            },
            barSpacing: 2,
            barColor: '#26B99A'
        });

        $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
            type: 'line',
            height: '40',
            width: '200',
            lineColor: '#26B99A',
            fillColor: '#ffffff',
            lineWidth: 3,
            spotColor: '#34495E',
            minSpotColor: '#34495E'
        });

        var doughnutData = [{
            value: 30,
            color: "#455C73"
        }, {
            value: 30,
            color: "#9B59B6"
        }, {
            value: 60,
            color: "#BDC3C7"
        }, {
            value: 100,
            color: "#26B99A"
        }, {
            value: 120,
            color: "#3498DB"
        }];

        Chart.defaults.global.legend = {
            enabled: false
        };

        var canvasDoughnut = new Chart(document.getElementById("canvas1i"), {
            type: 'doughnut',
            showTooltips: false,
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#455C73",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#34495E",
                        "#36CAAB",
                        "#49A9EA"
                    ]

                }]
            }
        });

        var canvasDoughnut = new Chart(document.getElementById("canvas1i2"), {
            type: 'doughnut',
            showTooltips: false,
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#455C73",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#34495E",
                        "#36CAAB",
                        "#49A9EA"
                    ]

                }]
            }
        });

        var canvasDoughnut = new Chart(document.getElementById("canvas1i3"), {
            type: 'doughnut',
            showTooltips: false,
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#455C73",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#34495E",
                        "#36CAAB",
                        "#49A9EA"
                    ]

                }]
            }
        });
    });
</script>
<!-- -->
<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function() {

        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
        }

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<!-- /datepicker -->
</body>

</html>


<?php

$query = oci_parse($connect, "SELECT * FROM tblclients");
$result = oci_execute($query);

if($result)
{
    $row = oci_num_rows($query);
    echo "hello world";
}

?>
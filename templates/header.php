<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?></title>

     <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

   
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--
calendar ma ki
--> 

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Project Name</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                     
                      <img src="../image/virendra.jpg" class="img-thumbnail img-circle" alt="Cinque Terre" width="50" height="40">
<?php
$resul=query("select * from profile where roll_no=?",$_SESSION["id"]);
$result=$resul[0];

//$result=$resul[0];

?>

                        <li><b><?php  echo $result['first_name'] ; ?></b> </li>


<li ><a href="../public/logout.php"> <i class="fa fa-power-off fa-fw"></i></a></li>
             </ul>
           </nav>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation"style="  margin-top: 0px;
">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa  fa-user fa-fw"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-education fa-fw"></i> Exam<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-registration-mark fa-fw"></i>Exam Registration</a>
                                </li>
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-download fa-fw"></i>Admit Card Download</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-table fa-fw"></i>Exam Time Table</a>
                                </li>
                                 <li>
                                   <a href="#"><i class="glyphicon glyphicon-thumbs-up fa-fw"></i> Result</a>
                              </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-file fa-fw"></i> Assignment</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"><i class="glyphicon glyphicon-book fa-fw"></i>Library<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  href="../public/library_search.php">Library</a>
                                </li>
                                <li>
                                    <a href="#">Virtual Library</a>
                                </li>
                                 <li>
                                    <a href="#">Study Resources</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper" style="background-color:#EEEEEE">
            <div class="container-fluid">
                <div class="row">
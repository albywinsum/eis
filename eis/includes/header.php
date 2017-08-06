

<?php  

include_once "connect.php";
session_start();
//echo $_SESSION['fname']; exit;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

         <title>eis</title>
     <link rel="stylesheet" href="amcharts/style.css" type="text/css">
    <link href="amcharts/amcharts/export.css" rel="stylesheet" type="text/css">
    <script src="highcharts/highcharts.js"></script>
    <script src="highcharts/highcharts-3d.js"></script>
    <script src="highcharts/exporting.js"></script>

    <!-- Dependent dropdown -->
    <script type="text/javascript" src="vendor/bootstrap/js/dynamicoptionlist.js"></script>

    <!-- date range picker -->
    <link rel="stylesheet" href="daterange/datepicker.css">
        <!-- <link rel="stylesheet" href="daterangepicker/bootstrap.css"> -->
   
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body onLoad="initDynamicOptionLists();">

    
    <div id="wrapper" >
    <div id="wrapper2" >

        <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><font color="teal"><b>Environmental Information System &nbsp;</font><font color="#8B4500">( EIS )</font></b></font></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                   <p><i>Logged In </i>[
                   <?php

                if ($_SESSION['first']=='' && $_SESSION['last']=='') {
                    session_start();
                     $_SESSION['invalid']= "Sorry, You Have to Login to the System First!";
                header("location:login.php");
               $error2 =  $_SESSION["Sorry, You Have to Login In The System First!"];
                }
                 else  { echo " ". $_SESSION['first']." ".$_SESSION['last']." ]"; }?></p> 

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">

                    <?php
                     $sender = $_SESSION['id'];

                    $empty=mysqli_query($conn, "SELECT msgfrom FROM u".$sender." WHERE msgfrom!='ME'");
                    $emptycount= mysqli_num_rows($empty);


                   
                                         $mail = "SELECT message, msgfrom, msgto FROM u".$sender." ORDER BY id ASC";
                                             $result = $conn->query($mail);

                                              while($row = $result->fetch_assoc()) { 
                                                if ($row['msgfrom']!='ME'){
                        echo "<li>
                            <a href='message.php?id=".$row['msgfrom']."'>
                                <div>
                                    <strong>".$row['msgfrom']."</strong>
                                    <span class='pull-right text-muted'>
                                        <em>".$row['date']."</em>
                                    </span>
                                </div>
                                <div>".$row['message']."</div>
                            </a>
                        </li>
                        <li class='divider'></li>"; }

                        // if($emptycount=='0') {
                        //     echo "<li>
                        //     <a href='#'>
                        //         <div>
                        //             <strong></strong>
                        //             <span class='pull-right text-muted'>
                        //                 <em>Today</em>
                        //             </span>
                        //         </div>
                        //         <div>No Emails</div>
                        //     </a>
                        // </li>
                        // <li class='divider'></li>";
                        // }
                         } ?>

                        <li>
                            <a class='text-center' href='viewmail.php'>
                                <strong><?php if($emptycount=='0') { echo "No Mails";}  else{ echo "Read All Mails"; } ?></strong>
                                <i class='fa fa-angle-right'></i>
                            </a>
                        </li>
                         <li>
                            <a class='text-center' href='admin.php'>
                                <strong>Call Admin</strong>
                                <i class='fa fa-angle-right'></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <?php if ($_SESSION['role']=='ADMIN') {
                echo "<li class='dropdown'>
                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                        <i class='fa fa-inbox fa-fw'></i><i class='fa fa-caret-down'>
                    </i></a>
                    <ul class='dropdown-menu dropdown-alerts'>
                        
                        <li class='divider'></li>"; ?>
                        <?php
                                         $message = "SELECT * FROM message ORDER BY message_id DESC LIMIT 5";

                                             $resultm = $conn->query($message);

                                              while($row = $resultm->fetch_assoc()) { 
                                               
                                                
                        echo "<li>
                            <a href='feedback.php?message_id=".$row['message_id']."'>
                                <div>
                                    <strong>".$row['fullname']."</strong>
                                    <span class='pull-right text-muted'>
                                        <em>".$row['date']."</em>
                                    </span>
                                </div>
                                <div>".$row['message']."</div>
                            </a>
                        </li>
                        <li class='divider'></li>"; }

                        echo "<li>
                            <a class='text-center' href='feedbacks.php'>
                                <strong>See All Messages</strong>
                                <i class='fa fa-angle-right'></i>
                            </a>
                        </li>
                    </ul>
                    
                </li>"; } ?>
                <!-- ..............................Messages............ -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i><i class="fa fa-caret-down"><span class="label label-success">10</span></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                        <li class="divider"></li>
                        <?php
                                         $alert = "SELECT * FROM alert ORDER BY id DESC LIMIT 5";

                                             $result = $conn->query($alert);

                                              while($row = $result->fetch_assoc()) { 
                                                $date=$row['dateof'];
                                                if ($date==date('d/m/Y')) {
                                                    $time='Today';
                                                }
                                                else{ $time= $row['dateof'];}
                        echo "<li>
                            <a href='#'>
                                <div>
                                    <i class='fa fa-bell fa-fw'></i> ".$row['message']."
                                    <span class='pull-right text-muted small'>".$time."</span>
                                </div>
                            </a>
                        </li>
                        <li class='divider'></li>"; }?>

                        <li>
                            <a class="text-center" href="alert.php">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['first']." ".$_SESSION['last']; ?>
</a>
                        </li>
                        <li><a href="expertinfo.php?id=<?php echo $_SESSION['id']; ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="includes/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Report<span class="fa arrow"></span></a>
                            
                            <ul class="nav nav-second-level">
                                <li>
                                     <a href="uploadreport.php"><i class="fa fa-upload fa-fw"></i> Upload Report</a>
                                </li>
                                <li>
                                    <a href="viewreports.php"><i class="fa fa-list fa-fw"></i> View Submitted Report</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Projects<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                <li>
                                     <a href="viewprojects.php">View Projects</a>
                                </li>
                                 <li>
                                    <a href="proponent.php"">Register New Project</a>
                                </li>
                                <?php if ($_SESSION['role']=='ADMIN') {
                                    
                                echo "<li>
                                    <a href='viewrequest.php'>Access Information Requests</a>
                                </li>";
                                }
                                else {

                                   echo "<li>
                                    <a href='accessinfo.php'>Access Information</a>
                                </li>"; 
                                }
                                ?>
                               
                            </ul>
                        </li>
                        <?php if ($_SESSION['role']=='ADMIN') {
                                    
                                echo "<li>
                            <a href='#'><i class='fa fa-flag-o'></i> Expert<span class='fa arrow'></span></a>
                                <ul class='nav nav-second-level'>
                                <li>
                                    <a href='viewexpert.php'><i class='fa fa-list'></i> View Experts</a>
                                </li>
                                <li>
                                    <a href='application.php'><i class='fa fa-clock-o'></i> Expert Requests</a>
                                </li>
                                <li>
                                     <a href='#'>Register Expert<span class='fa arrow'></span></a>
                                    <ul class='nav nav-third-level'>
                                        <li>
                                            <a href='expertindividual.php'>Individual</a>
                                        </li>
                                        <li>
                                            <a href='expertfirm.php'>Firm</a>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                                 
                                
                            </ul>
                        </li>"; } ?>
                        <li>
                            <a href="tables.html"><i class="fa fa-table "></i> Events<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="viewevents.php">Vew Events</a>
                                </li>
                                <li>
                                <a href="pollution.php">Report Events</a>
                                    <!-- <a href="#">Add New Event<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="conservation.php">Conservation</a>
                                        </li>
                                        <li>
                                            <a href="pollution.php">Pollution</a>
                                        </li>
                                        <li>
                                            <a href="other.php">Other</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level --> 
                                </li> 
                                <li>
                                    <a href="adduser.php">Register Reporter</a>
                                </li>
                            </ul>
                        </li>
                        <?php if ($_SESSION['role']=='ADMIN') { echo "<li>
                            <a href='#'><i class='fa fa-users'></i> Manage Users<span class='fa arrow'></span></a>
                                <ul class='nav nav-second-level'>";
                                // <li>
                                //      <a href='viewusers.php'><i class='fa fa-list'></i> View Users</a>
                                // </li>
                                 echo "<li>
                                    <a href='alert.php'><i class='fa fa-bell'></i> Alert Users</a>
                                </li>
                                <li>
                                    <a href='usermail.php'><i class='fa fa-envelope fa-fw'></i> Email User</a>
                                </li>
                                <li>
                                    <a href='newsletter.php'><i class='fa fa-calendar'></i> Newsletter</a>
                                </li>
                                
                            </ul>
                        </li>"; } ?>
                        
                       <!-- <li>
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
                                </li
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li>-->

                        <?php if ($_SESSION['role']=='ADMIN') {
                        echo "<li>
                            <a href='#'><i class='fa fa-map-marker fa-fw'></i> Locations<span class='fa arrow'></span></a>
                            <ul class='nav nav-second-level'>
                                
                                <li>
                                    <a href='viewdistrict.php'><i class='fa fa-location-arrow'>&nbsp Districts</i></a>
                                </li>
                                <li>
                                    <a href='viewregion.php'><i class='fa fa-location-arrow'>&nbsp Regions</i></a>
                                </li>
                                <li>
                                <a href='#'><i class='fa fa-plus'>&nbsp Add Location</i><span class='fa arrow'></span></a>
                                    <ul class='nav nav-third-level'>
                                        <li>
                                            <a href='addregion.php'>Region</a>
                                        </li>
                                        <li>
                                            <a href='districtadd.php'>District</a>
                                        </li>
                                        <li>
                                            <a href='ward.php'>Ward</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>"; } ?>
                        <!-- <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Photo Gallary<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Blank Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <br><br>




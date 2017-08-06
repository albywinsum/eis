

    
 <?php include_once "includes/header.php";
 

//include_once "includes/amcharts/columnAndLineMix.php"; 

 
 $allcount=mysqli_query($conn, "SELECT id FROM event");
 $allcount2=mysqli_query($conn, "SELECT id FROM event where reporterid='$_SESSION[id]'");
 

 if ($_SESSION['role']=='ADMIN') {
                                    
                                $all= mysqli_num_rows($allcount);
                                }
                                else {

                                   $all= mysqli_num_rows($allcount2);
                                }


$projects=mysqli_query($conn, "SELECT userid FROM proponent");
$projects2=mysqli_query($conn, "SELECT userid FROM proponent WHERE userid='$_SESSION[id]'"); 

if ($_SESSION['role']=='ADMIN') {
                                    
                                $proj= mysqli_num_rows($projects);
                                }
                                else {

                                   $proj= mysqli_num_rows($projects2);
                                }



$doc=mysqli_query($conn, "SELECT id FROM uploads");
$doc2=mysqli_query($conn, "SELECT id FROM uploads WHERE userid='$_SESSION[id]'"); 

if ($_SESSION['role']=='ADMIN') {
                                    
                                $alldocs= mysqli_num_rows($doc);
                                }
                                else {

                                   $alldocs= mysqli_num_rows($doc2);
                                }




$requests=mysqli_query($conn, "SELECT id FROM expert");
 $requestcount= mysqli_num_rows($requests);

 $requestaccept=mysqli_query($conn, "SELECT id FROM expert where status='ACCEPTED'");
 $countaccept= mysqli_num_rows($requestaccept);

 $user=mysqli_query($conn, "SELECT status FROM expert WHERE status='ACCEPTED'");
 $usercount= mysqli_num_rows($user);

// $conservation="SELECT count(category) FROM event WHERE category='Conservation'";
// $pollution="SELECT count(category) FROM event WHERE category='Pollution'";
// $other="Select count(category) from event where category NOT Like 'Pollution' AND category NOT Like 'Conservation'";
 ?>

        <div  id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 

                    <h3 class="page-header">Home.</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-2 ">
                    <a href="viewevents.php">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-align-left fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $all; ?></div>
                                    <div> Events!</div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div></a>
                </div>

                <?php if ($_SESSION['role']=='ADMIN') {
                    echo "<div class='col-lg-2 '>
                    <a href='application.php'>
                    <div class='panel panel-green'>
                        <div class='panel-heading'>
                            <div class='row'>
                                <div class='col-xs-3'>
                                    <i class='fa fa-users fa-2x'></i>
                                </div>
                                <div class='col-xs-9 text-right'>
                                    <div class='huge'>".$requestcount."</div>
                                    <div>Requests</div>
                                </div>
                            </div>
                        </div>
                        
                    </div></a>
                </div>";
                echo "<div class='col-lg-2 '>
                    <a href='application.php'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <div class='row'>
                                <div class='col-xs-3'>
                                    <i class='fa fa-users fa-2x'></i>
                                </div>
                                <div class='col-xs-9 text-right'>
                                    <div class='huge'>".$countaccept."</div>
                                    <div>Experts</div>
                                </div>
                            </div>
                        </div>
                        
                    </div></a>
                </div>"; } ?>
                <div class="col-lg-2 ">
                    <a href="viewprojects.php">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-newspaper-o fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $proj; ?></div>
                                    <div> Projects</div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div></a>
                </div>

                <div class="col-lg-2 ">
                    <a href="viewreports.php">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bar-chart-o fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $alldocs; ?></div>
                                    <div> Reports</div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div></a>
                </div>
                <?php if ($_SESSION['role']=='ADMIN') { echo "<div class='col-lg-2 '>
                    <a href='viewexpert.php'>
                    <div class='panel panel-yellow'>
                        <div class='panel-heading'>
                            <div class='row'>
                                <div class='col-xs-3'>
                                    <i class='fa fa-newspaper-o fa-2x'></i>
                                </div>
                                <div class='col-xs-9 text-right'>
                                    <div class='huge'>".$usercount."</div>
                                    <div> Users</div>
                                </div>
                            </div>
                        </div>
                        
                    </div></a>
                </div>"; } ?>


               

                                        
            </div>
            <!-- /.row -->
            <div class="row">
                 <?php if ($_SESSION['role']=='ADMIN') {
                    echo  "<div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-bar-chart-o fa-fw'></i>Trend of Pollution in Tanzania Events From 2005
                            <div class='pull-right'>
                                <div class='btn-group'>
                                    <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'>
                                        Actions
                                        <span class='caret'></span>
                                    </button>
                                    <ul class='dropdown-menu pull-right' role='menu'>
                                        <li><a href='#'>Action</a>
                                        </li>
                                        <li><a href='#'>Action</a>
                                        </li>
                                        <li><a href='#'>Action</a>
                                        </li>
                                        <li class='divider'></li>
                                        <li><a href='#'>Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        
                         <div class='flot-chart'>
                                <div id='chartdiv' style='width:100%; height:400px;'></div>
                            </div>
                        
                    </div>
                </div>

                
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-bar-chart-o fa-fw'></i> Number of Reporters From Each Region
                            <div class='pull-right'>
                                <div class='btn-group'>
                                    <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'>
                                        Actions
                                        <span class='caret'></span>
                                    </button>
                                    <ul class='dropdown-menu pull-right' role='menu'>
                                        <li><a href='#'>Action</a>
                                        </li>
                                        <li><a href='#'>Action</a>
                                        </li>
                                        <li><a href='#'>Action</a>
                                        </li>
                                        <li class='divider'></li>
                                        <li><a href='#'>Action</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                         <div >
                                 
                                <div id='pie' style='width:100%; height:400px;'></div>
                                                    
                            </div>
                        
                            
                        
                    </div>
                </div>";
            }

                else{ echo "<div class='col-lg-6'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <b>PUBLIC ANNOUNCEMENTS<b>
                            
                        </div>
                         <div class='flot-chart'>
                                <div> <br><br><br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;CONTENTS NOT YET PUBLISHED</div>
                            </div>
                    </div>
                </div>";}

                ?>
                <!-- /.col-lg-6 -->
               



            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
       

         <?php if ($_SESSION['role']=='ADMIN') { include_once "includes/amchartfooter.php"; } ?>
       

    <?php include_once "includes/footer.php"; ?>



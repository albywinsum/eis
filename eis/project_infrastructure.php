<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 
 session_start();
     $pid =$_SESSION['projectid'];
    
    $next="<button type='submit'  name='add' class='btn btn-success'>Add</button>";
    if (isset($_POST['add'])) { 

    //$pid =($_POST['pid'];
    $structure = $_POST['structure'];
    $land = $_POST['land'];
    $wsource = $_POST['wsource'];
    $wquantity = $_POST['wquantity'];
    $ptype = $_POST['ptype'];
    $psource = $_POST['psource'];
    $pquantity = $_POST['pquantity'];
    $road = $_POST['road'];
    $other = $_POST['other'];
   



    $aa = $_POST['aa'];
    $bb = $_POST['bb'];
    $cc = $_POST['cc'];

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    

    $aaa = $_POST['aaa'];
    $bbb = $_POST['bbb'];
    $ccc = $_POST['ccc'];


       

    // Attempt insert query execution

    $sql = "INSERT INTO pinfrastructure(structure, land, wsource, wquantity, ptype,pquantity,psource,road,other, projectid) VALUES ('$structure', '$land', '$wsource','$wquantity','$ptype','$pquantity','$psource','$road','$other', '$pid')";

    if(mysqli_query($conn, $sql)){

        mysqli_query($conn, "INSERT INTO pimpacts(construction, operation, other,projectid) VALUES ('$a', '$aa', '$aaa','$pid')");
       mysqli_query($conn, "INSERT INTO pimpacts(construction, operation, other,projectid) VALUES ('$b', '$bb', '$bbb','$pid')");
       mysqli_query($conn, "INSERT INTO pimpacts(construction, operation, other,projectid) VALUES ('$c', '$cc', '$ccc','$pid')");

        $next="<button  formaction='peiae.php' class='btn btn-info'>Next</button>";
       $success= "<font color='green'><b>Records Added successfully, Go to The Next Step</b></font>";

       

    } else{

       $error= "<font color='red'><b>The Step is Incomplete!, Please Repeat and Enter the Valid Credentials</b></font>";
    }
}
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Register Project</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                    <font color="teal" size="3%"> Step 4: <b>Project Infrastructure</b><br></font>
                                    <span class="pull-right text-muted"><b><font color="teal" size="3%">60% Complete</b></font></span>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        </div>
                                    </div>
                        </div>



                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php echo $error; ?>
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label>Structures (buildings and other facilities):</label>
                                            <textarea class="form-control" placeholder="Buildings and Facilities" name="structure"  rows="3"></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label>Land required:</label>
                                            <input type="number" class="form-control" placeholder="Size of Land Required(In Acre)" name="land" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Water (source, quantity):</label>
                                            <input class="form-control" name="wsource" placeholder="Water Source(s)"><br>
                                            <input class="form-control" name="wquantity" placeholder="Water Quantity">
                                        </div>
                                        <div class="form-group">
                                            <label>Road:</label>
                                            <input class="form-control" placeholder="Road Name" name="road" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Power (type, source & quantity):</label>
                                            <input class="form-control" name="ptype" placeholder="Type"><br>
                                            <input class="form-control" name="psource" placeholder="Source"><br>
                                            <input class="form-control" name="pquantity" placeholder="Quantity">
                                        </div>
                                        <div class="form-group">
                                            <label>Other major utilities (e.g. sewerage, etc):</label>
                                            <textarea class="form-control" name="other" placeholder="Project Utilities" rows="3"></textarea> 
                                        </div>

                                        
                                        
                                        
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        
                                        

                                        <div class="form-group">
                                            <label class="control-label">Potential environmental effects of proposed undertaking (both construction and operational
phases):</label><br>
                                           <!--  <textarea class="form-control" name="impacts" placeholder="Environmental Impacts" rows="3"></textarea> 
                                        </div>
 -->

                                        <div class="form-group">
                                            <label>Constractional Phase Effect(Max 4)</label>
                                            <input class="form-control" name="a" placeholder="1......"><br>
                                            <input class="form-control" name="b" placeholder="2......"><br>
                                            <input class="form-control" name="c" placeholder="3......"><br>
                                        </div>

                                        <div class="form-group">
                                            <label>Operational phase Effects(Max 4)</label>
                                            <input class="form-control" name="aa" placeholder="1......"><br>
                                            <input class="form-control" name="bb" placeholder="2......"><br>
                                            <input class="form-control" name="cc" placeholder="3......"><br>
                                        </div>


                                        

                                        
                                        <div class="form-group">
                                            <label class="control-label">Potential significant risks and hazards associated with the proposal (including occupational
health and safety). State briefly relevant environmental studies already done and attach copies
as appropriate.</label>
                                            <!-- <textarea class="form-control" name="issues" placeholder="Other Environmental issues" rows="3"></textarea> 
                                        </div> -->
                                        <div class="form-group">
                                            <label>Other (Max 4)</label>
                                            <input class="form-control" name="aaa" placeholder="1......"><br>
                                            <input class="form-control" name="bbb" placeholder="2......"><br>
                                            <input class="form-control" name="ccc" placeholder="3......"><br>
                                        </div>
                                         <!--
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Password</label>
                                            <input name="password" class="form-control" required="required" id="inputSuccess" type="password" placeholder="Password" >
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Confirm Password</label>
                                            <input  name="password" class="form-control" required="required" id="inputSuccess" disabled="disabled" type="password" placeholder="Confirm Password" >
                                        </div> -->
                                        
                                        <div class="form-group">
                                            <?php echo $success; ?>
                                        </div>
                                        
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                        
                                        <?php echo $next; ?>
                                    
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once "includes/footer.php"; ?>
<?php
session_start();
    include_once "includes/connect.php";
 include_once "includes/header.php"; 

     // if ($_SESSION['pid']=='') {
     //                session_start();
     //                 $_SESSION['id_error']= "<font color='red'>Sorry, You Have to Start Your Project Regisrtation at the Begining!</font>";
     //            header("location:proponent.php");
     //           //$error2 =  $_SESSION["Sorry, You Have to Login In The System First!"];
     //            }
     //             else  { 

     $pid =$_SESSION['projectid']; //}

     $next="<button type='submit'  name='add' class='btn btn-success'>Add</button>";
    if (isset($_POST['add'])) { 

    
    $title = $_POST['title'];
    $duration =$_POST['duration'];
    $nature = $_POST['nature'];
    $unitprocesses = $_POST['unit'];
    $rawmat = $_POST['rawmat'];
    $storage = $_POST['storage'];
    $waste = $_POST['waste'];
    $chemical = $_POST['chemical'];
    $source = $_POST['source'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $start = $_POST['start'];

    // Attempt insert query execution

    $sql = "INSERT INTO pdescription(projectid,title,start, duration, nature, unitprocesses, rawmat, storage, waste,chemical,source,type,quantity) VALUES ('$pid','$title','$start', '$duration', '$nature', '$unitprocesses', '$rawmat','$storage','$waste','$chemical','$source','$type','$quantity')";

    if(mysqli_query($conn, $sql)){

        $next="<button  formaction='project_scope.php' class='btn btn-info'>Next</button>";
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
                                    <font color="teal" size="3%"> Step 2: <b>Project Descriptions</b><br></font>
                                    <span class="pull-right text-muted"><b><font color="teal" size="3%">20% Complete</b></font></span>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        </div>
                                    </div>
                        </div>



                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php echo $error;  ?>
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        
                                        <div class="form-group">
                                            <label>Project Title (Title of Proposal)</label>
                                            <input class="form-control" name="title" placeholder="Project Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Launch Date (Start Date)</label>
                                            <input class="form-control" id="date" name="start" placeholder="Expected Start Date">
                                        </div>
                                        <div class="form-group">
                                            <label>Estimated Duration(In Months)</label>
                                            <input type="number" min="0" class="form-control" name="duration" placeholder="Duration">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Other</label>
                                            <textarea class="form-control" name="other" rows="1"></textarea>
                                        </div> -->
                                        <br><b>PROPOSED UNDERTAKING/DEVELOPMENT</b>
                                        <div class="form-group">
                                            <label>Nature Of Undertaking</label>
                                            <input class="form-control" name="nature" placeholder="Nature of Undertaking">
                                        </div>
                                        <div class="form-group">
                                            <label>Unit Processes</label>
                                            <input class="form-control" name="unit" placeholder="Unit Process">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Raw Materials</label>
                                            <input class="form-control" name="rawmat" placeholder="Raw Material">
                                        </div>
                                        
                                        
                                        
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Storage Facility</label>
                                            <input class="form-control" name="storage" placeholder="Storage Facility">
                                        </div>
                                        <div class="form-group">
                                            <label>Wastes</label>
                                            <input class="form-control" name="waste" placeholder="Wastes">
                                        </div>
                                        <div class="form-group">
                                            <label>List of Chemicals</label>
                                            <input class="form-control" name="chemical" placeholder="Chemicals">
                                        </div>
                                        <div class="form-group">
                                            <label>Chemical Sources</label>
                                            <input class="form-control" name="source" placeholder="Chemical Sources">
                                        </div>
                                        <div class="form-group">
                                            <label>Chemical Types</label>
                                            <input class="form-control" name="type" placeholder="Chemical Type">
                                        </div>
                                        <div class="form-group">
                                            <label>Chemical Quantity</label>
                                            <input class="form-control" name="quantity" placeholder="Chemical Quantity">
                                        </div>
                                        
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
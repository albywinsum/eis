<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 
    
    if (isset($_POST['add'])) {  
    
    $rname =$_POST['rname'];
    $covarage =$_POST['covarage'];
    $rzone =$_POST['rzone'];
    $activity = $_POST['activity'];
    $remarks =($_POST['remarks']);

    // Attempt insert query execution

    $sql = "INSERT INTO region(rname,covarage,rzone,activity,remarks) VALUES ('$rname','$covarage','$rzone','$activity','$remarks')";

    if(mysqli_query($conn, $sql)){

        $state= "<font color='green'><b>Records Added successfully, Go to The Next Step</b></font>";

    } else{

         $state= "<font color='red'><b>The Step is Incomplete!, Please Repeat and Enter the Valid Credentials</b></font>";

    }
}
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Add New Region</h3>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <?php echo $state; ?>
                                        <div class="form-group">
                                            <label>Region Name</label>
                                            <input required="required" class="form-control" name="rname" placeholder="Region Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Region Zone</label>
                                            <select name="rzone" class="form-control">
                                               <option>Lake Zone</option>
                                                <option >Eastern Zone</option>
                                                <option >Coastal Zone</option>
                                                <option >Northern Zone</option>
                                                <option >Central</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Area Covrage(Square Km)</label>
                                            <input required="required" type="Number" class="form-control" name="covarage" placeholder="Area Covarage in Square km">
                                        </div>
                                        <div class="form-group">
                                            <label>Population(Square Km)</label>
                                            <input type="Number" step="1" class="form-control" name="population" placeholder="Population">
                                        </div>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Main Human Activity(ies)</label>
                                            <select name="activity" class="form-control">
                                               <option>Agriculture</option>
                                                <option >Fishing</option>
                                                <option >Industries</option>
                                                <option >Livestock Keeping</option>
                                                <option >Transporttion</option>
                                                <option >Tourism</option>
                                                <option >Others</option>
                                            </select>
                                        </div>
                                        
                                    




                                        <!--
                                        <div class="form-group">
                                            <label class="control-label">Phone Number</label>
                                            <input type="text" name="mobile" class="form-control" placeholder="Phone Number">
                                        </div>
                                         
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Password</label>
                                            <input name="password" class="form-control" required="required" id="inputSuccess" type="password" placeholder="Password" >
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Confirm Password</label>
                                            <input  name="password" class="form-control" required="required" id="inputSuccess" disabled="disabled" type="password" placeholder="Confirm Password" >
                                        </div> -->
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" name="remarks" rows="1"></textarea>
                                        </div>
                                        <button type="submit" name="add" class="btn btn-info">Add</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
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
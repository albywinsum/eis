<?php

    include_once "includes/connect.php";
    include_once "includes/header.php"; 
    
    if (isset($_POST['add'])) {  
    
    $dname = $_POST['dname'];
    //$rname =$_POST['rname'];
    // $rid =$_POST['rid'];
    $covarage =$_POST['covarage'];
    $population =$_POST['population'];
    $activity = $_POST['activity'];
    $remarks =($_POST['remarks']);


    $resulte = mysqli_query($conn,"SELECT * FROM region where rname='$_POST[rname]'");
      while($ro = $resulte->fetch_assoc()) { 
     $rid= $ro['rid']; }
     // echo $rid;
     // exit();
    // Attempt insert query execution

    $sql = "INSERT INTO district(dname,covarage,rid,population,activity,remarks) VALUES ('$dname','$covarage',$rid,'$population','$activity','$remarks ')";

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
                                            <label>Choose Region Which The New District Belong</label>
                                            <select name="rname" class="form-control">
                                        <?php $sqlregion = "SELECT * FROM region";
                                 $result = $conn->query($sqlregion);
                                  while($rowr = $result->fetch_assoc()) { 
                                                echo "<option>".$rowr['rname']."</option>"; } ?>
                                            </select>

                                        </div>

                                         <input hidden="hidden"  name="rid">
                                        <div class="form-group">

                                            <label>District Name</label>
                                        
                                            <input required="required" maxlength="20" class="form-control" name="dname" placeholder="District Name">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Area Covarage(Square Km)</label>
                                            <input type="Number" required="required" min="0" max="100000" class="form-control" name="covarage" placeholder="Area Covarage in Square km">
                                        </div>
                                </div>
                                 <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Population</label>
                                            <input required="required" min="0" max="70000000" type="Number" class="form-control" name="population" placeholder="Population">
                                        </div>
                                        <div class="form-group">
                                            <label>Main Human Activity(ies)</label>
                                            <select name="activity" class="form-control">
                                               <option>Agriculture</option>
                                                <option >Fishing</option>
                                                <option >Business</option>
                                                <option >Industries</option>
                                                <option >Livestock Keeping</option>
                                                <option >Transporttion</option>
                                                <option >Tourism</option>
                                                <option >Others</option>
                                            </select>
                                        </div>

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
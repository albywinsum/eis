

<?php
include_once "includes/header.php"; 

    include_once "includes/connect.php";
 
    
    if (isset($_POST['submit'])) { 
    
    $dname = $_POST['dname'];

    $takeid = "SELECT id, rid FROM district where dname='$dname'";
         $resultid = $conn->query($takeid);

        while($rowid = $resultid->fetch_assoc()) { 
            $rid = $rowid['rid'];
            $did =$rowid['id'];                                
        }

        
    
    $wname = $_POST['wname'];
    $population =$_POST['population'];
    
    $covarage =$_POST['covarage'];
    $remarks =$_POST['remarks'];
    
    if ($dname=='') {
        $status= "<font color='red'>Registration Incomplete!, Unknown District, This is Because Your District is not yet Added to the System<br>Contact Admin for more Information</font>";
    } else {
    // Attempt insert query execution

    $sql = "INSERT INTO ward(name,population,did,rid,covarage,remarks) VALUES ('$wname', '$population','$did','$rid','$covarage','$remarks')";

    if(mysqli_query($conn, $sql)){

    $status="<font color='green'>Records Added successfully.</font>";
    
    // mysqli_query($conn, "INSERT into notification(userid) SELECT userid FROM user order by userid DESC LIMIT 1"); 

    } else{

        $status= "<font color='red'>Registration Incomplete, Please Enter the Valid Credentials</font>";

    }

   
}}
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Add New Ward</h3>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <?php echo $status ?>
                                        
                                        
                                         <div class="form-group">
                                         <label>Region</label>
                                           
                                            <script type="text/javascript">
                                            var names = new DynamicOptionList();
                                            names.addDependentFields("rname","dname");
                                            <?php 
                                            $sq = "SELECT * FROM region, district where region.rid=district.rid order by region.rid";
                                             $result = $conn->query($sq);

                                            while($row = $result->fetch_assoc()) { 
                                            echo "names.forValue(\"".$row['rname']."\").addOptions(\"".$row['dname']."\");"; } ?>
                                            </script>

                                            <select class="form-control" name="rname">
                                                <?php 
                                            $sqr = "SELECT * FROM region order by rid";
                                             $resultr = $conn->query($sqr);

                                            while($rowr = $resultr->fetch_assoc()) { echo "<option value='".$rowr['rname']."'>".$rowr['rname']."</option>"; } ?>
                                            </select>
                                            </div>

                                            <div class="form-group">
                                            <label>District</label>
                                            <select class="form-control" name="dname">
                                                <script type="text/javascript">names.printOptions("district");</script>
                                            </select>
                                            </div>
                                            


                                        <div class="form-group">
                                            <label>Ward Name</label>
                                            <input required="required" class="form-control" name="wname" placeholder="Enter Name of new Ward">
                                        </div>

                                        <div class="form-group">
                                            <label>Covarage</label>
                                            <input required="required" type="number" min="0" step="1" class="form-control" name="covarage" placeholder="Covarage">
                                        </div>
                                         

                                        

                                        
                                </div>

                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"><br>Population</label>
                                            <input required="required" type="number" step="1" min="0" name="population" class="form-control" id="inputSuccess" placeholder="Population">
                                        </div>
                                        
                                         
                                        
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" placeholder="Some Additional Information....." name="remarks" rows="3"></textarea>
                                        </div>
                                            
                                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
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

<?php
include_once "includes/footer.php"; 
?>
<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 
 session_start();
     $pid =$_SESSION['projectid'];
    
    $next="<button type='submit'  name='add' class='btn btn-success'>Add</button>";
    if (isset($_POST['add'])) { 

    //$pid =($_POST['pid'];
    $labour = $_POST['labour'];
    $equipment = $_POST['equipment'];
    $productioncapacity = $_POST['productioncapacity'];
    $prodtype = $_POST['prodtype'];
    $covarage = $_POST['covarage'];
    $market = $_POST['market'];
    //$projid = $_POST['projid'];

//SITE DETAILS
    //$location = $_POST['location'];
    $district = $_POST['district'];
    $region = $_POST['region'];
    $landuse = $_POST['landuse'];
    $distance = $_POST['distance'];
    $description = $_POST['description'];



    // Attempt insert query execution

    $sql1 = "INSERT INTO pscope(projectid,labour, equipment, capacity, prodtype, covarage,market) VALUES ('$pid','$labour', '$equipment', '$productioncapacity','$prodtype','$covarage','$market')";

    $sql2 = "INSERT INTO psite(projectid,location, district, region, landuse,distance,description) VALUES ('$pid','$location', '$district', '$region','$landuse','$distance','$description')";

    if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {

        $next="<button  formaction='project_infrastructure.php' class='btn btn-info'>Next</button>";
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
                                    <font color="teal" size="3%"> Step 3: <b>Scope Of The Project</b><br></font>
                                    <span class="pull-right text-muted"><b><font color="teal" size="3%">40% Complete</b></font></span>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        </div>
                                    </div>
                        </div>



                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label>Size of Labour Force</label>
                                            <input class="form-control" name="labour" placeholder="Labour Force">
                                        </div>
                                        <div class="form-group">
                                            <label>Equipment and Machinery</label>
                                            <input class="form-control" name="equipment" placeholder="Machinery Equipment">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Production Capacity</label>
                                            <input class="form-control" name="productioncapacity" placeholder="Production capacity">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Type</label>
                                            <input class="form-control" name="prodtype" placeholder="Product type">
                                        </div>
                                        <div class="form-group">
                                            <label>Area Covered</label>
                                            <input type="number" min="0" class="form-control" name="covarage" placeholder="Coverage(in Acre)">
                                        </div>
                                        <div class="form-group">
                                            <label>Market</label>
                                            <input class="form-control" name="market" placeholder="Market">
                                        </div>
                                    </div>



                                    <div class="col-lg-6">
                                        <b>SITE</b>

                                        <br>
                                            <div class="form-group">
                                         <label>Region</label>
                                           
                                            <script type="text/javascript">
                                            <?php 
echo "var sixLevel = new DynamicOptionList(\"region\",\"district\",\"ward\");";
$sql2="SELECT region.*, district.*, ward.* FROM ward 
                                 INNER JOIN region ON region.rid = ward.rid
                                 INNER JOIN district ON district.id =  ward.did";
                                 $result1 = $conn->query($sql2);
                                  while($row1 = $result1->fetch_assoc()) { 

echo "sixLevel.forValue(\"".$row1['rname']."\").addOptionsTextValue(\"".$row1['dname']."\",\"".$row1['dname']."\");"; }
$sql="SELECT  region.*, district.*, ward.* FROM ward 
                                 INNER JOIN region ON region.rid = ward.rid
                                 INNER JOIN district ON district.id =  ward.did";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) { 

echo "sixLevel.forValue(\"".$row['rname']."\").forValue(\"".$row['dname']."\").addOptionsTextValue(\"".$row['name']."\",\"".$row['name']."\");"; }
?>
                                            </script>

                                            <div class="form-group">
                                            <select class="form-control" name="region">
                                          <option value="0" selected="">Select</option>
                                             <?php $sqlregion = "SELECT * FROM region";
                                             $result = $conn->query($sqlregion);
                                             while($rowr = $result->fetch_assoc()) { 
                                             echo "
                                             <option value=\"".$rowr['rname']."\">".$rowr['rname']."</option>"; 
                                             } ?>
                                        </select>
                                            </div>

                                            <div class="form-group">
                                            <label>District</label>
                                            <select class="form-control" name="district">
                                                <script>sixLevel.printOptions("district")</script>
                                            </select>
                                            </div>

                                            <div class="form-group">
                                            <label>Site</label>
                                            <select class="form-control" name="ward">
                                                <script>sixLevel.printOptions("ward")</script>
                                            </select>
                                            </div>
                                            
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Adjascent Land Uses</label>
                                            <input class="form-control" name="landuse" placeholder="Adjascent land Use">
                                        </div>
                                        <div class="form-group">
                                            <label>Distance to nearest residential and/or other facility</label>
                                            <input type="number" min="0" class="form-control" name="distance(in Km)" placeholder="Distance (In Km)">
                                        </div>
                                        <div class="form-group">
                                            <label>Site Description</label>
                                            <input class="form-control" name="description" placeholder="Site Description">
                                        </div>
                                                                       
                                         <div class="form-group">
                                            <?php echo $success; ?>
                                        </div>
                                        
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                        
                                        <?php echo $next;  ?>
                                    </div>
                                    
                                    </form>
                                        
                                        
                                
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
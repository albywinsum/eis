

<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 
 
    
  if (isset($_POST['report'])) {  
    
    $dname = $_POST['district'];
    $rname = $_POST['region'];
    $ward = $_POST['ward'];
    $reporter =$_SESSION['first'].", ".$_SESSION['last'];
    $reporterid = $_SESSION['id'];
    $reportdate = date('d/m/Y');
    $description =$_POST['description'];
    $agent =$_POST['agent'];
    $location = $_POST['location'];
    $covarage =$_POST['covarage'];
    $period = $_POST['period'];
    $type= $_POST['type'];
    $remarks =($_POST['remarks']);

//     // Attempt insert query execution

    $sql = "INSERT INTO event(rname,dname,ward,reporter, reporterid, reportdate, description,agent,location, covarage,period,type,remarks) VALUES ('$rname','$dname','$ward', '$reporter','$reporterid','$reportdate','$description','$agent','$location','$covarage', '$period','$type','$remarks')";

    if(mysqli_query($conn, $sql)){

         $info="<font color='green'>Records added successfully.</font>";

    } else{

        $info= " <font color='red'>Event not Added, Please Enter the Valid Credentials</font>";

    }

     
  
}


?> 

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Report Event</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <font color="teal" size="3%">Event Credentials</font>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label>Event Type</label>
                                            <select name="type"  class="form-control">
                                               <option value="Land">Land</option>
                                                <option value="Air">Air</option>
                                                <option value="Water">Water</option>
                                                <option value="Noise">Noise</option>
                                            </select>
                                        </div>
                                        

                                           
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
                                         <label>Region</label>
                                            <select required="required" class="form-control" name="region">
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
                                            <select required="required" class="form-control" name="district">
                                                <script>sixLevel.printOptions("district")</script>
                                            </select>
                                            </div>

                                            <div class="form-group">
                                            <label>Site (Ward)</label>
                                            <select required="required" class="form-control" name="ward">
                                                <script>sixLevel.printOptions("ward")</script>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Event Description</label>
                                            <textarea class="form-control" name="description"  placeholder="Description" required="required" rows="3"></textarea> 
                                        </div>
                                        
                                        
                                       <div class="form-group">
                                            <label><font color="red"><?php echo $info;  ?></font></label>
                                            
                                        </div>
                                       
                                        
                                        
                                        

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                         <label>Approx Area Covared</label>
                                            <input type="number" min="0" max="9999999999999" class="form-control" name="covarage" placeholder="Area Covered(in Acre)">
                                        <div class="form-group has-success">
                                        <label>Time Period Taken</label>
                                        <input type="number" step="1" min="0" class="form-control" name="period" placeholder="Exposure Time(In Days)">
                                        <div class="form-group">
                                            <label>Target Site</label>
                                            <input class="form-control" name="location" placeholder="Target Location(Ward)">
                                        </div>
                                        <div class="form-group">
                                            <label>Agent</label>
                                            <select name="agent" class="form-control">
                                               <option>Human</option>
                                                <option >Natural Calamity</option>
                                                <option >Animal</option>
                                                <option >Others</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" name="remarks" rows="1"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Attachment</label>
                                            <input name="attachment" type="file">
                                        </div>
                                        <button type="submit" name="report" class="btn btn-info">Report</button>
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



    </body>

</html>

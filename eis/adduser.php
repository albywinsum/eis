

<?php
include_once "includes/header.php"; 

    include_once "includes/connect.php";
 
    
    if (isset($_POST['submit'])) {  
    
    $firstname = $_POST['fname'];
    $middlename =$_POST['mname'];
    $lastname =$_POST['lname'];
    $username =$_POST['username'];
    $regionname = $_POST['rname'];
    $districtname =$_POST['dname'];
    $location =$_POST['location'];
    //$role = $_POST['role'];
    //$dateregistered = $_POST['dateregistered'];
    $email =$_POST['email'];
    $mobile = $_POST['mobile'];
    $password =md5($_POST['password']);

    // Attempt insert query execution

    $sql = "INSERT INTO user(fname,mname,lname,username,district,region,email,mobile,password) VALUES ('$firstname', '$middlename','$lastname','$username','$districtname','$regionname',  '$email','$mobile', '$password' )";

    if(mysqli_query($conn, $sql)){

    $status="<font color='green'>Records Added successfully.</font>";
    
    mysqli_query($conn, "INSERT into notification(userid) SELECT userid FROM user order by userid DESC LIMIT 1");

    } else{

        $status= "<font color='red'>User not Added, Registration Incomplete, Please Enter the Valid Credentials</font>";

    }

   
}
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Register New Reporter</h3>
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
                                            <label>First Name</label>
                                            <input class="form-control" name="fname" placeholder="First Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" name="mname" placeholder="Middle Name">
                                        </div>
                                        <div class="form-group">
                                         <label>Last Name</label>
                                            <input class="form-control" name="lname" placeholder="Last Name">
                                        </div>
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
                                            <label>Address</label>
                                            <input class="form-control" name="address" placeholder="Enter location">
                                        </div>

                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" name="location" placeholder="Enter location">
                                        </div>
                                         

                                        

                                        
                                </div>

                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"><br>Email</label>
                                            <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Phone Number</label>
                                            <input type="text" name="mobile" class="form-control" placeholder="Phone Number">
                                        </div>

                                        <div class="form-group has-success">
                                        <label>Username</label>
                                        <input class="form-control" name="username" placeholder="Username">
                                        </div>
                                         
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Password</label>
                                            <input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="
  this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
  if(this.checkValidity()) form.pwd2.pattern = this.value;
" name="password" class="form-control" required="required" id="inputSuccess" type="password" placeholder="Password" >
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Confirm Password</label>
                                            <input title="Please enter the same Password as above" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
" name="password" class="form-control" required="required" id="inputSuccess"  type="password" placeholder="Confirm Password" >
                                        </div>
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" name="remarks" rows="1"></textarea>
                                        </div>
                                        
                                            <input type="text" hidden="hidden" name="dateregistered" value=" <?php echo date('d/m/Y'); ?>" >
                                            
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
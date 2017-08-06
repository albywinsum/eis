

<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 
    
  

    if (isset($_POST['register'])) {  
        if(empty($_POST['agree'])) {
            $message= "<font color='red'>Please Confirm The Application</font>"; }

        else{

    $id = rand(1000,5000);
    $fname = $_POST['fname'];
    $mname =$_POST['mname'];
    $lname =$_POST['lname'];
    $pinno =$_POST['pinno'];
    $nationality =$_POST['nationality'];
     $businessregno =$_POST['businessregno'];
    $datereg = $_POST['datereg'];
    $role = "Individual";
    $address =$_POST['address'];
    $email =$_POST['email'];
    $tele = $_POST['tele'];
    $faxno = $_POST['faxno'];
    $spec=$_POST['spec'];
    $qualif = $_POST['qualif'];
    $experience = $_POST['experience'];
    $purpose = $_POST['purpose'];
    $oldregno = $_POST['oldregno'];
    $dateof = $_POST['dateof'];
    $appldate =date('d/m/Y');

    // Attempt insert query execution

   $sql = "INSERT INTO expert(id,fname,mname,lname,pinno, nationality, businessregno, datereg, address, email, tele,faxno,spec,qualif,experience,purpose,role, oldregno,dateof,appldate
   -- ,position,compname

   ) VALUES('$id','$fname','$mname','$lname','$pinno','$nationality','$businessregno','$datereg','$address','$email','$tele','$faxno','$spec','$qualif' ,'$experience','$purpose','$role','$oldregno','$dateof', '$appldate'
   -- ,'$position','$compname'


 )";


    if(mysqli_query($conn, $sql)){

       
        $sql2 = "INSERT INTO user(fname,mname,lname,username,role,address,email,mobile,password) VALUES ('$fname','$mname','$lname','$email','$role','$address','$email','$tele', '$email')";

        mysqli_query($conn, $sql2);




    $message="<font color='green'>Records Added successfully.</font>";
    
    // mysqli_query($conn, "INSERT into notification(userid) SELECT userid FROM user order by userid DESC LIMIT 1");

    } else{

        $message= "<font color='red'>User not Added, Registration Incomplete, Please Enter the Valid Credentials</font>";

    }

     }
    
    // Close connection

 
 

}  
 
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Register New User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <font color="teal" size="3%">User Information</font>
                        </div>
                        <div class="form-group">
                         <?php echo "<label>&nbsp &nbsp".$message."</label"; ?>
                         </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                         <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="fname" placeholder="First Name" required="required">
                                            <input class="form-control" name="mname" placeholder="Middle Name" required="required">
                                            <input class="form-control" name="lname" placeholder="Last Name" required="required">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>PIN No:</label>
                                            <input class="form-control" name="pinno" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <input class="form-control" name="nationality" placeholder="Enter Your Nationality">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="Enter location">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" placeholder="Enter location">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" name="tele" placeholder="Enter location">
                                        </div>
                                        <div class="form-group">
                                            <label>Fax No</label>
                                            <input class="form-control" name="faxno" placeholder="Enter location">
                                        </div>
                                        
                                        
                                </div>       
                                <div class="col-lg-4">
                                		
                                        
                                        <div class="form-group">
                                            <label>Business Registration No.(Where applicable)</label>
                                            <input class="form-control" name="businessregno" placeholder="Enter location">
                                            <input class="form-control" name="datereg" placeholder="Date Registered">
                                       
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label>Area of specialization and category (EIA or Audit) applying for:</label>
                                            <input class="form-control" name="spec" placeholder="Enter Your Specification">
                                        </div>
                                        <div class="form-group">
                                            <label>Academic/professional qualifications (of Members of a firm):</label>
                                            <input class="form-control" name="qualif" placeholder="Enter location">
                                        </div>
                                        <div class="form-group">
                                            <label>Experience in Environmental Assessment/Audit related activities:</label>
                                            <textarea class="form-control" name="experience" placeholder="Enter location" rows="3"></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label>Purpose of lodging the application for registration as consulting firm of
experts:</label>
                                            <input class="form-control" name="purpose" placeholder="Enter location">
                                        </div>


                                        
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-4">
                                		
                                        
                                        
                                        <div class="form-group">
                                            <label>Previous registration No. and date of registration (if applicable):</label>
                                            <input class="form-control" name="oldregno" placeholder="Enter location">
                                            <input class="form-control" name="dateof" placeholder="Previous Date of Registration ">
                                        </div>
                                        
                                        
                                        <div class="form-group"><br>
                                            <label><font color="orange"><input type="checkbox" class="btn btn-success" name="agree" value="agree" >&nbsp &nbsp  I hereby certify that the particulars given above are correct and true to the best of my
knowledge and belief.</font></label>
                                            
                                        </div>
                                        
                                        
                                        <button type="submit" name="register" class="btn btn-info">Register</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                        <button type="reset" class="btn btn-success">Next</button>
                                </div>
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



<?php

    include_once "includes/connect.php";
 include_once "includes/header3.php"; 
    
  

    if (isset($_POST['register'])) {  
        if(empty($_POST['agree'])) {
            $message= "<font color='red'>Please Confirm The Application</font>"; }

        else{


    $fname = $_POST['fname'];
    $mname =$_POST['mname'];
    $lname =$_POST['lname'];
    $id = rand(5000,10000);
    $nationality =$_POST['nationality'];
    $contactperson=$_POST['contactperson'];
    $pinno =$_POST['pinno'];
    $businessregno =$_POST['businessregno'];
    $datereg = $_POST['datereg'];
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
    $position = $_POST['position'];
    $compname = $_POST['compname'];
    $appldate =date('d/m/Y');
    $role="Firm";

    // Attempt insert query execution

   $sql = "INSERT INTO expert(id,fname, mname,lname,nationality, contactperson, pinno, businessregno, datereg, address, email, tele,faxno,spec,qualif,experience,purpose, oldregno,dateof,position,role, compname, appldate,username,password

   ) VALUES('$id','$fname','$mname','$lname','$nationality','$contactperson','$pinno','$businessregno','$datereg','$address','$email','$tele','$faxno','$spec','$qualif' ,'$experience','$purpose','$oldregno','$dateof', '$position','$role','$compname', '$appldate','$email', '$email'


 )";

    if(mysqli_query($conn, $sql)){

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
                    <h1 class="page-header">Expert Registration Form </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <font color="teal" size="3%">Please Fill The Valid Information Below</font>
                        </div>
                        <div class="form-group">
                         <?php echo "<label>&nbsp &nbsp".$message."</label"; ?>
                         </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                         <div class="form-group">
                                            <label> Name</label>
                                            <input class="form-control" name="fname" placeholder="Name of Firm" required="required"> 
                                            </div>
                                        
                                        <div class="form-group">
                                            <label>PIN No:</label>
                                            <input class="form-control" name="pinno" placeholder="PIN No:">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input class="form-control" name="contactperson" placeholder="Contact Person Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" name="tele" placeholder="Telephone">
                                        </div>
                                       
                                        
                                        
                                </div>       
                                <div class="col-lg-4">
                                		
                                         <div class="form-group">
                                            <label>Fax No</label>
                                            <input class="form-control" name="faxno" placeholder="Fax Number">
                                        </div>
                                        <div class="form-group">
                                            <label>Business Registration No.(Where applicable)</label>
                                            <input class="form-control" name="businessregno" placeholder="Reg No:">
                                            <input class="form-control" id="date2" name="datereg" placeholder="Date Registered">
                                       
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label>Area of specialization and category (EIA or Audit) applying for:</label>
                                            <input class="form-control" name="spec" placeholder="Enter Your Specification">
                                        </div>
                                        <div class="form-group">
                                            <label>Academic/professional qualifications (of Members of a firm):</label>
                                            <input class="form-control" name="qualif" placeholder="Qualification">
                                        </div>
                                        <div class="form-group">
                                            <label>Experience in Environmental Assessment/Audit related activities:</label>
                                            <textarea class="form-control" name="experience" placeholder="Experience" rows="3"></textarea> 
                                        </div>
                                       


                                        
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-4">
                                		
                                        
                                         <div class="form-group">
                                            <label>Purpose of lodging the application for registration as consulting firm of
experts:</label>
                                            <input class="form-control" name="purpose" placeholder="Purpose">
                                        </div>
                                        <div class="form-group">
                                            <label>Previous registration No. and date of registration (if applicable):</label>
                                            <input class="form-control" name="oldregno" placeholder="Reg No">
                                            <input class="form-control" id="date" name="dateof" placeholder="Previous Date of Registration ">
                                        </div>
                                        
                                        
                                        <div class="form-group"><br>
                                            <label><font color="orange"><input type="checkbox" class="btn btn-success" name="agree" value="agree" >&nbsp &nbsp  I hereby certify that the particulars given above are correct and true to the best of my
knowledge and belief.</font></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Position and Company Of an Applicant</label>
                                            <input class="form-control" name="position" placeholder="Position">
                                            </div>
                                            <div class="form-group">
                                            <input class="form-control" name="compname" placeholder="Copany Name">
                                        </div>
                                        
                                        
                                        <button type="submit" name="register" class="btn btn-info">Agree and Submit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
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




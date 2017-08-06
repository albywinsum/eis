

<?php 
// including the database connection file
include_once "includes/connect.php";
if ($_SESSION['status']!='ACCEPTED') {
    
include_once "includes/header2.php"; }
//getting id from url

elseif (condition) {
    # code...
}{

include_once "includes/header.php"; 

}

//getting id from url
session_start();
$userid = $_SESSION['hold'];
// $userid = 5078; 

if(isset($_POST['update']))
{ 

  $fname = $_POST['fname'];
    $mname =$_POST['mname'];
    $lname =$_POST['lname'];
    $nationality =$_POST['nationality'];
    $contactperson=$_POST['contactperson'];
    $pinno =$_POST['pinno'];
    $businessregno =$_POST['businessregno'];
    $datereg = $_POST['datereg'];
    $address =$_POST['address'];
    $email =$_POST['email'];
    $role =$_POST['role'];
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
    $appldate =$_POST['appldate']; //date('d/m/Y');

$query= "UPDATE expert SET  fname = '$fname', mname = '$mname', lname = '$lname', `nationality` = '$nationality', `pinno` = '$pinno', `contactperson` = '$contactperson', `businessregno` = '$businessregno', `datereg` = '$datereg', `address` = '$address', `tele` = '$tele', `faxno` = '$faxno', `email` = '$email', `spec` = '$spec', `qualif` = '$qualif', `experience` = '$experience', `purpose` = '$purpose', `role` = '$role', `oldregno` = '$oldregno', `dateof` = '$dateof', `position` = '$position', `compname` = '$compname', `appldate` = '$appldate' WHERE id = '$userid'";
    
    if (mysqli_query($conn, $query)){

      $notification="Information Updated Successifully!"; }
      
      else {
        $notification="Updated Failure!";

      }
    //redirectig to the display page. In our case, it is index.php
    header("Location: viewusers.php");
  //}
}


if(isset($_POST['updatea']))
{ 

  	$username = $_POST['username'];
	$password =$_POST['password'];
	$password2 =$_POST['password2'];

$queryaccount= "UPDATE expert SET  username = '$username', password = '$password'  WHERE id = '$userid'";
	if ($password==$password2) {
		mysqli_query($conn, $queryaccount);
		$success="<font color='green'>Username and Password Updated Successifully!</font>";
	}
	else {
		$mismatch="<font color='red'>Password Do not Match!</font>";

	}

}


//$userid = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM expert WHERE id='$userid'");

while($row = mysqli_fetch_array($result))
{
    $fname =$row['fname'];
    $mname =$row['mname'];
    $lname =$row['lname'];
    $nationality =$row['nationality'];
    $contactperson =$row['contactperson'];
    $pinno =$row['pinno'];
    $businessregno =$row['businessregno'];
    $datereg =$row['datereg'];
    $address =$row['address'];
    $tele =$row['tele'];
    $faxno =$row['faxno'];
    $email = $row['email'];
    $username =$row['username'];
    $password =$row['password'];
    $spec =$row['spec'];
    $qualif =$row['qualif'];
    $experience = $row['experience'];
    $role = $row['role'];
    $purpose =$row['purpose'];
    $oldregno =$row['oldregno'];
    $dateof =$row['dateof'];
    $position =$row['position'];
    $compname =$row['compname'];
    $appldate =$row['appldate'];
    $photo =$row['photo'];
    
}

// //  
?>        
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">User Details</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details <button type="submit" name="update" class="btn btn-warning">
                                        Update 
                                    </button>
                        </div>
                        <!-- /.panel-heading -->
                         <div class="panel-body">
                         
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover">
                                <?php echo $notification; ?>
                                    <thead>
                                        <tr>
                                            <th>Attribute Name</th>
                                            <th>Value</th>
                                            
                                        </tr>
                                    </thead>
                                     <tbody>
                     
                                 
                         </tr>
                    <tr>
                  
                         <td>First Name</td>
                         <td><font color="black"><input name="fname" type="text" value="<?php echo $fname; ?>"></font></td>
                   
                    
                  
                         </tr>
                    <tr>
                  
                         <td>Middle Name</td>
                         <td><font color="black"><input name="mname" type="text" value="<?php echo $mname; ?>"></font></td>
                   
                    
                  
                        </tr>
                    <tr>
                  
                         <td>Sur Name</td>
                         <td><font color="black"><input name="lname" type="text" value="<?php echo $lname; ?>"></font></td>
                   
                    
                    <tr>
                  
                         <td>Nationality</td>
                         <td><font color="black"><input name="nationality" type="text" value="<?php echo $nationality; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Contact Person</td>
                         <td><font color="black"><input name="contactperson" type="text" value="<?php echo $contactperson; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>PIN No</td>
                         <td><font color="black"><input name="pinno" type="text" value="<?php echo $pinno; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Bussiness Reg No</td>
                         <td><font color="black"><input name="businessregno" type="text" value="<?php echo $businessregno; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Date Registered</td>
                         <td><font color="black"><input name="datereg" type="text" value="<?php echo $datereg; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Address</td>
                         <td><font color="black"><input name="address" type="text" value="<?php echo $address; ?>"></font></td>
                   
                    </tr>
                    
                    <tr>
                  
                         <td>Email</td>
                         <td><font color="black"><input name="email" type="text" value="<?php echo $email; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Mobile Phone</td>
                         <td><font color="black"><input name="tele" type="text" value="<?php echo $tele; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Fax</td>
                         <td><font color="black"><input name="faxno" type="text" value="<?php echo $faxno; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Specification</td>
                         <td><font color="black"><input name="spec" type="text" value="<?php echo $spec; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Role</td>
                         <td><font color="black"><input name="role" type="text" value="<?php echo $role; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Qualification</td>
                         <td><font color="black"><input name="qualif" type="text" value="<?php echo $qualif; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Experience </td>
                         <td><font color="black"><input name="experience" type="text" value="<?php echo $experience; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Purpose</td>
                         <td><font color="black"><input name="purpose" type="text" value="<?php echo $purpose; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Previous Business Reg No</td>
                         <td><font color="black"><input name="oldregno" type="text" value="<?php echo $oldregno; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Date of Old Registration</td>
                         <td><font color="black"><input name="dateof" type="text" value="<?php echo $dateof; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Position</td>
                         <td><font color="black"><input name="position" type="text" value="<?php echo $position; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Company Name</td>
                         <td><font color="black"><input name="compname" type="text" value="<?php echo $compname; ?>"></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Date of Application</td>
                         <td><font color="black"><input name="appldate" type="text" value="<?php echo $appldate; ?>"></font></td>
                   
                    </tr>
                   </tbody>
               </table>
               <button type="submit" name="update" class="btn btn-warning">
                                        Update 
                                    </button>
          </div>
                            <!-- /.table-responsive -->
     </div>
                    </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-4">
               <form role="form" enctype="multipart/form-data" action="upload.php" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Picture 
                         <button type="submit" name="uploadphoto" class="btn btn-warning btn-xs">
                                        Update 
                          </button>
						</div>

								<img src='<?php echo "uploads/profile/".$photo; ?>' width="100%"  height="100%">		

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="form-group">
                                            <input type="file" name="file" />
                                        </div>
                        </div>
                        <!-- /.panel-body -->
                        
                    </div>
                    <!-- /.panel -->
                    </form>
                </div>
                <div class="col-lg-4">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Login Information <button type="submit" name="updatea" class="btn btn-warning">
                                        Update 
                                    </button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                 <?php echo $success; ?>
                                  <?php echo $mismatch; ?>
                                    <thead>
                                        <tr>
                                            
                                            <th>Attribute Name</th>
                                            <th>Value</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                  		
                                            <td>Username</td>
                                            <td><font color="black"><input name="username" type="text" value="<?php echo $username; ?>"></font></td>
                                            
                                        </tr>
                                        <tr>
                                            
                                            <td>Password</td>
                                            <td><font color="black"><input name="password" type="password" value="<?php echo $password; ?>"></font></td>
                                            
                                        </tr>
                                        <tr>
                                            
                                            <td>Confirm Password</td>
                                            <td><font color="black"><input name="password2" type="password" value="<?php echo $password; ?>"></font></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Date Registered</td>
                                            
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once "includes/footer.php"; ?>

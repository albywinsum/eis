<?php 




// including the database connection file
include_once "includes/connect.php";
if ($_SESSION['status']!='ACCEPTED') {
    
include_once "includes/header2.php"; }
//getting id from url

else{

include_once "includes/header.php"; 

}
$id = $_GET['id'];
session_start();
$_SESSION['hold']=$id;

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM expert WHERE id=$id");

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
    $userid =$row['id'];
    $email = $row['email'];
    $username =$row['username'];
    $spec =$row['spec'];
    $qualif =$row['qualif'];
    $experience = $row['experience'];
    $role = $row['role'];
    $purpose =$row['purpose'];
    $oldregno =$row['oldregno'];
    $dateof =$row['dateof'];
    $status =$row['status'];
    $position =$row['position'];
    $compname =$row['compname'];
    $appldate =$row['appldate'];
    $photo =$row['photo'];
    
}

//  
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
                            Details  <?php if($status=='ACCEPTED'){
                             echo "<a  href='editexpert.php?id=".$userid."><button type='button' class='btn btn-warning'>
                                        Edit 
                                    </button></a>"; } ?> 
                        </div>
                        <!-- /.panel-heading -->
                         <div class="panel-body">
                         
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover">
                                
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
                         <td><font color="green"><?php echo $fname; ?></font></td>
                   
                    
                  
                         </tr>
                    <tr>
                  
                         <td>Middle Name</td>
                         <td><font color="green"><?php echo $mname; ?></font></td>
                   
                    
                  
                        </tr>
                    <tr>
                  
                         <td>Sur Name</td>
                         <td><font color="green"><?php echo $lname; ?></font></td>
                   
                    
                    <tr>
                  
                         <td>Nationality</td>
                         <td><font color="green"><?php echo $nationality; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Contact Person</td>
                         <td><font color="green"><?php echo $contactperson; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>PIN No</td>
                         <td><font color="green"><?php echo $pinno; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Bussiness Reg No</td>
                         <td><font color="green"><?php echo $businessregno; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Date Registered</td>
                         <td><font color="green"><?php echo $datereg; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Address</td>
                         <td><font color="green"><?php echo $address; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Username</td>
                         <td><font color="green"><?php echo $username; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Email</td>
                         <td><font color="green"><?php echo $email; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Mobile Phone</td>
                         <td><font color="green"><?php echo $tele; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Fax</td>
                         <td><font color="green"><?php echo $faxno; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Specification</td>
                         <td><font color="green"><?php echo $spec; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Role</td>
                         <td><font color="green"><?php echo $role; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Qualification</td>
                         <td><font color="green"><?php echo $qualif; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Experience </td>
                         <td><font color="green"><?php echo $experience; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Purpose</td>
                         <td><font color="green"><?php echo $purpose; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Previous Business Reg No</td>
                         <td><font color="green"><?php echo $oldregno; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Date of Old Registration</td>
                         <td><font color="green"><?php echo $dateof; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Position</td>
                         <td><font color="green"><?php echo $position; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Company Name</td>
                         <td><font color="green"><?php echo $compname; ?></font></td>
                   
                    </tr>
                    <tr>
                  
                         <td>Date of Application</td>
                         <td><font color="green"><?php echo $appldate; ?></font></td>
                   
                    </tr>
                   </tbody>
               </table>
               
          </div>
                            <!-- /.table-responsive -->
     </div>
                    
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-4">
               <form role="form" enctype="multipart/form-data" action="uploadphoto.php" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Profile Picture 
                         </div>

                                <img src='<?php echo "uploads/profile/".$photo.""; ?>' width="100%"  height="100%">     

                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
                        
                    </div>
                    <!-- /.panel -->
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Some Other Information
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S\N</th>
                                            <th>Attribute Name</th>
                                            <th>Value</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                            <td>Category</td>
                                            <td><font color="green"><?php echo $role; ?></font></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>State</td>
                                            <td>Thornton</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Date Registered</td>
                                            <td>the Bird</td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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

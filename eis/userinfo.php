

<?php include_once "includes/header.php"; 


// including the database connection file
include_once "includes/connect.php";


//getting id from url
$userid = $_GET['userid'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM expert WHERE id=$userid");

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
    $position =$row['position'];
    $compname =$row['compname'];
    $appldate =$row['appldate'];
    
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details
                        </div>
                        //experience,purpose, oldregno,dateof,position,role, compname, appldate
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <b>
                         <p>First Name:&nbsp;&nbsp;<font color="orange"><?php echo $fname; ?></font></p>
                         <p>Middle Name:&nbsp;&nbsp;<font color="orange"><?php echo $mname; ?></font></p>
                         <p>Sur Name:&nbsp;&nbsp;<font color="orange"><?php echo $lname; ?></font></p>
                         <p>Sex:&nbsp;&nbsp;<font color="orange"><?php echo $nationality; ?></font></p>
                         <p>User ID:&nbsp;&nbsp;<font color="orange"><?php echo $userid; ?></font></p>
                         <p>Contact Person:&nbsp;&nbsp;<font color="orange"><?php echo $contactperson; ?></font></p>
                         <p>PIN No:&nbsp;&nbsp;<font color="orange"><?php echo $pinno; ?></font></p>
                         <p>Bussiness Reg No:&nbsp;&nbsp;<font color="orange"><?php echo $businessregno; ?></font></p>
                         <p>Date Registered:&nbsp;&nbsp;<font color="orange"><?php echo $datereg; ?></font></p>
                         <p>Address:&nbsp;&nbsp;<font color="orange"><?php echo $address; ?></font></p>
                         <p>Username:&nbsp;&nbsp;<font color="orange"><?php echo $username; ?></font></p>
                         <p>Email:&nbsp;&nbsp;<font color="orange"><?php echo $email; ?></font></p>
                         <p>Mobile Phone:&nbsp;&nbsp;<font color="orange"><?php echo $tele; ?></font></p>
                         <p>Fax:&nbsp;&nbsp;<font color="orange"><?php echo $faxno; ?></font></p>
                         <p>Specification:&nbsp;&nbsp;<font color="orange"><?php echo $spec; ?></font></p>
                         <p>Role:&nbsp;&nbsp;<font color="orange"><?php echo $role; ?></font></p>
                         <p>Qualification:&nbsp;&nbsp;<font color="orange"><?php echo $qualif; ?></font></p>
                         <p>Experience :&nbsp;&nbsp;<font color="orange"><?php echo $experience; ?></font></p>
                         <p>Purpose:&nbsp;&nbsp;<font color="orange"><?php echo $purpose; ?></font></p>
                         <p>Previous Business Reg No:&nbsp;&nbsp;<font color="orange"><?php echo $oldregno; ?></font></p>
                         <p>Date of Old Registration:&nbsp;&nbsp;<font color="orange"><?php echo $dateof; ?></font></p>
                         <p>Position:&nbsp;&nbsp;<font color="orange"><?php echo $position; ?></font></p>
                         <p>Company Name:&nbsp;&nbsp;<font color="orange"><?php echo $compname; ?></font></p>
                         <p>Date of Application:&nbsp;&nbsp;<font color="orange"><?php echo $appldate; ?></font></p>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profile Picture
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div><div class="col-lg-4">
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
                                            <td>1</td>
                                            <td>Total Event Reported</td>
                                            <td>Otto</td>
                                            
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
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
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
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
                <!-- /.col-lg-6 -->
                <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once "includes/footer.php"; ?>

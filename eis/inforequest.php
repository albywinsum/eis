<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 

 //getting id from url
$id = $_GET['id'];
session_start();
$_SESSION['hold']=$id;

//selecting data associated with this particular id
//$result2 = mysqli_query($conn, "SELECT * FROM accessdata WHERE requestid=$id");

$result2 = mysqli_query($conn, "SELECT * FROM accessinfo WHERE id=$id");

while($row = mysqli_fetch_array($result2))
{
    $fname =$row['fname'];
    $mname =$row['mname'];
    $lname =$row['lname'];
    $address =$row['address'];
    $tele =$row['tele'];
    $faxno =$row['faxno'];
    //$userid =$row['id'];
    $email = $row['email'];

    $fname2 =$row['fname2'];
    $mname2 =$row['mname2'];
    $lname2 =$row['lname2'];
    $address2 =$row['address2'];
    $tele2 =$row['tele2'];
    $faxno2 =$row['faxno2'];
    $email2 = $row['email2'];
    
    $dateof =$row['dateof'];
    $prof =$row['prof'];
    $design =$row['design'];
    
}


?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Details for Access Information</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <font color="teal" size="3%"><b>Applicant Details</b></font>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">

                            <div class="col-lg-5">
                            <label>APPLICANT DETAILS</label>
                            <?php
                                        echo "<ol type='1'>
                                        <label>Name</label>";
                                        echo "<li>".$fname." ".$mname." ".$lname."</li>
                                              <label>Address</label>
                                              <li>".$address ."</li>
                                              <label>Phone</label>
                                              <li>".$tele."</li>
                                              <label>Email</label>
                                              <li>".$email ."</li>
                                              <label>Fax No</label>
                                              <li>".$faxno ."</li>
                                              <label>Proffession</label>
                                              <li>".$prof ."</li>";?>
                                              </div>
                                              <div class="col-lg-6">
                                              <label>APPLICANT'S EMPLOYER DETAILS</label>
                                              <?php
                                              echo "<ol type='1' start='7'>";
                                               echo "<label>Employer Name</label>
                                               <li>".$fname2." ".$mname2." ".$lname2."</li>
                                              
                                              <label>Address</label>
                                              <li>".$address2 ."</li>
                                              <label>Email</label>
                                              <li>".$email2 ."</li>
                                              <label>Fax No</label>
                                              <li>".$faxno2 ."</li>
                                              <label>Telephone</label>
                                              <li>".$tele2 ."</li>
                                              <label>Designation</label>
                                              <li>".$design  ."</li>";
                                              echo " </ol>";

                                              echo "<label>Application Date</label>
                                              <li>".$dateof ."</li>";
                                              ?>
                                                </div>
                                           

                                              
                                </div>
                                <div class="col-lg-8">
                                <br><br>
                                    
                                    <div class="form-group">
                                            
                                            </div>

                                            <div class="form-group">
                                            <label>Requested type of Access</label>
                                            </div>
                                        <?php 
$result = mysqli_query($conn, "SELECT * FROM accessdata WHERE requestid=$id");
echo "<ol type='1'>";
while($row = $result->fetch_assoc()) { 
echo "<li>".$row['info'] ."</li>";

}
echo " </ol>";
?>

                                          
                                                      

                                </div>
                                        <!-- /.col-lg-6 (nested)-->
                                
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
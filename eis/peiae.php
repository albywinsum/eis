<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 

 session_start();
 $pid =$_SESSION['projectid'];

     $next="<button type='submit'  name='add' class='btn btn-success'>Finish</button>";
    $progress="80";
       $label="80%";
        $color="presuccess";

    if (isset($_POST['add'])) {  
        if(empty($_POST['agree'])) {
            $message= "<font color='red'>Please Confirm The Application</font>"; }

        else{ 

    //$pid =($_POST['pid'];
    $certficateno = $_POST['certficateno'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    //$propname =$_POST['fname']." ".$_POST['mname']." ".$_POST['lname']; //$_POST['propname'];
    $address =$_POST['address'];
    //$contperson =$_POST['contperson'];
    $tele = $_POST['tele'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $behalf = $_POST['behalf'];

    // Attempt insert query execution

    $sql = "INSERT INTO pdeia(projectid,certficateno, fname, mname, lname, address,tele,fax,email, position, behalf) VALUES ('$pid','$certficateno', '$fname', '$mname','$lname','$address','$tele','$fax','$email', '$position', '$behalf')";

    if(mysqli_query($conn, $sql)){

        $next="<button  formaction='project_description.php' disabled='disabled' class='btn btn-info'>END</button>";
       $success= "<font color='green'><b>Your Project Has successfully Registered Click this link to view You Project Information</b></font>";
       $progress="100";
       $label="100%";
        $color="success";

session_start();
unset($_SESSION["projectid"]); 

        //header("Location:home.php"); 
    }

        //$error= "<b>Records added successfully.</b>";
        

    else{

         $error= "<font color='red'><b>The Step is Incomplete!, Please Repeat and Enter the Valid Credentials</b></font>";
         //header("Location:home.php"); 
        

    }
} }
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
                                    <font color="teal" size="3%"> Step 1: <b>Details of Environmenta Impact Assesment Expert</b><br></font>
                                    <span class="pull-right text-muted"><b><font color="teal" size="3%"><?php echo $label; ?> Complete</b></font></span>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-<?php echo $color; ?>" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress; ?>%">
                                        </div>
                                    </div>
                        </div>



                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php echo $error; ?>
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        
                                        <div class="form-group">
                                            <label>Name (Individual or Firm)</label>
                                            <input class="form-control" name="fname" placeholder="First Name">
                                            <br>
                                            <input class="form-control" name="mname" placeholder="Middle Name">
                                            <br>
                                            <input class="form-control" name="lname" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Certificate Number</label>
                                            <input class="form-control" name="certficateno" placeholder="Certificate No">
                                        </div>
                                        <div class="form-group">
                                            <label>Full Address</label>
                                            <input class="form-control" name="address" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                         <label>Telephone Number</label>
                                            <input type="Number" min="0" class="form-control" name="tele" placeholder="Telephone">
                                        </div>
                                        <div class="form-group">
                                        <label>Fax</label>
                                        <input type="Number" min="0" name="fax" placeholder="Fax Number" class="form-control" >
                                        </div>
                                        
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="inputSuccess">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputSuccess" placeholder="Email">
                                        </div>


                                        <div class="form-group"><br>
                                        <h3 class="page-header">Declaration By The Proponent</h3>
                                            <label><font color="orange"><input checked="checked" type="checkbox" class="btn btn-success" name="agree" value="agree" >&nbsp &nbsp  I hereby certify that the particulars given above are correct and true to the best of my
knowledge and belief.</font></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Position of Proponent:</label>
                                            <input class="form-control" name="position" placeholder="Position">
                                            </div>
                                            <div class="form-group">
                                             <label>On Behalf Of:</label>
                                            <input class="form-control" name="behalf" placeholder="On Behalf Of">
                                        </div>
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
                                        <div class="form-group">
                                            <?php echo $success; ?>
                                        </div>
                                        
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                        
                                        <?php echo $next; ?>
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
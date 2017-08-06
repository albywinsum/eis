<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 
 
//  $header1 = <<<"EOD"
// <h1><br>Environmental Evaluation System<a href="../home.php" style="text-decoration:none;background-color:teal;color:black;">&nbsp;<span style="color:white;">EE</span><span style="color:orange;">S </span></a></h1>
// EOD;
     $next="<button type='submit'  name='add' class='btn btn-success'>Add</button>";
 


    if (isset($_POST['add'])) { 

    $projid =$file = "P-".rand(1000,10000);
    $pinno = $_POST['pinno'];
    $fname = $_SESSION['first'];
    $mname = $_SESSION['middle'];
    $lname = $_SESSION['last'];
    $userid = $_SESSION[id];
    //$propname =$_POST['fname']." ".$_POST['mname']." ".$_POST['lname']; //$_POST['propname'];
    $address =$_POST['adderss'];
    $contperson =$_POST['contperson'];
    $tele = $_POST['tele'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    //$projid = $_POST['projid'];

    // Attempt insert query execution

    $sql = "INSERT INTO proponent(projectid,pinno, fname, mname, lname,userid, address,contperson,tele,fax,email) VALUES ('$projid','$pinno', '$fname', '$mname','$lname','$userid','$address','$contperson','$tele','$fax','$email')";

    if(mysqli_query($conn, $sql)){

        $next="<button  formaction='project_description.php' class='btn btn-info'>Next</button>";
       $success= "<font color='green'><b>Records Added successfully, Go to The Next Step</b></font>";

       session_start();
        $_SESSION['projectid']=$projid;
        //header("Location:home.php"); 
    }

        //$error= "<b>Records added successfully.</b>";
        

    else{

         $error= "<font color='red'><b>The Step is Incomplete!, Please Repeat and Enter the Valid Credentials</b></font>";
         //header("Location:home.php"); 
        

    }
}


if (isset($_POST['next'])) { 
     session_start();
        $_SESSION['projectid']=$projid;
        }
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Register Project</h3>
                </div>
                <!-- 






                /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                    <font color="teal" size="3%"> Step 1: <b>Proponent Details</b><br></font>
                                    <span class="pull-right text-muted"><b><font color="teal" size="3%">2% Complete</b></font></span>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                                        </div>
                                    </div>
                        </div>



                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label>PIN Number</label>
                                            <input class="form-control" name="pinno" placeholder="PIN Number">
                                        </div>
                                        <div class="form-group">
                                            <label>Full Address</label>
                                            <input class="form-control" name="address" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input class="form-control" name="contperson" placeholder="Contact Person">
                                        </div>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                         <label>Telephone Number</label>
                                            <input type="number" step="1" min="0" class="form-control" name="tele" placeholder="Telephone">
                                        </div>
                                        <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" name="fax" placeholder="Fax No:" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="inputSuccess">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputSuccess" placeholder="Email">
                                        </div>
                                        <input type="hidden"  name="userid" value="<?php echo $_SESSION[id]; ?>" >

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
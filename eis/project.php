<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 
//  $header1 = <<<"EOD"
// <h1><br>Environmental Evaluation System<a href="../home.php" style="text-decoration:none;background-color:teal;color:black;">&nbsp;<span style="color:white;">EE</span><span style="color:orange;">S </span></a></h1>
// EOD;
    
    $next="<button type='submit'  name='add' class='btn btn-success'>Add</button>";
    if (isset($_POST['add'])) { 

    //$pid =($_POST['pid'];
    $title = $_POST['title'];
    // $fname = $_POST['fname'];
    // $mname = $_POST['mname'];
    // $lname = $_POST['lname'];
    //$propname =$_POST['fname']." ".$_POST['mname']." ".$_POST['lname']; //$_POST['propname'];
    $location =$_POST['location'];
    $duration =$_POST['duration'];
    $other = $_POST['other'];

    // Attempt insert query execution

    $sql = "INSERT INTO project(title,location,duration,other) VALUES ('$title','$location','$duration','$other')";

    if(mysqli_query($conn, $sql)){

         $next="<button  formaction='project_description.php' class='btn btn-info'>Next</button>";
       $success= "<font color='green'><b>Records Added successfully, Go to The Next Step</b></font>";

    } else{

       $error= "<font color='red'><b>The Step is Incomplete!, Please Repeat and Enter the Valid Credentials</b></font>";

    }
}
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
                           <font color="teal" size="3%">Step 2:Project Details</font>
                        </div>
                        <div class="col-md-10 col-md-offset-3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php echo $error; ?>
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label>Project Title</label>
                                            <input class="form-control" name="title" placeholder="Region Zone">
                                        </div>
                                        <div class="form-group">
                                            <label>Name of Proponent</label>
                                            <input class="form-control" name="fname" placeholder="First Name">
                                            <br>
                                            <input class="form-control" name="mname" placeholder="Middle Name">
                                            <br>
                                            <input class="form-control" name="lname" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" name="location" placeholder="Area Covarage in Square km">
                                        </div>
                                        <div class="form-group">
                                            <label>Estimated Duration</label>
                                            <input class="form-control" name="duration" placeholder="Population(X10000)">
                                        </div>
                                        
                                        
                                <!-- </div>
                                <!-- /.col-lg-6 (nested) -->
                              <!--  <div class="col-lg-6">
                                         <label>Last Name</label>
                                            <input class="form-control" name="lname" placeholder="Last Name">
                                        <div class="form-group has-success">
                                        <label>Username</label>
                                        <input class="form-control" name="username" placeholder="Username">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"><br>Email</label>
                                            <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email">
                                        </div>
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
                                            <label>Other</label>
                                            <textarea class="form-control" name="other" rows="1"></textarea>
                                        </div>
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
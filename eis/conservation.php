

<?php

     include_once "includes/connect.php";
 include_once "includes/header.php"; 
    
  if (isset($_POST['report'])) {  
    
    $dname = $_POST['dname'];
    $reporter =$_POST['reporter'];
    $reportdate =$_POST['reportdate'];
    $category =$_POST['category'];
    $agent =$_POST['agent'];
    $location = $_POST['location'];
    $covarage =$_POST['covarage'];
    $period = $_POST['period'];
    $type= $_POST['type'];
    $remarks =($_POST['remarks']);

//     // Attempt insert query execution

    $sql = "INSERT INTO event(dname,reporter, reportdate, category,agent,location, covarage,period,type,remarks) VALUES ('$dname', '$reporter','$reportdate','$category','$agent','$location','$covarage', '$period','$type','$remarks')";

    if(mysqli_query($conn, $sql)){

         $message="<font color='green'>Records added successfully.</font>";

    } else{

        $message= "<font color='red'>Event not Added, Please Enter the Valid Credentials</font>";

    }

     
    
    // Close connection

    $conn->close();
}
?> 

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Report Event</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <font color="teal" size="3%">Event Credentials</font>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label>Event Category</label>
                                            <select name="category" class="form-control">
                                            <option>Conservation</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Type</label>
                                            <select name="type"  class="form-control">
                                               <option>Land</option>
                                                <option >Air</option>
                                                <option >Water</option>
                                                <option >Noise</option>
                                                <option >Other</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>District Name</label>
                                            <input class="form-control" name="dname" placeholder="District Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Reporter Name: &nbsp <?php echo $_SESSION['last'].', '.$_SESSION['first'].'.'; ?></label>
                                            <input type="hidden"  name="reporter" value="<?php echo $_SESSION['last'].", ".$_SESSION['first']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Date Reported:&nbsp <?php echo date('d/m/Y'); ?></label>
                                            
                                            <input type="hidden"  name="reportdate" value="<?php echo date('d/m/Y'); ?>" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Reporter Last Name</label>
                                            <input class="form-control" disabled="" name="lname" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Attachment</label>
                                            <input name="attachment" type="file">
                                        </div>
                                       <div class="form-group">
                                            <label><font color="red"><?php echo $message;  ?></font></label>
                                            
                                        </div>
                                       
                                        
                                        
                                        

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                         <label>Area Covared</label>
                                            <input class="form-control" name="covarage" placeholder="Area Covered">
                                        <div class="form-group has-success">
                                        <label>Time Period Taken</label>
                                        <input class="form-control" name="period" placeholder="Exposure Time">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" name="location" placeholder="Event Location">
                                        </div>

                                        <div class="form-group">
                                            <label>Agent</label>
                                            <select name="agent" class="form-control">
                                               <option>Government</option>
                                                <option >Natural Conservation</option>
                                                <option >Society</option>
                                                <option >Individual</option>
                                                <option >NGOs</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" name="remarks" rows="1"></textarea>
                                        </div>
                                        <button type="submit" name="report" class="btn btn-info">Report</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                         <div class="form-group">
                                            <label><br>Import Bulk Data Events(Many Events)</label>
                                            <input name="file" type="file">
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

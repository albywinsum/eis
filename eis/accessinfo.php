

    
 <?php 
    include_once "includes/connect.php";
 include_once "includes/header3.php"; 

 
 if (isset($_POST['register'])) {  
        if(empty($_POST['option'])) {
            $note= "<font color='red'>Please Tick atleast one Information you want to access in this Application</font>"; }

        else{


    $fname = $_POST['fname'];
    $mname =$_POST['mname'];
    $lname =$_POST['lname'];
    $address =$_POST['address'];
    $email =$_POST['email'];
    $tele = $_POST['tele'];
    $faxno = $_POST['faxno'];

    $fname2 = $_POST['fname2'];
    $mname2 =$_POST['mname2'];
    $lname2 =$_POST['lname2'];
    $address2 =$_POST['address2'];
    $email2 =$_POST['email2'];
    $tele2 = $_POST['tele2'];
    $faxno2 = $_POST['faxno2'];

    $design=$_POST['design'];
    $prof = $_POST['prof'];
    $id = rand(1,1000);
    $title =$_POST['title'];
    $author=$_POST['author'];
    $year = $_POST['year'];
    $dateof=date('d/m/Y');
    // Attempt insert query execution

   $sql = "INSERT INTO accessinfo(id,fname, mname,lname, address, email, tele,faxno,fname2, mname2,lname2, address2, email2, tele2,faxno2,design,prof,dateof,year,title,author) VALUES('$id','$fname','$mname','$lname','$email','$address','$tele','$faxno','$fname2','$mname2','$lname2','$email2','$address2','$tele2','$faxno2','$design','$prof','$dateof','$year','$title','$author' )";

    if(mysqli_query($conn, $sql)){

 
// Counting number of checked checkboxes.
$checked_option = count($_POST['option']);
echo "<b>You have selected following ".$checked_option." option(s): </b><br/>";
//Loop to store and display values of individual checked checkbox.
echo "<ol type='1'>";
foreach($_POST['option'] as $selected) {

echo "<li>".$selected ."</li></p>";

 mysqli_query($conn, "INSERT INTO accessdata(requestid, info) VALUES ('$id', '$selected')");

}
echo "</ol>";
 $note="<font color='green'>Records Added successfully.</font>";

}
else{
$note= "<font color='red'> Registration Incomplete, Please Enter the Valid Credentials</font>";
}



}
}
 ?>

        <div  id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 

                    <h3 class="page-header">Access Information Form.</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
<div class="container">
<div class="main">
		                <div class="col-lg-6">
                                        <label><b>APPLICANT DETAILS</b></label>
                                        <?php 
                                        echo $note; ?>
                                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input class="form-control" name="fname" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" name="mname" placeholder="Middle Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" name="lname" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" type="number" min="0" step="1" maxlength="10" name="tele" placeholder="Telephone">
                                        </div>
                                        <div class="form-group">
                                            <label>Fax No</label>
                                            <input class="form-control" name="faxno" placeholder="Fax No">
                                         </div>   
                                            <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Profession</label>
                                            <input class="form-control" name="prof" placeholder="Profession">
                                        </div>
                                        
                                        
                                <!-- </div> 
                                <div class="col-lg-4"> -->
                                 <div class="form-group">
                                 <label><b>EMPLOYER DETAILS</b></label><br>
                                            <label>Name Of Employer (If Applicable)</label>
                                            <input class="form-control" name="fname2" placeholder="First Name"> <br>
                                            <input class="form-control" name="mname2" placeholder="Middle Name"><br>
                                            <input class="form-control" name="lname2" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address2" placeholder="Address (Employer)">
                                        </div>
                                         <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" type="number" min="0" step="1" max="0999999999" name="tele2" placeholder="Telephone (Employer)">
                                        </div>
                                        
                                        
                                </div>
                                <div class="col-lg-6"> 

                                        <div class="form-group">
                                            <label>Fax No</label>
                                            <input class="form-control" type="number" min="0" step="1" maxlength="15" name="faxno2" placeholder="Fax No (Employer)">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email2" placeholder="Email (Employer)">
                                        </div>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input class="form-control" name="design" placeholder="Designation (Employer)">
                                        </div>

                                <label><b>INFORMATION REQUIRED (Tick As Appropriate)</b></label><br>

									
									<input type="checkbox" name="option[]" value="Project Brief"> <label> Project Brief</label><br>
									<input type="checkbox" name="option[]" value="Environmental Impact Assessment Statement"> <label>Environmental Impact Assessment Statement</label><br>
									<input type="checkbox" name="option[]" value="Environmental Audit Report"> <label>Environmental Audit Report</label><br>
									<input type="checkbox" name="option[]" value="Environmental Monitoring Report"> <label>Environmental Monitoring Report</label><br>
									<input type="checkbox" name="option[]" value="Record of Decision (ROD) for Environmental Impact Assessment Approvals"> <label> Record of Decision (ROD) for Environmental Impact Assessment Approvals</label><br>
                                    <input type="checkbox" name="option[]" value="Certificate for Environmental Impact Assessment"> <label> Certificate for Environmental Impact Assessment</label><br>
                                    <input type="checkbox" name="option[]" value="Environmental Impact Assessment Experts (Individuals)"> <label> Environmental Impact Assessment Experts (Individuals)</label><br> <br>

                                    <div class="form-group">
                                            <label>Title Of Document</label>
                                            <input class="form-control" name="title" placeholder="Document Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Author</label>
                                            <input class="form-control" name="author" placeholder="Author">
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <input type="number" min="1950" max="2017" step="1" class="form-control" name="year" placeholder="Year">
                                        </div>

                                       <label><b>HOW THE INFORMATION IS EXTRACTED?</b></label><br>

                                        <input type="checkbox" name="option[]" value="Environmental Impact Assessment Statement"> <label>Environmental Impact Assessment Statement</label><br>
                                    <input type="checkbox" name="option[]" value="Environmental Audit Report"> <label>Environmental Audit Report</label><br><br>

                                     <label><b>PURPOSE FOR REQUIRING THE INFORMATION/b></label><br>

                                    <input type="checkbox" name="option[]" value="Environmental Monitoring Report"> <label>Environmental Monitoring Report</label><br>
                                    <input type="checkbox" name="option[]" value="Record of Decision (ROD) for Environmental Impact Assessment Approvals"> <label> Record of Decision (ROD) for Environmental Impact Assessment Approvals</label><br>
                                    <input type="checkbox" name="option[]" value="Certificate for Environmental Impact Assessment"> <label> Certificate for Environmental Impact Assessment</label><br>
                                    <input type="checkbox" name="option[]" value="Environmental Impact Assessment Experts (Individuals)"> <label> Environmental Impact Assessment Experts (Individuals)</label><br>

									<button type="submit" name="register" class="btn btn-info">Agree and Submit</button>
                                    </form>

																		
									           
									                </div>
									            </div>
									            <!-- /.row -->

									        </div>
        <!-- /#page-wrapper -->

    <?php include_once "includes/footer.php"; ?>



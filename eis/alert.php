

<?php
//including the database connection file
include_once "includes/connect.php";
include_once "includes/header.php";
session_start();
$message = $_POST['message'];
$sender = $_SESSION['id'];
$timedate =  date('d/m/Y');


if (isset($_POST['send'])) {  


mysqli_query($conn, "INSERT INTO alert ( message,sender, dateof) VALUES ('$message',$sender,'$timedate')" );

//redirecting to the display page (index.php in our case)
header("Location:alert.php");


}
?>

 


?>        
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-bell fa-fw"></i>Alerts</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-lg-6">
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> <br>
                        <?php  if ($_SESSION['role']=='ADMIN') {

                         echo "<form method='POST' >
                            <div class='input-group'>
                            <textarea name='message' rows='3' cols='50' placeholder='Type your Public Alert here...'></textarea>
                                <span class='input-group-btn'>
                                <div class='btn-group pull-right'>
                                    <button type='submit' name='send' class='btn btn-warning btn-sm' id='btn-chat'>
                                        Send
                                    </button>
                                    </div>
                                </span>
                            </div>
                        </form>"; } ?>
                        
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">

                                        <?php
                                        // $message = "SELECT * FROM alert ORDER BY id ASC";
                                //          $message2 = "SELECT message FROM alert, expert where expert.role='ADMIN' and expert.id=alert.sender ORDER BY id ASC";

                                //              if ($_SESSION['role']=='ADMIN') {
                                    
                                // $result = $conn->query($message2);
                                // }
                                // else {

                                //    $result = $conn->query($message); 
                                // }
                                

                                              
                                         $message = "SELECT * FROM alert ORDER BY id desc";
                                             $result = $conn->query($message);

                                              while($row = $result->fetch_assoc()) { 
                                                 $date=$row['dateof'];
                                                if ($date==date('d/m/Y')) {
                                                    $time='Today';
                                                }
                                                else{ $time= $row['dateof'];}

                           echo "<li class=\"left clearfix\">
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i>".$time."</small>
                                            
                                        </div>
                                        <div class=\"alert alert-success\">"; ?>
                                       
                                        <p><?php echo $row['message']; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>

                                
                        </div>
                        <!-- /.panel-body -->
                       
                        <!-- /.panel-footer -->
            </div>
            <!-- /.panel -->
        </div>
    
<!-- /#wrapper -->
</div>
<?php include_once "includes/footer.php"; ?>

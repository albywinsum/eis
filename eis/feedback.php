

<?php 
include_once "includes/header.php";

// including the database connection file
include_once "includes/connect.php";

//getting id from url
$fid = $_GET['message_id'];
$sender = $_SESSION['id'];
//$chat=$_SESSION['userid'];

//selecting data associated with this particular id>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$result = mysqli_query($conn, "SELECT * FROM message WHERE message_id=$fid");

while($row = mysqli_fetch_array($result))
{
    $fullname =$row['fullname'];
    //$id =$row['id'];
    $email = $row['email'];
}

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//message Sender and Receiver Differenciation

// $result = mysqli_query($conn, "SELECT * FROM u".$sender." WHERE id=6 " );

// while($row = mysqli_fetch_array($result))
// {
//    // $me =$row['msgfrom'];
//     echo $row['message'];
    
// }

//  //echo $emai;
//    exit;


?>        
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-comments fa-fw"></i>Message</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-lg-6">
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> <?php echo $fullname;?>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">

                                        <?php
                                         $message = "SELECT * FROM message WHERE message_id='".$fid."'  ORDER BY message_id ASC";
                                             $result = $conn->query($message);

                                              while($row = $result->fetch_assoc()) { 
                          //           // if ($row['msgfrom']=='ME'){
                          // echo "<li class=\"left clearfix\">
                          //           <div class=\"chat-body clearfix\">
                          //               <div class=\"header\">
                          //               <strong class=\"primary-font\">.</strong>
                          //                   <small class=\"pull-right text-muted\">
                          //                       <i class=\"fa fa-clock-o fa-fw\"></i> 12 mins ago
                          //                   </small>
                          //               </div>
                          //               <div class=\"alert alert-info\">"; }
                                        echo "<li class=\"right clearfix\">
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 13 mins ago</small>
                                            
                                        </div>
                                        <div class=\"alert alert-success\">";  ?>
                                       
                                        <p><?php echo $row['message']; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>

                                <!-- <li class="right clearfix">
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            
                                        </div>
                                        <div class="alert alert-success">
                                        <p>
                                            <?php echo "Hi Mirror"; //$row['me']; ?>
                                        </p>
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                        </div
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                        <form method="POST" action=" notification.php?id=<?php echo $id; ?>">
                            <div class="input-group">
                            <textarea name="message" rows="3" cols="50" placeholder="<?php echo $sender; ?>Type your message here..."></textarea>
                                <span class="input-group-btn">
                                    <button type="submit" name="send" class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </form>
                        </div>
                        <!-- /.panel-footer -->
            </div>
            <!-- /.panel -->
        </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profile
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <b>
                        <!--  <p>First Name:&nbsp;&nbsp;<font color="orange"><?php echo $fname; ?></font></p>
                         <p>Middle Name:&nbsp;&nbsp;<font color="orange"><?php echo $mname; ?></font></p>
                         <p>Sur Name:&nbsp;&nbsp;<font color="orange"><?php echo $lname; ?></font></p>
                         <p>Sex:&nbsp;&nbsp;<font color="orange"><?php echo $sex; ?></font></p>
                         <p>User ID:&nbsp;&nbsp;<font color="orange"><?php echo $userid; ?></font></p>
                         <p>Username:&nbsp;&nbsp;<font color="orange"><?php echo $username; ?></font></p> -->
                         <p>Name:&nbsp;&nbsp;<font color="orange"><?php echo $fullname; ?></font></p>
                         <p>Email:&nbsp;&nbsp;<font color="orange"><?php echo $email; ?></font></p>
                         <!-- <p>Role:&nbsp;&nbsp;<font color="orange"><?php echo $role; ?>m</font></p> -->
                         <!-- <p>Mobile Phone:&nbsp;&nbsp;<font color="orange"><?php echo $tele; ?></font></p> -->
                        </b>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                          <!-- /.panel-body -->
    </div>
    
<!-- /#wrapper -->
</div>
<?php include_once "includes/footer.php"; ?>

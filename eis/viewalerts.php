

<?php
//including the database connection file
include_once "includes/connect.php";
include_once "includes/header.php";



?>        
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-bell fa-fw"></i> Alerts</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="col-lg-6">
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> 
                            <div class="btn-group pull-right">
                               
                                
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">

                                        <?php
                                         $message = "SELECT * FROM alert ORDER BY id ASC";
                                             $result = $conn->query($message);

                                              while($row = $result->fetch_assoc()) { 
                           echo "<li class=\"left clearfix\">
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i>".$row['dateof']."</small>
                                            
                                        </div>
                                        <div class=\"alert alert-success\">"; ?>
                                       
                                        <p><?php echo $row['message']; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>

                                
                        </div>
                        <!-- /.panel-footer -->
            </div>
            <!-- /.panel -->
        </div>
    
<!-- /#wrapper -->
</div>
<?php include_once "includes/footer.php"; ?>


     <?php include_once "includes/header.php"; 
     include_once "includes/connect.php"; 

     ?>

    
        <!-- Page Content -->
        <div id="page-wrapper">
           
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Reports.</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="pull-left">
                                    <div class="panel-heading">
                            <b>Report List</b>
                        </div>
                            </div>
                            <div class="pull-right">
                            <a  href="uploadreport.php"><button type="button" class="btn btn-success">
                                        Upload New 
                                    </button></a>
                                <div class="btn-group">

                                    <form action="export/reports.php" > <input type="submit" class="btn btn-info" value="Export Table" /></form>
                                </div>
                            </div>

                        <div class="panel-heading">
                            &nbsp;
                            
                              
                        </div>
                        <?php
                                //include_once("includes/connect.php");

                                $sql = "SELECT @s:=@s+1 sNo, uploads.* FROM uploads, (select @s:=0) as s";
                                 $sql2 = "SELECT @s:=@s+1 sNo, uploads.* FROM uploads, (select @s:=0) as s where userid='$_SESSION[id]'";

                                 if ($_SESSION['role']=='ADMIN') {
                                    
                                $result = $conn->query($sql);
                                }
                                else {

                                   $result = $conn->query($sql2); 
                                }
                                ?>

                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                     <?php   if ($_SESSION['role']=='ADMIN') {
                                        echo "<th>From</th>"; } ?>
                                        <th>Title</th>
                                        <th>Report</th>
                                        <th>Dateof Submission</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                while($row = $result->fetch_assoc()) { ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row['sNo']; ?></td>
                                        
                                        <?php if ($_SESSION['role']=='ADMIN') {  echo "<td>".$row['uploader']."</td>"; } ?>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo "<a href=\"uploads/documents/".$row['file']."\" download>".$row['file']; ?></a></td>
                                        <td><?php echo $row['dateof']; ?></td>

                                        
                                    </tr>

                                   <?php } ?>
                                </tbody>
                           </table>
                        </div>    
                     </div>     
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    <!-- /#wrapper -->

    
     

    <?php include_once "includes/footer.php"; ?>
     

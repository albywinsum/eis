
     <?php include_once "includes/header.php"; ?>

    
        <!-- Page Content -->
        <div id="page-wrapper">
           
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Users.</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="pull-left">
                                    <a  href="adduser.php"><button type="button" class="btn btn-success">
                                        Add User 
                                    </button></a>
                            </div>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <form action="export/exportuser.php" > <input type="submit" class="btn btn-info" value="Export Table" /></form>
                                </div>
                            </div>

                        <div class="panel-heading">
                            &nbsp;
                            
                              
                        </div>
                        <?php
                                include_once("includes/connect.php");

                                $sql = "SELECT @s:=@s+1 sNo,

                                       proponent.*,
                                       pdescription.*,
                                       pinfrastructure.*,
                                       pscope.*,
                                       pdeia.*,
                                       psite.*
                                       
                                 FROM psite 
                                 INNER JOIN proponent ON proponent.projectid = psite.projectid
                                 INNER JOIN pdescription ON pdescription.projectid =  psite.projectid
                                 INNER JOIN pinfrastructure ON pinfrastructure.projectid = psite.projectid
                                 INNER JOIN pscope ON pscope.projectid = psite.projectid
                                 INNER JOIN pdeia ON pdeia.projectid = psite.projectid, (select @s:=0) as s  ";

                                 $sql2 = "SELECT @s:=@s+1 sNo,

                                       proponent.*,
                                       pdescription.*,
                                       pinfrastructure.*,
                                       pscope.*,
                                       pdeia.*,
                                       psite.*
                                       
                                 FROM psite 
                                 INNER JOIN proponent ON proponent.projectid = psite.projectid
                                 INNER JOIN pdescription ON pdescription.projectid =  psite.projectid
                                 INNER JOIN pinfrastructure ON pinfrastructure.projectid = psite.projectid
                                 INNER JOIN pscope ON pscope.projectid = psite.projectid
                                 INNER JOIN pdeia ON pdeia.projectid = psite.projectid, (select @s:=0) as s WHERE proponent.userid='$_SESSION[id]' ";

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
                                        <th>Proj RegNo</th>
                                        <th>Title</th>
                                        <th>Holder</th>
                                        <th>Location</th>
                                        <th>Started Date</th>
                                        <th>Duration</th>
                                       <!--  <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                while($row = $result->fetch_assoc()) { ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row['sNo']; ?></td>
                                        <td><?php echo $row['projectid']; ?></td>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['fname']." ".$row['mname']."<br>".$row['lname']; ?></td>
                                        <td><?php echo $row['location']." ".$row['district']."<br>".$row['region']; ?></td>
                                        <td><?php echo $row['start']; ?></td>
                                       
                                        <td><?php echo $row['duration']; ?></td>
                                        
                                        
                                        <?php //echo //"<td>
                                        
                                        //  <a class=\"tooltip-demo\" href=\"deleteproject.php?projectid=$row[projectid]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\" class=\"btn btn-outline btn-warning btn-xs\"><i class=\"fa fa-trash-o\"></i></button></a>
                                        //   <a class=\"tooltip-demo\" href=\"expertinfo.php?id=$row[id]\"><button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Info\" class=\"btn btn-outline btn-info btn-xs\"><i class=\"fa fa-info-circle\"></i></button></a>
                                        //    <a class=\"tooltip-demo\" href=\"message.php?id=$row[id]\"><button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Email\" class=\"btn btn-outline btn-info btn-xs\"><i class=\"fa fa-envelope-o\"></i></button></a>
                                        //    <a class=\"tooltip-demo\" href=\"ed.php?id=$row[id]\"><button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Info\" class=\"btn btn-outline btn-info btn-xs\"><i class=\"fa fa-edit\"></i></button></a></td>"; ?>
                                     
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
     

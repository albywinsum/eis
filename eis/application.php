
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

                                $sql = "SELECT @s:=@s+1 sNo, expert.* FROM expert, (select @s:=0) as s";
                                $result = $conn->query($sql);
                                

                                //if ($row['status']=="ACCEPTED") {
                                    # code...
                                
                                ?>

                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                       
                                        <th>Specialization</th>
                                        <th>Postal Address</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                while($row = $result->fetch_assoc()) { ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row['sNo']; ?></td>
                                        <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
                                       
                                        <td><?php echo $row['spec']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                       
                                        <td><?php echo $row['email']; ?></td>
                                        
                                        <td><?php echo $row['tele']; ?></td>

                                        <td><?php echo $row['role']; ?></td>
                                    
                                        <?php echo "<td>
                                        
                                         <a class=\"tooltip-demo\"  href=\"accept.php?id=$row[id]\" onClick=\"return confirm('Are you sure You Want To Accept This Application?')\"><button type=\"button\" name='accept' data-toggle=\"tooltip\" data-placement=\"top\" title=\"Accept\" class=\"btn btn-outline btn-success btn-xs\"><i class=\"fa fa-check\"></i></button></a>
                                          <a class=\"tooltip-demo\"  href=\"deny.php?id=$row[id]\"onClick=\"return confirm('Are you sure You Want To Deny This Application?')\"><button type=\"button\" name='deny' data-toggle=\"tooltip\" data-placement=\"top\" title=\"Deny\" class=\"btn btn-outline btn-danger btn-xs\"><i class=\"fa  fa-times\"></i></button></a>
                                           <a class=\"tooltip-demo\" href=\"expertinfo.php?id=$row[id]\"><button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Info\" class=\"btn btn-outline btn-info btn-xs\"><i class=\"fa fa-info-circle\"></i></button></a>
                                           <a class=\"tooltip-demo\" href=\"expertinfo.php?id=$row[id]\"><br><button disabled='diasabled' type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Info\" class=\"btn btn-info btn-xs\">".$row['status']."</button></a>
                                           </td>"; ?>
                                     
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
     

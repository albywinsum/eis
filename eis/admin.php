
     <?php include_once "includes/header.php"; ?>

    
        <!-- Page Content -->
        <div id="page-wrapper">
           
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Administrators.</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                            

                        <div class="panel-heading">
                            &nbsp;
                            
                              
                        </div>
                        <?php
                                include_once("includes/connect.php");

                                $sql = "SELECT @s:=@s+1 sNo, expert.*  FROM expert, (select @s:=0) as s WHERE role='ADMIN' ORDER BY id ASC";
                                $result = $conn->query($sql);


                                /////////////////////////////////


                            


                                
                                ?>

                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Postal Address</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                while($row = $result->fetch_assoc()) { ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row['sNo']; ?></td>
                                        <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                       
                                        <td><?php echo $row['email']; ?></td>
                                        
                                        <td><?php echo $row['tele']; ?></td>
                                        <?php echo "<td>
                                        
                                           <a class=\"tooltip-demo\" href=\"message.php?id=$row[id]\"><button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Email\" class=\"btn btn-outline btn-info btn-xs\"><i class=\"fa fa-envelope-o\"></i></button></a></td>"; ?>
                                     
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
     

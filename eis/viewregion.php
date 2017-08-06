
     <?php include_once "includes/header.php"; ?>

    
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">District.</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                            <!-- <div class="pull-right">
                                <div class="btn-group">
                                   <form action="export/exportdistrict.php" > <input type="submit" class="btn btn-info btn-xs " value="Export Table" /></form>
                                    </div>
                                    </div> -->
                       
                        <div class="pull-right">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="export/district_excel.php">Export Excel</a>
                                        </li>
                                        <li><a href="export/district_pdf.php">Export PDF</a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        </div>
                        <?php
                                include_once("includes/connect.php");

                                $sql = "SELECT * FROM district";
                                $result = $conn->query($sql);
                                
                                ?>

                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>District Name</th>
                                        <th>Region Name</th>
                                        <th>Covarage</th>
                                        <th>Polpulation</th>
                                        <th>Human Activity</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                while($row = $result->fetch_assoc()) { ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row['did']; ?></td>
                                        <td><?php echo $row['dname']; ?></td>
                                        <td><?php echo $row['rname']; ?></td>
                                        <td><?php echo $row['covarage']; ?></td>
                                        <td><?php echo $row['population']; ?></td>
                                        <td><?php echo $row['activity']; ?></td>
                                        <td><?php echo $row['remarks']; ?></td>
                                     
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

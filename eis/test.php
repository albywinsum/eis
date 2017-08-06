
     <?php include_once "includes/header.php";
      include_once("includes/connect.php"); 

                                $sql = "SELECT @s:=@s+1 sNo, event.* FROM event, (select @s:=0) as s";
                                $sql2 = "SELECT @s:=@s+1 sNo, event.* FROM event, (select @s:=0) as s  Where reporterid='$_SESSION[id]'";

                              if ($_SESSION['role']=='ADMIN') {
                                    
                                $result = $conn->query($sql);
                                }
                                else {

                                   $result = $conn->query($sql2); 
                                }
                                ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Events.</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tables Advanced Tables
                            <div class="pull-right">
                                <div class="btn-group">
                                   <!-- //////// -->
                                    <div class='btn-group'>
                                    <button type='button' class='btn btn-info btn-xs dropdown-toggle' data-toggle='dropdown'>
                                        Export
                                        <span class='caret'></span>
                                    </button>
                                    <ul class='dropdown-menu pull-right' role='menu'>
                                        
                                        <li><a href="export/test.php">All</a>
                                        </li>
                                        <li class='divider'></li>
                                        <li><a href="export/test.php?agent= where agent='Human'">Human</a>
                                        </li>
                                        <li><a href="export/test.php?agent= where agent='Animal'">Animal</a>
                                        <li><a href="export/test.php?agent= where agent='Natural Calamity'">Natural Calamity</a>
                                        </li>
                                    </ul>
                                </div> 
                                <!-- // -->
                                    </div>
                                    <div class='pull-right'>
                                <div class='btn-group'>
                                    <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'>
                                        Actions
                                        <span class='caret'></span>
                                    </button>
                                    <ul class='dropdown-menu pull-right' role='menu'>
                                        <li><a href='#'>Action</a>
                                        </li>
                                        <li><a href='#'>Another action</a>
                                        </li>
                                        <li><a href='#'>Something else here</a>
                                        </li>
                                        <li class='divider'></li>
                                        <li><a href='#'>Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                    </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <?php   if ($_SESSION['role']=='ADMIN') {
                                        echo "<th>Reporter</th>"; } ?>
                                        <th>Agent</th>
                                        <th>Location</th>
                                        <th>Area Covered</th>
                                        <th>Time of Exposure</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                while($row = $result->fetch_assoc()) { ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row['sNo']; ?></td>
                                        <?php if ($_SESSION['role']=='ADMIN') {  echo "<td>".$row['reporter']."</td>"; } ?>
                                        <td><?php echo $row['agent']; ?></td>
                                        <td><?php echo $row['dname'].",".$row['location']; ?></td>
                                        <td><?php echo $row['covarage']; ?></td>
                                        <td><?php echo $row['period']; ?></td>
                                        <td><?php echo $row['remarks']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                           </table>
                           <div class="odd gradeX">
                                            <label>Export</label>
                                        </div>
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

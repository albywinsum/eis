<?php

    include_once "includes/connect.php";
 include_once "includes/header.php"; 

?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Reports</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <font color="teal" size="3%"><b>Submitt Your Research, or Project Report</b></font>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <br><br><br><br>
                                    <form role="form" enctype="multipart/form-data" action="upload.php" method="post">
                                    <div class="form-group">
                                            <label>Report Title</label>
                                            <input class="form-control" name="title" placeholder="Title">
                                        </div>
                                        <br><br><br><br>

                                          <?php
                                                if(isset($_GET['success']))
                                                {
                                                    ?>
                                                    <label><font color="green"> <b>Your File was Uploaded Successfully... </font> <a href="viewreports.php">Click Here to View file.</b></a></label>
                                                    <?php
                                                }
                                                else if(isset($_GET['fail']))
                                                {
                                                    ?>
                                                    <label>Problem While File Uploading !</label>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <label>Upload Your Final Report in any Format (PDF, DOC, PPT, VIDEO,  ZIP,etc...)</label>
                                                    <?php
                                                }
    ?>

                                </div><br><br><br><br>
                                        <!-- /.col-lg-6 (nested)-->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Choose a Report to Upload</label>
                                            <input type="file" name="file" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <button type='submit'  name='upload' class='btn btn-success'>Upload</button>
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                        </div>
                                         <div class="form-group">
                                            <label>Submitted On:&nbsp <?php echo date('d/m/Y'); ?></label>
                                            
                                            <input type="hidden"  name="dateof" value="<?php echo date('d/m/Y'); ?>" >
                                            
                                        </div>
                                        <input type="hidden"  name="uploader" value="<?php echo $_SESSION['first'].", ".$_SESSION['last']; ?>" >
                                        <input type="hidden"  name="uploaderid" value="<?php echo $_SESSION['id']; ?>" >
                                    </form>
                                    


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once "includes/footer.php"; ?>
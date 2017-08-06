<?php include_once "includes/header.php";  ?>

        <div id="page-wrapper">
            
            <!-- /.row -->
            
            <!-- /.row -->
          
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modals
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Button trigger modal -->
                             <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">SHOW</button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Notification</h4>
                                        </div>
                                        <div class="modal-body">
                                           OK Now! Successive Submission
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button"  class="btn btn-primary">Save  changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
            </div>
            <!-- /.row -->
        
    </div>
    <!-- /#wrapper -->

    <?php include_once "includes/footer.php"; ?>
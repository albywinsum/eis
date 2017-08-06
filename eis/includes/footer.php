</div>

<footer class="footer">
<hr>
      <div class="container">
        <p class="text-muted">Copyright &copy EIS 2017.</p>
      </div>
    </footer>

     <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    

    <!-- Dependent dropdown -->
    <!-- <script type="text/javascript" src="vendor/bootstrap/js/dynamicoptionlist.js"></script> -->
    
        

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- <!--  --> 

     <!-- Date picker -->
    <script src="daterange/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#date').datepicker({
                    format: "dd/mm/yyyy"
                });
                $('#date2').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
    </script>
    
<!-- ...........End Date picker............. -->

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    
    </script>
    <script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
    <script>
        // tooltip demo
        $('.tooltip-demo').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        })
        </script>
</body>

</html>


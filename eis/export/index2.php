<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="datatables.css"/>
<?php
include_once("includes/header.php");
 
 ?>
<script type="text/javascript" src="datatables.js"></script>

	
	<div id="page-wrapper">
           
                <div class="row">
                    <div class="col-lg-12">
        <h2 class="page-header">Data Table with Export features Using PHP server-side</h2>
        </div>
		<table id="dataTables-example" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Empid</th>
                <th>Name</th>
				<th>Salary</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Dname</th>
                <th>username</th>
            </tr>
        </thead>
 
        
    </table>
    </div>
      </div>

    </div>

<script type="text/javascript">
$( document ).ready(function() {
$('#dataTables-example').DataTable({
		 "processing": true,
         "sAjaxSource":"response.php",
		 "dom": 'lBfrtip',
		 "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
        });
});
</script>
</table>
                        

    
     

    
     


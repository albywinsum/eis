<?php

    include_once "includes/connect.php";

//getting id of the data from url
$id = $_GET['id'];




$result = mysqli_query($conn, "UPDATE expert SET status='DENIED' WHERE id='$id'");

// //redirecting to the display page (index.php in our case)
header("Location:application.php");









/*




$userid = $_GET['id'];

if(isset($_POST['accept']))
{   
    

        //updating the table
        mysqli_query($conn, "UPDATE expert SET status='ACCEPTED' WHERE id='$userid'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: viewusers.php");
    
}
if(isset($_POST['deny']))
{  
     //updating the table
        mysqli_query($conn, "UPDATE expert SET status='DENIED' WHERE id='$userid'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: viewusers.php");
    # code...
}

//getting id from url
$userid = $_GET['id']; */

?>
<?php
//including the database connection file
include_once "includes/connect.php";

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM expert WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:viewexpert.php");
?>


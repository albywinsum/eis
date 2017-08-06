<?php
//including the database connection file
include_once "includes/connect.php";

//getting id of the data from url
$id = $_GET['projectid'];

//deeting the row from table"

// sql="DELETE FROM `pscope` WHERE projectid='P-2690';
// DELETE FROM `pdeia` WHERE projectid='P-2690';
// DELETE FROM `pdescription` WHERE projectid='P-2690';
// DELETE FROM `pimpacts` WHERE projectid='P-2690';
// DELETE FROM `pinfrastructure` WHERE projectid='P-2690';
// DELETE FROM `proponent` WHERE projectid='P-2690';
// DELETE FROM `psite` WHERE projectid='P-2690';
// ";

$table1="DELETE FROM `pscope` WHERE projectid='$id'";
$table2="DELETE FROM `pdeia` WHERE projectid='$id'";
$table3="DELETE FROM `pdescription` WHERE projectid='$id'";
$table4="DELETE FROM `pimpacts` WHERE projectid='$id'";
$table5="DELETE FROM `pinfrastructure` WHERE projectid='$id'";
$table6="DELETE FROM `proponent` WHERE projectid='$id'";
$table7="DELETE FROM `psite` WHERE projectid='$id'";


$result = mysqli_query($conn,$sql);
$result2= mysqli_query($conn,$table2);
$result3 = mysqli_query($conn,$table3);
$result4 = mysqli_query($conn,$table4);
$result5 = mysqli_query($conn,$table5);
$result6 = mysqli_query($conn,$table6);
$result7 = mysqli_query($conn,$table7);

//redirecting to the display page (index.php in our case)
header("Location:viewprojects.php");
?>


<?php
//including the database connection file
include_once "includes/connect.php";
session_start();
//getting id of the data from url
$id =$_GET['id'];
$sender = $_SESSION['id'];
$message = $_POST['message'];


if (isset($_POST['send'])) {  


//     if ($_POST['message']='') {
    
//    header("Location:userinfo2.php?userid=".$id);
// }
// else {
 //  echo $id."<br><br>"; 
 //  echo $sender."<br><br>";
 // echo $message."<br><br>"; exit;
mysqli_query($conn, "INSERT INTO u".$sender." ( message, msgto) VALUES ('$message','$id')" );
mysqli_query($conn, "INSERT INTO u".$id."( message, msgfrom) VALUES ('$message','$sender')" );

//redirecting to the display page (index.php in our case)
header("Location:message.php?id=".$id);


}
?>

 
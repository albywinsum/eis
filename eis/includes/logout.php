<?php 
session_start();
unset($_SESSION["first"]);
unset($_SESSION["last"]);
unset($_SESSION['role']);
unset($_SESSION['last']);
unset($_SESSION['id']);
unset($_SESSION['password']);
unset($_SESSION['photo']); // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
header("Location: ../slide/index.php");

// session_destroy();
// header("location: ../index.php");

?>
<?php
$con = mysqli_connect("localhost","root","00001994","reservation");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
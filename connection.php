<?php
$con=mysqli_connect('localhost','root');
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  


?>
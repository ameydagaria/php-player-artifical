<!DOCTYPE html>
<html>
<body>
<?php
  $username = "root";
  $password = "";
  $database = "student";
  $server = "127.0.0.1";
  
  $conn = new mysqli($server,$username,$password,"",80);
  
  
 
  if($conn)
  {
	  echo "connected";
  }
  else
  {
	  echo "Not connected";
  }
?>
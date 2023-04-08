<?php
    $host="127.0.0.1";
    $user="anthony";
    $password="137946285";
    $database="crudweb";
   // Create connection
   $conn = mysqli_connect($host, $user, $password, $database);
   
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  ?>
<?php
  $servername ="localhost";
  $user = "root";
  $password = "nutella";
  $dbname = "dbhotel";

  $connection = new mysqli($servername,$user,$password,$dbname);
  if ($connection && $connection-> connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    return;
  }
  else {
    echo "ok";
  }
 ?>

<?php
  $servername ="localhost";
  $user = "root";
  $password = "nutella";
  $dbname = "dbhotel";

  $connection = new mysqli($servername,$user,$password,$dbname);
  if ($connection && $connection-> connect_error) {
    echo "error: " . $conn->connect_error;
    print_r( $connection );

    return;
  }
  else {
    echo "ok <br>";
  }

  $sql = "
          DELETE
          FROM pagamenti
          WHERE id = 8
      ";

  $result = $connection->query($sql);

  if ($result ) {
    echo "deleted <br>";
    print_r($result);
  }
  else {
    echo "error";
  }

  $connection -> close();
 ?>

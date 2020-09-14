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
          SELECT *
          FROM pagamenti
      ";

  $result = $connection->query($sql);

  if ($result && $result->num_rows > 0) {
    echo "<ul>";
      while ($row = $result->fetch_assoc()) {
        echo "<li> prenotazione " . $row["id"] . " : " . $row["status"] . " - " . $row["price"] . "</li>";
      }
    echo "</ul>";
  }
  elseif ($result) {
    echo "no result";
  }
  else {
    echo "error";
  }

  $connection -> close();
 ?>

<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "banco";

  try {
    $conn = mysqli_connect($db_server, $db_user, 
                          $db_password, $db_name); // function to connect to database
  } catch (mysqli_sql_exception) {
    echo "Error connecting to database <br>";
  }
?>
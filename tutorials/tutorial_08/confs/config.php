<?php
define('DB_SERVER', 'localhost');
define('DB_PORT', '3306');
define('DB_DATABASE', 'php_training');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'php_crud');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  
  //check for the connection of database
  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>
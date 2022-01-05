<?php
session_start();

if(isset($_SESSION['name'])){//statement for clear the user input
  session_destroy();

  echo "<script>location.href='index.php'</script>";
} else {
  echo "<script>location.href='index.php'</script>";
}
?>
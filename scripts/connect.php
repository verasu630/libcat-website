<?php
  $conn = mysqli_connect('localhost','admin','admin','narc');

  if (!$conn) {
    die("Connection failed: " .  $mysqli_connect_error());
  }
?>

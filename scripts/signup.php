<?php
  session_start();

  include 'connect.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (user_name, user_password) VALUES ('$username', '$password')";
  $result = mysqli_query($conn, $sql);

  header("Location: ../index.php");
?>

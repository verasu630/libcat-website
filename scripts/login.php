<?php
  include 'connect.php';
  if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_name = '$username' AND user_password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($username != "" && $password != "") {
      if (!$row = mysqli_fetch_assoc($result)) {
        echo "Your username or password is incorrect.";
      } else {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['logged_in'] = true;
        header("Location: dashboard.php");
      }
    } else {
      echo "<p>Please enter a username and a password.</p>";
    }
  }
?>

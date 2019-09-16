<?php
  if($_POST) {
    $user_id = $_POST['user_id'];

    $delete_sql = "DELETE FROM users WHERE user_id = '$user_id'";
    $delete_result = mysqli_query($conn, $delete_sql);

    header("Location: deleteuser.php");
  }
?>

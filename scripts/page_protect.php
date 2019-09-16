<?php
  function login_check($login) {
    if (!$login) {
      header("Location: index.php");
    }
  }

  function admin_check($user) {
    if ($user != 1) {
      echo('Sorry, you do not have suffecient permissions to access this page');
      exit();
    }
  }
?>

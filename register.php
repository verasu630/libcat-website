<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <title>Narrabundah College Library</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js./jquery-2.2.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/lang-script.js"></script>
  </head>

  <body>
    <div id="index_hero" class="reg">
      <div id="form_element">
        <h1>Register</h1>
        <form action="scripts/signup.php" method="post">
          <input type="text" name="username" placeholder="Username"><br />
          <input type="password" name="password" placeholder="Password"><br /><br />
          <button type="submit" value="Register">Sign Up</button> <a href="index.php">Log In</a>
        </form>
      </div>
    </div>


<?php
  include 'template/footer.php';
?>

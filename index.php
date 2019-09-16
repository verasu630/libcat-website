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
    <div id="index_hero" class="login">
      <div id="form_element">
        <h1>Login</h1>
        <form action="" method="post">
          <input type="text" name="username" placeholder="Username"><br />
          <input type="password" name="password" placeholder="Password"><br /><br />
          <button type="submit">Log In</button> <a href="register.php" id="button">Sign Up</a>
        </form>
      </div>
    </div>
    <?php
      include 'scripts/login.php';
    ?>


<?php
  include 'template/footer.php';
?>


<!-- https://www.youtube.com/watch?v=HdIo6-PWdkw&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=39 -->

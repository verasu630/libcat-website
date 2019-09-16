<?php
  session_start();
  include 'scripts/page_protect.php';
  login_check($_SESSION['logged_in']);

  include 'template/header.php';
?>

<h1>Welcome to the Narrabundah College Library</h1>

<?php
  include 'template/footer.php';
?>

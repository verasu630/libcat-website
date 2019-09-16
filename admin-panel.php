<?php
  session_start();
  include 'scripts/page_protect.php';
  login_check($_SESSION['logged_in']);
  admin_check($_SESSION['user_type']);

  include 'template/header.php';
?>

<h1>Admin Panel</h1>

<table id="admin_table">
  <tr>
    <td><a href="addbooks.php">Add Books, Publishers and Authors</a></td>
    <td><a href="deleteuser.php">Remove Users</a></td>
  </tr>
</table>
<?php
  include 'template/footer.php'
?>

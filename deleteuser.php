<?php
  session_start();
  include 'scripts/page_protect.php';
  login_check($_SESSION['logged_in']);
  admin_check($_SESSION['user_type']);

  include 'template/header.php';
?>

<h1>Delete User</h1>

<div id="form_element">
  <form method="POST" action="">
    <select name="user_id" class="select" title="Select the user you would like to delete">
      <?php
        include "scripts/connect.php";
        $sql = "SELECT user_id, user_name FROM users order by user_name";
        foreach(mysqli_query($conn, $sql) as $row) {
          echo "<option value=$row[user_id]>$row[user_name]</option>";
        }
      ?>
    </select><br /><br />
    <?php
      include 'scripts/delete.php';
    ?>
    <button type="submit" name="submit">Submit</button>
  </form>
</div>

<?php
  include 'template/footer.php'
?>

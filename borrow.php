<?php
  session_start();
  include 'scripts/page_protect.php';
  login_check($_SESSION['logged_in']);

  include 'template/header.php';
?>
<div id="form_element">
  <h1>Borrow</h1>
  <form method="POST" action="">
    <select name="book_id" class="select" title="Select the book you would like to borrow">
      <?php
        include "scripts/connect.php";
        $sql = "SELECT book_id, book_title FROM book order by book_title";
        foreach(mysqli_query($conn, $sql) as $row) {
          echo "<option value=$row[book_id]>$row[book_title]</option>";
        }
      ?>
    </select><br />
    <input type="text" name="loan_date" id="loan-date" placeholder="Loan Date" title="Today's date"><br /><br />
    <?php
      include 'scripts/loan.php';
    ?>
    <button type="submit" name="submit">Submit</button>
  </form>
</div>
<?php
  include 'template/footer.php';
?>

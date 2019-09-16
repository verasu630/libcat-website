<?php
session_start();
include 'scripts/page_protect.php';
login_check($_SESSION['logged_in']);
admin_check($_SESSION['user_type']);

include 'template/header.php';
include 'scripts/connect.php';
include 'scripts/add.php';
?>

<h1 id="add-book" class="toggle">Add Book</h1>
<div id="book-container">
  <div id="form_element">
    <form action="" method="post" enctype="multipart/form-data">
      <input type="text" name="book_title" placeholder="Book Title" title="The name of the book?" required>
      <select name="author_id" class="select" title="Who is the author?" required>
        <?php
          $sql = "SELECT author_id, author_name FROM author order by author_name";
          foreach(mysqli_query($conn, $sql) as $row) {
            echo "<option value=$row[author_id]>$row[author_name]</option>";
          }
        ?>
      </select><br />
      <input type="text" name="book_pubyear" placeholder="Year published" title="When was the book published?" required>
      <select name="publisher_id" class="select" title="Select the book you would like to borrow" required
        <?php
          $sql2 = "SELECT publisher_id, publisher_name FROM publisher order by publisher_name";
          foreach(mysqli_query($conn, $sql2) as $row2) {
            echo "<option value=$row2[publisher_id]>$row2[publisher_name]</option>";
          }
        ?>
      </select><br />
      <input type="number" name="book_inventory" placeholder="Inventory" title="How many books?" required>
      <input type="file" name="book_cover" accept="image/*"><br />
      <button type="submit" name="addbook">Add Books</button>
    </form>
  </div>
</div>

<h1 id="add-author" class="toggle">Add Author</h1>
<div id="author-container">
  <div id="form_element">
    <form action="" method="post">
      <input type="text" name="author_name" placeholder="Author Name" title="What is the Author's name?" required><br />
      <input type="text" name="author_dob" id="author_dob" title="The author's date of birth" placeholder="Author DOB"><br /><br />
      <button type="submit" name="addauthor">Add Author</button>
    </form>
  </div>
</div>

<h1 id="add-publisher" class="toggle">Add Publisher</h1>
<div id="pub-container">
  <div id="form_element">
    <form action="" method="post" >
      <input type="text" name="publisher_name" placeholder="Publisher Name"><br />
      <input type="number" name="publisher_estyear" placeholder="Year of Establishment"><br />
      <input type="text" name="publisher_country" placeholder="Country of Operation"><br /><br />
      <button type="submit" name="addpublisher">Add Publisher</button>
    </form>
  </div>
</div>

<?php
  include 'template/footer.php';
?>

<?php
  session_start();
  include 'scripts/page_protect.php';
  login_check($_SESSION['logged_in']);

  include 'template/header.php';
  include 'scripts/connect.php';
?>

<h1>Browse Books</h1>
<div id="form_element">
<form method="POST" action"">
	<select name="sort" title="How would you like to sort the books?">
		<option value="book_title">Sort by title</option>
		<option value="author_name">Sort by author</option>
		<option value="publisher_name">Sort by publisher</option>
	</select><br />
	<button type="submit">Sort</button>
</form>
</div>

<table>
  <tr>
	<th>Cover</th>
    <th>Book Title</th>
    <th>Author</th>
    <th>Publisher</th>
    <th>Published Year</th>
	<th>Inventory</th>
  </tr>

  <?php
	if($_POST) {
		$sort = $_POST['sort'];

		$sql = "SELECT book.book_title, book.book_pubyear, book.book_cover, book.book_inventory, author.author_name, publisher.publisher_name
				FROM book
				RIGHT OUTER JOIN author
				ON book.author_id = author.author_id
				RIGHT OUTER JOIN publisher
				ON book.publisher_id = publisher.publisher_id
				ORDER BY $sort";
		$sort_result = mysqli_query($conn, $sql);


		while($row=mysqli_fetch_assoc($sort_result)) {
			echo "<tr><td><img src='" . $row['book_cover']. "' alt='book cover' width='200px' /></td><td>" . $row['book_title'] . "</td> <td>" . $row['author_name'] . "</td> <td>" . $row['publisher_name']. "</td> <td>" . $row['book_pubyear'] . "</td> <td>" . $row['book_inventory'] . "</td></tr>";
		}
	}
?>

<?php
  include 'template/footer.php';
?>

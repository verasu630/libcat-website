<?php
  session_start();
  include 'scripts/page_protect.php';
  login_check($_SESSION['logged_in']);

  include 'template/header.php';
  include 'scripts/connect.php';
  $user_id = $_SESSION['user_id'];

   $sql = "SELECT student_id FROM students WHERE user_id = '$user_id'";
   $result = mysqli_query($conn, $sql);
   $students = mysqli_fetch_assoc($result);
   $student_id = $students['student_id'];
?>

<h1>Loan Records</h1>
<?php
   $sql2 = "SELECT loan.loan_id, loan.book_id, loan.loan_date, loan.due_date, loan.return_date, book.book_title
			FROM loan
			RIGHT JOIN book
			ON book.book_id = loan.book_id
			WHERE student_id = '$student_id' order by loan.loan_date";
   $list_result = mysqli_query($conn, $sql2);
   $list_num = mysqli_num_rows($list_result);
   if ($list_num == 0) {
		die("<p class='center'>You have not made a loan yet.</p>");
   }
?>
<table>
  <tr>
    <th>Loan ID</th>
    <th>Book Title</th>
    <th>Date Loaned</th>
    <th>Date Due</th>
    <th>Date Retured</th>
  </tr>
  <?php
	while($row=mysqli_fetch_assoc($list_result)) {
		echo "<tr><td>" . $row['loan_id'] . "</td> <td>" . $row['book_title'] . "</td> <td>" . $row['loan_date'] . "</td> <td>" . $row['due_date']. "</td> <td>" . $row['return_date'] . "</td> </tr> ";
	}
  ?>
</table>

<h1 class="head-2">Return</h1>
<div id="form_element">
  <?php
    $sql3 = "SELECT loan.book_id, loan.student_id, book.book_title
			FROM loan
			RIGHT JOIN book
			ON book.book_id=loan.book_id
			WHERE loan.student_id = '$student_id'
			AND loan.return_date = '0000-00-00'";
	$return_check = mysqli_query($conn, $sql3);
	if (mysqli_num_rows($return_check) > 0) {
	?>
	<form method='POST' action=''>
		<select name='book_id' class='select' title='Select the book you would like to return'>";
		<?php
			foreach(mysqli_query($conn, $sql3) as $row) {
				echo "<option value=$row[book_id]>$row[book_title]</option>";
			}
		?>
		</select><br />
			<input type='text' name='return_date' id='loan-date' placeholder='Return Date' title="Today's date"><br /><br />
		<?php include 'scripts/return.php';
		echo "<button type='submit' name='submit'>Submit</button></form>";
	} else {
		print "<p> You have no books to return</p>";
	}
		?>
</div>
<?php
  include 'template/footer.php';
?>

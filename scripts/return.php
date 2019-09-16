<?php
  if ($_POST) {
    #Converting the form data into variables
    $book_id = $_POST["book_id"];
    $return_date = $_POST["return_date"];

    #processing the return query
    if (isset($book_id) && $return_date != "") {
      #updating loan record
      $sql2 = "UPDATE loan SET return_date = '$return_date' WHERE book_id = '$book_id' AND return_date = '0000-00-00' LIMIT 1";

      #updating the book inventory
      $sql3 = "UPDATE book SET book_inventory = book_inventory + 1 WHERE book_id = '$book_id' LIMIT 1";

	  if (mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
		header("Location: loanrecord.php");
      } else {
        echo "<p>Sorry, there was an error processing your book, please try again.</p>";
      }
	} else {
		echo "<p>You need to select a book and the current date</p>";
	}
  }
?>
<?php
  include "connect.php";

  if ($_POST) {
    #Converting the form data into variables
    $book_id = $_POST["book_id"];
    $loan_date = $_POST["loan_date"];

    #sets the session variable as a php variable
    $user_id = $_SESSION['user_id'];

    #sql query to find the student_id from the students table via the user_id
    $sql = "SELECT student_id FROM students WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $students = mysqli_fetch_assoc($result);
    $student_id = $students['student_id'];

    #sets due date to be 3 weeks after the date the book was loaned
    $due_date = date('Y-m-d', strtotime($loan_date . '+ 21 days'));

    #processing the loan order
    if (isset($book_id) && $loan_date != "") {
      #creating a loan record
      $sql2 = "INSERT INTO loan (book_id, student_id, loan_date, due_date) VALUES ($book_id, $student_id, '$loan_date', '$due_date')";

      #updating the number of books available
      $sql3 = "UPDATE book SET book_inventory = book_inventory - 1 WHERE book_id = '$book_id'";

      #checks if books are available
      $sql4 = "SELECT book_inventory FROM book WHERE book_id = '$book_id'";
      $inventory_results = mysqli_query($conn, $sql4);
      $inventory_assoc = mysqli_fetch_assoc($inventory_results);
      $inventory = $inventory_assoc['book_inventory'];

      if ($inventory > 0) {
        if (mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
          echo "<p>Thank you for borrowing from the Narrabundah College Library. Please return the book by $due_date</p>";
        } else {
          echo "<p>Sorry, there was an error processing your book, please try again.</p>";
        }
      } else {
        echo "<p>Sorry, there are no books available at the moment</p>";
      }
    } else {
      echo "<p>You need to select a book and the current date</p>";
    }
  }

?>

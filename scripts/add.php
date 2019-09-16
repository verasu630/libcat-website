<?php
  if(isset($_POST['addbook'])) {
    $author_id = $_POST['author_id'];
    $publisher_id = $_POST['publisher_id'];
    $book_title = $_POST['book_title'];
    $book_pubyear = $_POST['book_pubyear'];
    $book_inventory = $_POST['book_inventory'];

    if (isset($_FILES["book_cover"]["name"])) {
      $filetmp = $_FILES["book_cover"]["tmp_name"];
      $filename = $_FILES['book_cover']['name'];
      $filepath = "img/".$filename;

      move_uploaded_file($filetmp, $filepath);
    } else {
      $filepath = "img/bookcover_default.png";
    }

    $book_sql = "INSERT INTO book(author_id, publisher_id, book_title, book_pubyear, book_cover, book_inventory)
                VALUES ('$author_id', '$publisher_id', '$book_title', '$book_pubyear', '$filepath', '$book_inventory')";
    $book_result = mysqli_query($conn, $book_sql);
  } elseif (isset($_POST['addauthor'])) {
    $author_name = $_POST['author_name'];

    if (isset($_POST['author_dob'])) {
      $author_dob = $_POST['author_dob'];
    } else {
      $author_dob = '0000-00-00';
    }

    $author_sql = "INSERT INTO author(author_name, author_dob)
                  VALUES ('$author_name', '$author_dob')";
    $author_result = mysqli_query($conn, $author_sql);
  } elseif (isset($_POST['addpublisher'])) {
    $publisher_name = $_POST['publisher_name'];
    $publisher_estyear = $_POST['publisher_estyear'];
    $publisher_country = $_POST['publisher_country'];

    $publisher_sql = "INSERT INTO publisher(publisher_name, publisher_estyear, publisher_country) VALUES ('$publisher_name', '$publisher_estyear', '$publisher_country')";
    $publisher_result = mysqli_query($conn, $publisher_sql);
  }
?>

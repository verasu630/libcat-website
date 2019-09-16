<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <script src="js./jquery-2.2.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/lib_script.js"></script>

    <title>Narrabundah College Library</title>

    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>

  <body>

  <header>
    <nav>
      <ul>
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="browse-books.php">Browse</a></li>
        <li><a href="borrow.php">Borrow</a></li>
        <li><a href="loanrecord.php">Loan Record</a></li>
        <li><a href="search.php">Search</a></li>
        <?php
          if($_SESSION['user_type'] == 1) {
            echo "<li><a href='admin-panel.php'>Admin Panel</a></li>";
          }
        ?>

        <li>
          <form action="scripts/logout.php">
            <input type="submit" value="Log Out">
          </form>
        </li>
      </ul>
    </nav>
  </header>

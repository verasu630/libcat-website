<?php
  session_start();
  include 'template/header.php';
  include 'scripts/connect.php';
?>

<div id="form_element">
  <h1>Search  Students</h1>
  <p class="center">You  may search either by first or last name</p><br />
  <form  method="post" action="search.php?go"  id="searchform">
    <input  type="text" name="name">
    <button type="submit">Search</button>
  </form>
  <?php
    if($_POST) {
      if(isset($_GET['go'])) {
        if(preg_match("/[A-Z  | a-z]+/", $_POST['name'])) {
          $name=$_POST['name'];

          $sql = "SELECT * FROM students WHERE student_fname LIKE '%" . $name ."%' OR student_lname LIKE '%" . $name . "%'";
          $result = mysqli_query($conn, $sql);

          echo "<table><tr><th>Photo ID</th><th>Name</th></tr>";
          while($row=mysqli_fetch_assoc($result)) {
            $ID = $row['student_id'];
            $FirstName = $row['student_fname'];
            $LastName = $row['student_lname'];
            $filepath = $row['student_img'];


            echo "<tr><td>" . "<img src='$filepath'></td>";
            echo "<td>" . $FirstName . " " . $LastName .  "</td></tr>";
          }
          echo "</table>";
        }
      }
    } else {
      echo "<p>Please enter a search query</p>";
    }
  ?>
</div>

<?php
  include 'template/footer.php';
?>

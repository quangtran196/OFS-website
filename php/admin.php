<?php
  $logged_in = false;

  if (isset($_POST["username"]) &&
      isset($_POST["password"])) {
    if ($_POST["username"] && $_POST["password"]) {
      $username = $_POST["username"];
      $password = $_POST["password"];

      // create connection
      $conn = mysqli_connect("localhost", "root", "", "users");

      // check connection
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }

      // select user
      $sql = "SELECT password FROM students WHERE username
          = '$username'";

      $results = mysqli_query($conn, $sql);

      if ($results) {

        $row = mysqli_fetch_assoc($results);
        if ($row["password"] === $password) { //Checks if the password matches
          $logged_in = true; //Logging in
          $sql = "SELECT * FROM students"; //Selecting all the students
          $results = mysqli_query($conn, $sql);
        } else {
          echo "password incorrect";
          }
        } else {
          echo mysqli_error($conn);
        }

        mysqli_close($conn); // close connection
        } else {
          echo "Nothing was submitted.";
        }
            }
?>

  <html>
    <header>
      <title>Admin</title>
    </header>
    <body>
      <h1>Admin panel</h1>
      <form action="/admin.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">
      </form>
      <table>
        <thead>
          <tr>
            <th>username</th>
            <th>password</th>
          </tr>
        </thead>
        <tbody>
        <?php
          if ($logged_in && $results) { //Once user logins then checks results are true or false, true if it returns value.
            while ($row = mysqli_fetch_assoc($results)) { //While loop goes through all rows
              echo "<tr>";
              echo "<td>" . $row["username"] . "</td>"; //Displays username
              echo "<td>" . $row["password"] . "</td>"; //Displays password
              echo "</tr>";
            }
          }
          ?>
        </tbody>
      </table>
    </body>
  </html>

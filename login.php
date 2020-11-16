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
          session_start();
          $logged_in = true; //Logging in
          $sql = "SELECT * FROM students"; //Selecting all the students
          $results = mysqli_query($conn, $sql);
          $_SESSION['sess_user']=$username;
          header("Location: home.php");
        } else {
          echo "Username or password is incorrect";
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

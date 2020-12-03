<?php
session_start();
?>
<html>
  <head>
    <title>Processing Login</title>
  </head>
  <body>
    <h1>Processing</h1>
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
      $sql = "SELECT password FROM accounts WHERE username
          = '$username'";
      $results = mysqli_query($conn, $sql);

      if ($results) {
        $row = mysqli_fetch_assoc($results);
        if ($row["password"] === $password) { //Checks if the password matches
          session_start();
          $logged_in = true; //Logging in
          $sql = "SELECT * FROM accounts"; //Selecting all the accounts
          $results = mysqli_query($conn, $sql);
          $_SESSION['sess_user']=$username;
          header("Location: home.php");
        } else {
          $_SESSION['Error'] = "Fail to login";
          header('location: account.php');
          exit;
          echo mysqli_error($conn);
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
</body>
</html>

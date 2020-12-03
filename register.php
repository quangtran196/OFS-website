<?php
session_start();
?>
<html>
  <head>
    <title>Processing Registration</title>
  </head>
  <body>
    <h1>Processing</h1>
    <?php
      if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])) {
        if ($_POST["username"] && $_POST["password"] && $_POST["email"]) {
          $username = $_POST["username"];
          $password = $_POST["password"];
          $email = $_POST["email"];

          // create connection
          $conn = mysqli_connect("localhost", "root", "", "users");

          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $sql = "INSERT INTO accounts (username, password, email) VALUES
          ('$username', '$password', '$email')";
          $results = mysqli_query($conn, $sql);

          if ($results) {
            $_SESSION['success'] = "Your account has been added";
            header('location: account.php');
            exit;
          } else {
            $_SESSION['Error'] = "Fail to register";
            header('location: account.php');
            exit;
            echo mysqli_error($conn);
          }

          mysqli_close($conn); // close connection

        }   else {
          $_SESSION['Error'] = "All entries must be filled";
          header('location: account.php');
          exit;
          echo mysqli_error($conn);
        }
      } else {
      alert("Form was not submitted.");
      }
    ?>
  </body>
</html>

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
      if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["passconfirm"])
      && isset($_POST["email"]) && isset($_POST["emailconfirm"])) {
        if ($_POST["username"] && $_POST["password"] && $_POST["passconfirm"]
        && $_POST["email"] && $_POST["emailconfirm"]) {
          $username = $_POST["username"];
          $password = $_POST["password"];
          $passconfirm = $_POST["passconfirm"];
          $email = $_POST["emailconfirm"];
          $emailconfirm = $_POST["emailconfirm"];

          // create connection
          $conn = mysqli_connect("localhost", "root", "", "users");

          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $sql = "INSERT INTO accounts (username, password, passconfirm, email, emailconfirm) VALUES
          ('$username', '$password', '$passconfirm', '$email', '$emailconfirm')";
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
            alert("Username of password is empty.");
        }
      } else {
      alert("Form was not submitted.");
      }
    ?>
  </body>
</html>

<?php
session_start();
?>
<html>
  <head>
    <title>Processing Profile Update</title>
  </head>
  <body>
    <h1>Processing</h1>
    <?php
      $username = $_SESSION['sess_user'];
      if (isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["address"])
          && isset($_POST["city"]) && isset($_POST["state"]) && isset($_POST["zip"])) {
        if ($_POST["fullname"] && $_POST["email"] && $_POST["address"]
            && $_POST["city"] && $_POST["state"] && $_POST["zip"]) {
          $fullname = $_POST["fullname"];
          $email = $_POST["email"];
          $address = $_POST["address"];
          $city = $_POST["city"];
          $state = $_POST["state"];
          $zip = $_POST["zip"];

          // create connection
          $conn = mysqli_connect("localhost", "root", "", "users");

          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $sql = "UPDATE accounts SET fullname = '$fullname', email = '$email', address = '$address',
            city = '$city', state = '$state', zip = '$zip'
            WHERE username = '$username'";
          $results = mysqli_query($conn, $sql);

          $sql = "SELECT * FROM accounts WHERE username
              = '$username'";
          $results = mysqli_query($conn, $sql);

          if ($results) {
            $row = mysqli_fetch_assoc($results);
            if ($row["username"] === $username) {
              session_start();
              $sql = "SELECT * FROM accounts"; //Selecting all the accounts
              $results = mysqli_query($conn, $sql);
              $_SESSION['sess_user1']=$row["username"];
              $_SESSION['sess_fullname']=$row["fullname"];
              $_SESSION['sess_address']=$row["address"];
              $_SESSION['sess_city']=$row["city"];
              $_SESSION['sess_state']=$row["state"];
              $_SESSION['sess_zip']=$row["zip"];
              $_SESSION['sess_email']=$row["email"];
              $_SESSION['success'] = "Your profile has been updated";
              header('location: profile.php');
              exit;
              }
           }else {
            $_SESSION['Error'] = "An error has occured";
            header('location: profile.php');
            exit;
            echo mysqli_error($conn);
          }

          mysqli_close($conn); // close connection

        }   else {
          $_SESSION['Error'] = "Must fill all attributes";
          header('location: profile.php');
          exit;
          echo mysqli_error($conn);
        }
      } else {
      alert("Profile has not been updated");
      }
    ?>
  </body>
</html>

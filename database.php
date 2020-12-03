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
        $username = $_SESSION['sess_user'];
      // create connection
      $conn = mysqli_connect("localhost", "root", "", "users");

      // check connection
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }

      // select user
      $sql = "SELECT * FROM accounts WHERE username
          = '$username'";
      $results = mysqli_query($conn, $sql);

      if($results){
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
              header("Location: profile.php");
              exit;

            mysqli_close($conn); // close connection
            } else {
              echo "Nothing was submitted.";
            }
      }


            ?>
</body>
</html>

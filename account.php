<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <title>Registration/Login Page</title>
    <!-- <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> -->
      <link rel="stylesheet" href="./css/accountstyle.css">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  </head>
  <body>
<!-- menu bar-->
    <div class="container">
        <div class="navbar">
            <nav>
                <div class="logo">
                    <a href="home.php"><img src="images/homepage/logo.png" with="125px">
                    </a>
                </div>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="">Categories</a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="fruit.php">Fruits</a></li>
                                <li><a href="veggies.php">Vegetables</a></li>
                                <li><a href="meats.php">Meats</a></li>
                                <li><a href="dairy.php">Dairy</a></li>
                                <li><a href="snacks.php">Snacks</a></li>
                                <li><a href="cannedfood.php">Canned Food</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <?php
                    if(isset($_SESSION["sess_user"])){
                        echo "Hello, "; echo $_SESSION['sess_user']; echo "!";
                        echo "<li><a href='database.php'>Profile</a></h2></li>";
                        echo "<li><a href='logout.php'>Logout</a></h2></li>";
                    } else
                    { echo '<li><a href="account.php">Account</a></li>';
                    }
                    ?>
                    <!-- Product CART function -->
                    <li class = "cart">
                        <a href = "cart.php">
                            <ion-icon name ="basket"></ion-icon><span>0</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<!-- end of menu bar -->

<!--account-page-->

<div class="account-page">
  <div class="container">
    <div class="row">
      <!-- <div class="col-2">
        <img src="images/fruit.jpg" width="25%">
      </div> -->
      <div class="col-2">
        <div class="form-container">
          <div class="form-btn">
            <span onclick="login()">Login</span>
            <span onclick="register()">Register</span>
            <hr id="Indicator">
          </div>

          <form id="LoginForm" action="/login.php" method="post">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="btn">Login</button>
          </form>

          <form id="RegForm" action="/register.php" method="post">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <input type="text" placeholder="E-Mail" name="email">
            <button type="submit" class="btn">Register</button>
          </form>
          <div class="msg">
              <?php
                if( isset($_SESSION['Error']) )
                    {
                      echo $_SESSION['Error'];
                      unset($_SESSION['Error']);
                    }
                elseif (isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    }
               ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!---js for toggle form -->
  <script>

  var LoginForm = document.getElementById("LoginForm");
  var RegForm = document.getElementById("RegForm");
  var Indicator = document.getElementById("Indicator");

    function register(){
      RegForm.style.transform = "translateX(0px)";
      LoginForm.style.transform = "translateX(0px)";
      Indicator.style.transform = "translateX(100px)";
    }
    function login(){
      RegForm.style.transform = "translateX(300px)";
      LoginForm.style.transform = "translateX(300px)";
      Indicator.style.transform = "translateX(0px)";
    }

  </script>

  </body>
</html>

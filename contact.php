<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" href="./css/contact-style1.css">
    </head>

    <body>
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

      <div class="container-2">
          <h1>Reach Out to Us!</h1>
          <p> Please contact us with any problems or concerns and we will get back to you within 24 hours. </p>
              <div class="contact-box">
                <div class="contact-left">
                  <h3> Send us a Request </h3>
                  <form>
                    <div class="input-row">

                      <div class="input-group2">
                        <label> Name </label>
                        <input type="text" placeholder = "Jane Doe">
                      </div>

                      <div class="input-group2">
                        <label> Phone </label>
                        <input type="text" placeholder = "+1-800-999-9999">
                      </div>

                      <div class="input-group2">
                        <label> Email </label>
                        <input type="text" placeholder = "janedoe@gmail.com">
                      </div>

                      <div class="input-group">
                        <label> Subject </label>
                        <input type="text" placeholder = "Web Order Delay">
                      </div>

                    </div>

                    <label> Message </label>
                    <textarea row="5" placeholder="Insert Message Here"></textarea>

                    <button onclick="popUp()" type="submit">SEND</button>

                  </form>

                </div>

                <div class="contact-right">
                  <h3> Contact Us Direct </h3>

                  <table>
                    <tr>
                      <td>Email</td>
                      <td>07S@grocerystore.com</td>
                    </tr>

                    <tr>
                      <td>Phone</td>
                      <td>+1-800-8000</td>
                    </tr>

                    <tr>
                      <td>Address</td>
                      <td>1111 Grocerystore st. San Jose, CA, 95111</td>
                    </tr>

                </div>
              </div>
      </div>
      <script>
      function popUp(){
          swal({ title: "Thank you!",
           text: "We will send you the confirmation email in a few seconds.",
           type: "success",
           button: "Back to Home Page",}).then(okay => {
             if (okay) {
              window.location.href = "home.php";
            }
          });
      }
    </script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="cannedcart.js"></script>
    <script src="fruitscart.js"></script>
    <script src="meatscart.js"></script>
    <script src="snackscart.js"></script>
    <script src="veggiecart.js"></script>


      </body>

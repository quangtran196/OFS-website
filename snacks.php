<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snacks</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <link rel="stylesheet" href="./css/category-style.css">
        <style>
.container1,
.products-container{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 50px;
    padding-bottom: 100px;
}
.image {
  margin-right: 20px;
  margin-left: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
  position: relative;
  overflow: hidden;
}
.add-cart {
  position: absolute;
  width: 100%;
  background-color: darkgrey;
  transition: all 0.3s ease-in-out;
  opacity: 0;
  cursor: pointer;
  text-align: center;
  margin-bottom: 20px;
}
.image:hover .cart1,
.image:hover .cart2,
.image:hover .cart3,
.image:hover .cart4,
.image:hover .cart5 {
  bottom: 50px;
  opacity: 1;
  padding: 10px;
  text-decoration: none;
}


      </style>
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

        <div class="body1">
            <div class="img-container">
                <img src="images/imagesfe/snackm.jpg" alt="" class="main-fruit">
                <div class="overlay">
                </div>
            </div>
        </div>

        <!-- feature products -->
        <div class="features">
            <h1>Snacking Products</h1>
                <ul>
                    <li><a href="fruit.php">Fruits</a></li>
                    <li><a href="veggies.php">Vegetables</a></li>
                    <li><a href="meats.php">Meats</a></li>
                    <li><a href="dairy.php">Dairy</a></li>
                    <li><a href="snacks.php">Snacks</a></li>
                    <li><a href="cannedfood.php">Canned Food</a></li>
                </ul>
            </div>
        <!-- end of feature products -->

        <!-- Products -->
              <div class = "container1">
                  <div class = "image">
                      <img src = "images/imagesfe/cheetos.jpg" alt="fruit2">
                      <h3> Cheetos Crunchy Original </h3>
                      <h3> 12oz </h3>
                      <h3> $1.90 </h3>
                      <a class="add-cart cart1" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/lays.jpg" alt="fruit2">
                      <h3> Lays Classic </h3>
                      <h3> 12oz </h3>
                      <h3> $2.20 </h3>
                      <a class="add-cart cart2" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/doritos.jpg" alt="fruit2">
                      <h3> Nacho Cheese Doritos </h3>
                      <h3> 12oz </h3>
                      <h3> $1.40 </h3>
                      <a class="add-cart cart3" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/takis.jpg" alt="fruit2">
                      <h3> Takis Fuego </h3>
                      <h3> 12oz </h3>
                      <h3> $2.50 </h3>
                      <a class="add-cart cart4" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/pringles.jpg" alt="fruit2">
                      <h3> Pringles Original </h3>
                      <h3> 10oz </h3>
                      <h3> $1.90 </h3>
                      <a class="add-cart cart5" href="#"> Add to Cart</a>
                  </div>
                </div>


        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="snackscart.js"></script>


    </body>
</html>

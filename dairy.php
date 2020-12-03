<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dairy</title>
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
                        <li><a href="checkout.php">Checkout</a></li>

                        <!-- Product CART function -->

                        <li class = "cart">
                          <a href = "cart.php">
                            <ion-icon name ="basket"></ion-icon><span>0</span>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- end of menu bar -->

        <div class="body1">
            <div class="img-container">
                <img src="images/imagesfe/dairym.jpg" alt="" class="main-fruit">
                <div class="overlay">
                </div>
            </div>
        </div>

        <!-- feature products -->
        <div class="features">
            <h1>Dairy Products</h1>
            <ul>
              <li><a href="fruit.html">Fruits</a></li>
              <li><a href="veggies.html">Vegetables</a></li>
              <li><a href="meats.html">Meats</a></li>
              <li><a href="dairy.html">Dairy</a></li>
              <li><a href="#">Snacks</a></li>
              <li><a href="cannedfood.html">Canned Food</a></li>
            </ul>
            </div>
        <!-- end of feature products -->

        <!-- Products -->
              <div class = "container1">
                  <div class = "image">
                      <img src = "images/imagesfe/milk.jpg" alt="fruit2">
                      <h3> Daily Pure low fat Milk </h3>
                      <h3> 8.6 lbs </h3>
                      <h3> $3.35 </h3>
                      <a class="add-cart cart1" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/cheese.jpg" alt="fruit2">
                      <h3> Kraft American Cheese </h3>
                      <h3> 1.0lb </h3>
                      <h3> $5.39 </h3>
                      <a class="add-cart cart2" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/icecream.jpeg" alt="fruit2">
                      <h3> Breyers Original Chocolate Ice Cream </h3>
                      <h3> 3.0 lbs </h3>
                      <h3> $4.49 </h3>
                      <a class="add-cart cart3" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/yogurt.jpeg" alt="fruit2">
                      <h3> Yoplait Original Yogurt Strawberry </h3>
                      <h3> 2.0 lb </h3>
                      <h3> $2.14 </h3>
                      <a class="add-cart cart4" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/butter.jpeg" alt="fruit2">
                      <h3> Land O'Lakes Salted Butter </h3>
                      <h3> 1.0lb </h3>
                      <h3> $5.99 </h3>
                      <a class="add-cart cart5" href="#"> Add to Cart</a>
                  </div>
                </div>


        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="dairycart.js"></script>


    </body>
</html>

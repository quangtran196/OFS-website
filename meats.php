<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Meats</title>
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
.image:hover .cart6,
.image:hover .cart7,
.image:hover .cart8,
.image:hover .cart9,
.image:hover .cart10 {
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
                            echo "<li><a href='profile.php'>Profile</a></h2></li>";
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
                <img src="images/imagesfe/meatm.jpg" alt="" class="main-fruit">
                <div class="overlay">
                </div>
            </div>
        </div>
        <!-- feature products -->
        <div class="features">
            <h1>Fresh Meat Products</h1>
            <ul>
                <li><a href="fruit.php">Fruits</a></li>
                <li><a href="veggies.php">Vegetables</a></li>
                <li><a href="meats.php">Meats</a></li>
                <li><a href="dairy.php">Dairy</a></li>
                <li><a href="cannedfood.php">Canned Food</a></li>
            </ul>
            </div>
        <!-- end of feature products -->

        <!-- Products -->
              <div class = "container1">
                  <div class = "image">
                      <img src = "images/imagesfe/ribeye.JPG" alt="fruit2">
                      <h3> American Angus Ribeye Steak </h3>
                      <h3> 12oz </h3>
                      <h3> $14.95 </h3>
                      <a class="add-cart cart6" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/groundbeef.JPG" alt="fruit2">
                      <h3> Kroger 100% Pure Ground Beef  </h3>
                      <h3> 16.0oz </h3>
                      <h3> $8.79 </h3>
                      <a class="add-cart cart7" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/chickenb.JPG" alt="fruit2">
                      <h3> Foster Farms Chicken Breast </h3>
                      <h3> 10.0oz </h3>
                      <h3> $13.49 </h3>
                      <a class="add-cart cart8" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/chickenwing.JPG" alt="fruit2">
                      <h3> Yorkshire Valley Chicken Wings </h3>
                      <h3> 24.0oz </h3>
                      <h3> $14.54 </h3>
                      <a class="add-cart cart9" href="#"> Add to Cart</a>
                  </div>

                  <div class = "image">
                      <img src = "images/imagesfe/porkchop.JPG" alt="fruit2">
                      <h3> Hormet Pork Chop Cut </h3>
                      <h3> 40.0oz </h3>
                      <h3> $25.99 </h3>
                      <a class="add-cart cart10" href="#"> Add to Cart</a>
                  </div>
                </div>


        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="meatscart.js"></script>


    </body>
</html>

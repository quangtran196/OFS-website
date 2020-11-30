<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Fruit</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/category-style.css">
        <style>
.container1{
  display: none;
 position: block;
 display: flex;
 flex-direction: row;
 justify-content: center;
 margin-left:75px;
 margin-right: 75px;
 transition: transform 0.8s;
}
.gallery{
    margin: 1px;
    border: 1.25pc solid #ccc;
    float: left;
    width: 415px;
}
.gallery img {
  width:100%;
  height: auto;
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
                <img src="images/homepage/main-page.jpg" alt="" class="main-fruit">
                <div class="overlay">
                </div>
            </div>
        </div>

        <!-- feature products -->
        <div class="features">
            <h1>Fruit</h1>
            <ul>
                <li><a href="fruit.php">Fruits</a></li>
                <li><a href="veggies.php">Vegetables</a></li>
                <li><a href="meats.php">Meats</a></li>
                <li><a href="dairy.php">Dairy</a></li>
                <li><a href="cannedfood.php">Canned Food</a></li>
            </ul>
            </div>

                  <div class= "container1">
                    <div class="gallery">
                        <a href=""><img src="images/imagesfe/norange.jpg" class="fruit2"></a>
                        <h4><a href="#">Navel Orange</a></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>3.0 lbs</p>
                        <p>$4.88</p>

                          <label> Quantity: </label>
                        <form action="/addcart.php" method= "post">
                          <input type ="number" value="0">
                          <input type="submit" value="Add to cart">
                          </form>
                          </div>


                      <div class="gallery">
                          <a href=""><img src="images/imagesfe/apple.jpg" class="fruit2"></a>
                          <h4><a href="#">Gala Apples</a></h4>
                          <div class="rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>

                          <p>3.0 lbs</p>
                          <p>$2.67</p>
                      </div>
                      <label> Quantity: </label>
                      <form action="/addcart.php" method= "post">
                      <input type ="number" value="0">
                      <input type="submit" value="Add to cart">
                      </form>
                      </div>


                    <div class="gallery">
                        <a href=""><img src="images/imagesfe/sberry.jpg" class="fruit2"></a>
                        <h4><a href="#"> Produce Unbranded Hot House Strawberries</a></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>1.0 lbs</p>
                        <p>$2.28</p>

                        <label> Quantity: </label>
                        <form action="/addcart.php" method= "post">
                        <input type ="number" value="0">
                        <input type="submit" value="Add to cart">
                        </form>
                        </div>




                              <div class="gallery">
                                <a href=""><img src="images/imagesfe/redg.jpg" class="fruit2"></a>
                                <h4><a href="#">Organic Red seedless Grapes</a></h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>1.5 lbs</p>
                                <p>$4.99</p>

                                <label> Quantity: </label>
                                <form action="/addcart.php" method= "post">
                                <input type ="number" value="0">
                                <input type="submit" value="Add to cart">
                                </form>
                                </div>



                          <div class="gallery">
                                <a href=""><img src="images/imagesfe/ki.jpg" class="fruit2"></a>

                              <h4><a href="#">Kiwis</a></h4>
                              <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                              <p> 2.0 lbs</p>
                              <p>$3.98</p>

                              <label> Quantity: </label>
                              <form action="/addcart.php" method= "post">
                              <input type ="number" value="0">
                              <input type="submit" value="Add to cart">
                              </form>
                              </div>
                                </div>


        <!-- end of feature products -->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


    </body>
</html>

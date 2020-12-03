<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/homepage-style.css">
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
                        if(isset($_SESSION["sess_email"])){
                            echo "Hello, "; echo $_SESSION['sess_email']; echo "!";
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

        <!-- catagories -->
        <div class="body1">
            <div class="img-container">
                <img src="images/homepage/main-page.jpg" alt="" class="main-fruit">
                <div class="overlay">
                    <div class="text">
                        <h4>DAILY FRESH REFRESH FOOD</h4>
                        <h1>Fresh Fruit</h1>
                        <p>From the greatest garden! Freshing and Tasty</p>
                    </div>
                </div>
            </div>

        </div>



        <div class="catagory-main">
            <h1>Catagories</h1>
            <div class="row1">
                <a href="fruit.php"><img src="images/homepage/orange.png" class="fruit"></a>
                <a href="veggies.php"><img src="images/homepage/vegetable.png" class="fruit2"></a>
                <a href="meats.php"><img src="images/homepage/meat.png" class="fruit"></a>
            </div>

            <div class="row2">
                <a href="dairy.php"><img src="images/homepage/dairy.png" class="fruit1"></a>
                <a href="#"><img src="images/homepage/candy.png" class="fruit2"></a>
                <a href="cannedfood.php"><img src="images/homepage/canned.png" class="fruit3"></a>
            </div>
        </div>
        <!-- end of catagories -->

        <!-- feature products -->
        <div class="features">
            <div class="">
                <h1>Featured Products</h1>

            </div>

            <div class="row-dairy">
                <div class="col-1">
                    <div class="item-img">
                        <a href=""><img src="images/homepage/grapes.png" ></a>
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
                    </div>
                </div>
                <div class="col-2">
                    <div class="item-img">
                        <a href=""><img src="images/homepage/milk.png" ></a>
                        <h4><a href="#">Daily Pure Low Fat Milk - 1 gal</a></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>8.6 lbs</p>
                        <p>$3.35</p>
                    </div>

                </div>
                <div class="col-3">
                    <div class="item-img">
                        <a href=""><img src="images/homepage/broccoli.png"></a>
                        <h4><a href="#">Fresh Organic Broccoli - 1lb</a></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>1lbs</p>
                        <p>$4.99</p>
                    </div>
                </div>
                <div class="col-1">
                    <div class="item-img">
                        <a href=""><img src="images/homepage/chicken-wings.png" ></a>
                        <h4><a href="#">Yorkshire Valley Chicken Wings - 24oz</a></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>24oz</p>
                        <p>$14.54</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- end of feature products -->

        <!-- content page-->
        <div class="content-page">
            <div class="content-col1">
                <div class="page1">
                    <img src="images/homepage/always-fresh.jpg" class="fresh">
                </div>
                <div class="page2">
                    <div class="text">
                        <h1>100% Natural</h1>
                        <h2>____________</h2>
                        <br></br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="page3">
                    <img src="images/homepage/home-cook.jpg" >
                </div>
            </div>
            <div class="content-col2">
                <div class="page4">
                    <div class="text">
                        <h1>Always Fresh</h1>
                        <h2>____________</h2>
                        <br></br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="page5">
                    <img src="images/homepage/fruit-content-1.jpg" >
                </div>
                <div class="page6">
                    <div class="text">
                        <h1>Healthy Cooking</h1>
                        <h2>____________</h2>
                        <br></br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- end of content page -->

        <!-- Testinomial -->
        <div class="testinomial">
            <div class="tes-container">
                <div class="tes-row">
                    <div class="tes-col">
                        <i class="fa fa-quote-left"></i>
                        <p>We are busy people having no time to shop.</p>
                        <p>Grocery Raja solves our problem by delivering products at door step WHENEVER we want. Thank you, OFS.</p>
                        <img src="images/homepage/p1.jpg" alt="">
                        <h2>Cardi B</h2>
                    </div>
                    <div class="tes-col">
                        <i class="fa fa-quote-left"></i>
                        <p>Decent prices, a good amount of products to choose from, efficient and friendly staff from customer service.</p>
                        <p>I love their service.</p>
                        <img src="images/homepage/p2.jpg" alt="">
                        <h2>Fauci Anthony</h2>
                    </div>
                    <div class="tes-col">
                        <i class="fa fa-quote-left"></i>
                        <p>Now you don't need a long wait to get your groceries every week.</p>
                        <p> You can order just in few mins and get it delivered the same day.</p>
                        <img src="images/homepage/p3.jpg" alt="">
                        <h2>Selena Gomez</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of testinomial -->

        <!-- General Information/ Footer-->
        <div class="footer">
            <div class="footer-col">
                <div class="download">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <img src="images/homepage/appstore.png" alt="" class="appstore">
                    <img src="images/homepage/google-play.png" alt="" class="google">
                </div>

            </div>
            <div class="footer-col">
                <div class="text">
                    <h1>O F S</h1>
                    <p>Every day you get our best.</p>
                </div>

            </div>
            <div class="footer-col">
                <div class="text">
                    <h2>Useful Links</h2>
                    <ul>
                        <li><a href="#">Coupons</a></li>
                        <li><a href="#">Blog Post</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Join Affiliate</a></li>
                    </ul>
                </div>

            </div>
            <div class="footer-col">
                <div class="text">
                    <h2>Follow Us</h2>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- end of General Information/ Footer-->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="cannedcart.js"></script>
        <script src="fruitscart.js"></script>
        <script src="meatscart.js"></script>
        <script src="snackscart.js"></script>
        <script src="veggiecart.js"></script>


    </body>
</html>

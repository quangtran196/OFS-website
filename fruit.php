
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Fruit</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                    <li><a href="#">Snacks</a></li>
                                    <li><a href="cannedfood.php">Canned Food</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="account.php">Account</a></li>
                        <li><a href="">Checkout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end of menu bar -->

        <div class="body1">
            <img src="images/imagesfe/main-page.jpg" alt="" height="200">
        </div>

        <!-- feature products -->
        <div class="features">
            <h1>Fruit</h1>
            <ul>
              <li><a href="fruit.php">Fruits</a></li>
              <li><a href="#">Vegetables</a></li>
              <li><a href="#">Meats</a></li>
              <li><a href="dairy.php">Dairy</a></li>
              <li><a href="#">Snacks</a></li>
              <li><a href="#">Canned Food</a></li>
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
                        <br></br><h4><a href="#"> Produce Unbranded Hot House Strawberries</a></h4>
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
                                <br></br>  <br></br>  <br></br>   <br>
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


    </body>
</html>

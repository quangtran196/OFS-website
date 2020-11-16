<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Meat Products</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="./css/category-style.css">
        <style>
.container1{
  max-width: 1700px;
  margin: auto;
  background: #f2f2f2;
  overflow: auto;
}
.gallery{
    margin: 1px;
    border: 1.25pc solid #ccc;
    float: left;
    width: 415px;
}
.gallery img {
  width:100%;
  height:auto;
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
            <h1>Meat Products</h1>
            <ul>
                <li><a href="#">Fruits</a></li>
                <li><a href="#">Vegetables</a></li>
                <li><a href="#">Meats</a></li>
                <li><a href="#">Dairy</a></li>
                <li><a href="#">Snacks</a></li>
                <li><a href="#">Canned Food</a></li>
            </ul>
            </div>

                  <div class= "container-catagory">
                    <div class="gallery">
                        <a href=""><img src="images/imagesfe/ribeye.jpg" class="fruit2"></a>
                        <h4><a href="#">American Angus Ribeye Steak - 12oz</a></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>12oz</p>
                        <p>$14.95</p>

                          <label> Quantity: </label>
                        <form action="/addcart.php" method= "post">
                          <input type ="number" value="0">
                          <input type="submit" value="Add to cart">
                        </form>
                    </div>




                      <div class="gallery">
                          <a href=""><img src="images/imagesfe/groundbeef.jpg" class="fruit2"></a>
                          <h4><a href="#">Kroger 100% Pure Ground Beef - 16oz</a></h4>
                          <div class="rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>

                          <p>16oz</p>
                          <p>$8.79</p>
                      </div>
                      <label> Quantity: </label>
                      <form action="/addcart.php" method= "post">
                      <input type ="number" value="0">
                      <input type="submit" value="Add to cart">
                      </form>
                      </div>





                    <div class="gallery">
                        <a href=""><img src="images/imagesfe/chickenb.jpg" class="fruit2"></a>
                        <h4><a href="#">Foster Farms Chicken Breast - 10oz</a></h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>10oz</p>
                        <p>$13.49</p>

                        <label> Quantity: </label>
                        <form action="/addcart.php" method= "post">
                        <input type ="number" value="0">
                        <input type="submit" value="Add to cart">
                        </form>
                        </div>




                              <div class="gallery">
                                <a href=""><img src="images/imagesfe/chickenwing.jpg" class="fruit2"></a>
                                <h4><a href="#">Yorkshire Valley Chicken Wings - 24oz</a></h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>24oz</p>
                                <p>$14.54</p>

                                <label> Quantity: </label>
                                <form action="/addcart.php" method= "post">
                                <input type ="number" value="0">
                                <input type="submit" value="Add to cart">
                                </form>
                                </div>





                          <div class="gallery">
                              <a href=""><img src="images/imagesfe/porkloin.jpg" class="fruit2"></a>
                              <h4><a href="#">Hormet Pork Center Cut Loin 27.2oz</a></h4>
                              <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                              <p>27.2oz</p>
                              <p>$17.99</p>

                              <label> Quantity: </label>
                              <form action="/addcart.php" method= "post">
                              <input type ="number" value="0">
                              <input type="submit" value="Add to cart">
                              </form>
                              </div>


                          <div class="gallery">
                                  <a href=""><img src="images/imagesfe/porkchop.jpg" class="fruit2"></a>
                                  <h4><a href="#">Hormet Pork Chop Cut 40oz</a></h4>
                                  <div class="rating">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                  </div>
                                  <p>40oz</p>
                                  <p>$25.99</p>

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

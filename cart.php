<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cart</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <link rel="stylesheet" href="./css/homepage-style.css">

<style>

.products-container {
  max-width: 1150px;
  justify-content: space-around;
  margin: 0 auto;
  margin-top: 50px;
}
.products-container ion-icon {
  font-size: 25px;
  color: blue;
  margin-left: 10px;
  margin-right: 10px;
  cursor: pointer;
}
.products-container img {
  width: 15%;
  height: 10%;
}
.product-header {
  width: 100%;
  max-width: 1150px;
  display: flex;
  justify-content: flex-start;
  border-bottom: 1px solid lightgrey;
  margin: 0 auto;
}
.product-title {
  width: 70%;
}
.weight {
  width: 20%;
  border-bottom: 1px solid lightgrey;
  display: flex;
  align-items: center;
}
.price {
  width: 25%;
  border-bottom: 1px solid lightgrey;
  display: flex;
  align-items: center;
}
.quantity {
  width: 30%;
  border-bottom: 1px solid lightgrey;
  display: flex;
  align-items: center;
}
.total {
  width: 10%;
  border-bottom: 1px solid lightgrey;
  display: flex;
  align-items: center;
}
.product {
  width: 45%;
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 10px 0;
  border-bottom: 1px solid lightgrey;
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

                        <li class = "cart">
                          <a href = "cart.php">
                            <ion-icon name ="basket"></ion-icon><span>0</span>
                          </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class = "products-container">
            <div class = "product-header">
                <h5 class = "product-title"> PRODUCT </h5>
                <h5 class = "price"> PRICE </h5>
                <h5 class = "weight"> WEIGHT </h5>
                <h5 class = "quantity"> QUANTITY </h5>
                <h5 class = "total"> TOTAL </h5>
            </div>
            <div class = "products">

            </div>
        </div>

        <!-- end of menu bar -->

        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="cannedcart.js"></script>
        <script src="cannedcart.js"></script>
        <script src="fruitscart.js"></script>
        <script src="meatscart.js"></script>
        <script src="snackscart.js"></script>
        <script src="veggiecart.js"></script>

  </body>
</html>

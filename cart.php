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
.body{
  width: 100%;
}

.products-container {
  max-width: 83%;
  justify-content: space-around;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
}
.products-container ion-icon {
  font-size: 25px;
  color: blue;
  margin-left: 10px;
  margin-right: 10px;
  cursor: pointer;
}
.products-container img {
  width: 50%;
  height: 50%;
}
.product-header {
  width: 100%;

  display: flex;
  justify-content: flex-start;
  margin-bottom: 5px;
  margin-left: auto;
  margin-right: auto;
}
.product-title {
  width: 17%;
}
h5.weight {
  width: 15%;
  border-bottom: 3px solid lightgrey;
  display: flex;
  padding-left: 5%;
}
div.weight {
  padding-left: 20%;
  margin-left: 15%;
}
h5.price {

  width: 11.5%;
  border-bottom: 3px solid lightgrey;
  display: flex;
  align-items: center;
  text-align: center;
}
div.price {
  padding-left:6%;
  margin-left: 23%;
}
.quantity {
  width: 20%;
  border-bottom: 3px solid lightgrey;
  display: flex;
  align-items: center;
  padding-left: 5%;
}
div.quantity {
  margin-left: 27%;
}
h5.total {
  width: 10%;
  border-bottom: 3px solid lightgrey;
  display: flex;
  align-items: center;

}
div.total {
  display: flex;
  padding-left: 15%;
  margin-left: 10%;
}
.product {
  width: 40%;
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 10px 0;
  margin-left: 10%;
}
.product-title {
  width: 16%;
  border-bottom: 3px solid lightgrey;
}
.basketTotalContainer {
  display: flex;
  justify-content: flex-end;
  width: 70%;
  padding: 10px 0;
}
h4.backetTotalTitle {
  width: 12%;
}
h4.WeightTotalTitle {
  width: 13%;
  margin-left: 20px;
}
button{
  background: #1c00b5;
  width: 100px;
  border: none;
  outline: none;
  color: #fff;
  height: 35px;
  border-radius: 30px;
  margin-top: 20px;
  box-shadow: 0px 5px 15px 0px rgba(28, 0, 181, 0.3);
  cursor: pointer;
  margin-left: 62%;
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

        <div class = "products-container">
            <div class = "product-header">
                <h5 class = "product-title"> PRODUCT </h5>
                <h5 class = "price"> PRICE </h5>
                <h5 class = "weight"> WEIGHT </h5>
                <h5 class = "quantity"> QUANTITY </h5>
                <h5 class = "total"> TOTAL </h5>
            </div>
            <div class = "products"></div>
            <div class ="price"></div>

                <form action="home.php">
                    <button type="submit">Continue Shopping</button>
                </form>

                <form action="deli-payment.php">
                    <button type="submit">Continue to Checkout</button>
                </form>

        </div>

        <!-- end of menu bar -->

        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="veggiecart.js"></script>
        <script src="meatscart.js"></script>
        <script src="fruitcart.js"></script>
        <script src="snackscart.js"></script>
        <script src="dairycart.js"></script>
        <script src="cannedcart.js"></script>


  </body>
</html>

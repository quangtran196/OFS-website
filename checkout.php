<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="./css/checkoutstyle.css">
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
                        <?php
                        if(isset($_SESSION["sess_user"])){
                            echo "<li><a href='account.php'>Bob</a></li>";
                            echo "<li><a href='logout.php'>Logout</a></h2></li>";
                        } else
                        { echo '<li><a href="account.php">Account</a></li>';
                        }
                        ?>
                        <li><a href="checkout.php">Checkout</a></li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- end of menu bar -->

        <!-- checkout page -->
        <div class = "checkout checkoout-page">
            <table>
                <tr>
                    <th> Product </th>
                    <th> Quantity </th>
                    <th> Subtotal </th>

                </tr>
                <tr>
                    <td>
                      <div class="checkout-info">
                        <img src="images/checkout/broccoli.jpg">
                        <div>
                            <p>Broccoli</p>
                            <small>Price: $5.54 </small>
                            <br>

                            <a href = "">Remove</a>
                        </div>
                      </div>
                    </td>
                    <td> <input type = "number" value="1"></td>
                    <td> $$$ </td>
                </tr>
                <tr>
                    <td>
                      <div class="checkout-info">
                        <img src="images/checkout/milk2.jpg">
                        <div>
                            <p>Milk</p>
                            <small>Price: $5.00 </small>
                            <br>

                            <a href = "">Remove</a>
                        </div>
                      </div>
                    </td>
                    <td> <input type = "number" value="1"></td>
                    <td> $$$ </td>
                </tr>
                <tr>
                    <td>
                      <div class="checkout-info">
                        <img src="images/checkout/eggs.jpg">
                        <div>
                            <p>Eggs</p>
                            <small>Price: $6.00 </small>
                            <br>

                            <a href = "">Remove</a>
                        </div>
                      </div>
                    </td>
                    <td> <input type = "number" value="1"></td>
                    <td> $$$ </td>
                </tr>
            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>$$$$</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$$</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$$$$</td>
                    </tr>
                </table>
            </div>
        </div>


        <!-- checkout page end -->


    </body>
</html>

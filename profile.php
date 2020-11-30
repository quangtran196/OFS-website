<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/deli.css">
        <title>Delivery and Payment Method</title>
    </head>
    <body>

        <!-- menu bar-->
            <div class="containe1">
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
                        </ul>
                    </nav>
                </div>
            </div>
        <!-- end of menu bar -->
        <h2>Your Profile</h2>

        <div class="row">
            <div class="col">
                <div class="container">
                    <form class="" action="" method="post">
                        <div class="row">
                            <div class="col-50">
                                <h3>Personal Information</h3>
                                <label for="name"><i class"fa fa-user">Full Name</i></label>
                                <input type="text" id="fname" name="name" placeholder="Michael Jackson">
                                <label for="email"><i class"fa fa-envelope"> Email</i></label>
                                <input type="text" id="email" name="email" placeholder="john@example.com">
                                <label for="adr"><i class"fa fa-address-caed-o">Address</i></label>
                                <input type="text" id="adr" name="address" placeholder="123 Market Street">
                                <label for="city"><i class"fa fa-institution">City</i></label>
                                <input type="text" id="city" name="city" placeholder="San Jose">

                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">State</label>
                                        <input type="text" id="state" name="state" placeholder="San Jose">
                                    </div>
                                    <div class="col-50">
                                        <label for="state">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="10000">
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3>Your Order History</h3>
                                <textarea id="w3review" name="w3review" rows="30" cols="70">
                                Hello
                                </textarea>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/deli.css">
        <title>Delivery and Payment Method</title>
    </head>
    <body>
        <h2>Delivery Form</h2>

        <div class="row">
            <div class="col">
                <div class="container">
                    <form class="" action="" method="post">
                        <div class="row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
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
                                <h3>Payment</h3>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="card-name" name="cnumber" placeholder="Michael Jackson">
                                <label for="ccnum">Credit Card</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1234-1231-1234-1234">
                                <label for="card-name">Expire Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="Month">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Expire Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2022">
                                    </div>
                                    <div class="col-50">
                                        <label for="state">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="543">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label><input type="checkbox" name="sameadr" checked="checked">Shipping Address same as billing</label>
                        <input type="submit" name="" value="Continue To checkbox" class="btn">
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/deli.css">
        <title>Delivery and Payment Method</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                                        <input type="text" id="state" name="state" placeholder="CA">
                                    </div>
                                    <div class="col-50">
                                        <label for="state">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="10000" minlength="5" maxlength="5">
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="card-name" name="cnumber" placeholder="Michael Jackson">
                                <label for="ccnum">Credit Card</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="0000111122223333" minlength="16"
                                maxlength="16">
                                <label for="card-name">Expire Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="00"
                                minlength="2" maxlength="2">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Expire Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2022" minlength="4" maxlength="4">
                                    </div>
                                    <div class="col-50">
                                        <label for="state">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="543" minlength="3" maxlength="3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label><input type="checkbox" name="sameadr" checked="checked">Shipping Address same as billing</label>
                        <button id="btn" onclick="popUp()" style=" width: 200px; height: 50px; margin-left:50px">Pay Now</button>
                    </form>

                </div>
            </div>

        </div>
        <script>
            let deliInfo = [];
            n =  new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();

            const addInfo = (ev) =>{
                ev.preventDefault();
                let info = {
                    id: Date.now(),
                    date: m + "/" + d + "/" + y,
                    fname: document.getElementById('fname').value,
                    email:document.getElementById('email').value,
                    adr:document.getElementById('adr').value,
                    city:document.getElementById('city').value,
                    state:document.getElementById('state').value,
                    zip:document.getElementById('zip').value,
                    cardName:document.getElementById('card-name').value,
                    cardNum:document.getElementById('ccnum').value,
                    expmonth:document.getElementById('expmonth').value,
                    expYear:document.getElementById('expyear').value,
                    cvv:document.getElementById('cvv').value
                }
                deliInfo.push(info);
                document.forms[0].reset();


                localStorage.setItem('DeliveryInfo',JSON.stringify(deliInfo));
            }
            document.addEventListener('DOMContentLoaded', ()=>{
                document.getElementById('btn').addEventListener('click', addInfo);
            });
            function popUp(){
                swal({ title: "Thank you!",
                 text: "We will send you the confirmation email in a few seconds.",
                 type: "success",
                 button: "Back to Home Page",}).then(okay => {
                   if (okay) {
                    window.location.href = "home.php";
                  }
                });
            }
            localStorage.clear();
        </script>
    </body>
</html>

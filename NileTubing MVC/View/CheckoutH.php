<?php
include_once "../controller/checkoutController.php";

require_once 'userNavBar.html';
class checkoutView
{
    public static function checkouthome()
    {
        echo'
        <html>
        <head>
        <link rel="stylesheet" href="checkout.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        </head>
        <body>
        <div class= "logo" id="logo">
        <img src="./Images/NTLogo.png" alt="">
    </div>

    <div class="content-box">
        <h1 class="info">Proceed To Checkout</h1>
        <p class="Trip">Trip</p>
        <input type="text" class="input Triprect" name="trip">
        <p class="date">date</p>
        <input type="text" class="input daterect" name="date">
        <p class="price">Price</p>
        <input type="text" class="input2 pricerect" name="price">
        <p class="quantity">Quantity</p>
        <input type="number" class="input2 quantityrect">
        <p class="total">Total</p>
        <input type="text" class="input totalrect">
        <a href="paymentMainView.php"><button class="rect">Checkout</button></a>
    </div>
</body>
</html>
        ';
    }
}

?>
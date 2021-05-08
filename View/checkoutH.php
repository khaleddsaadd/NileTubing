<html>
<head>
<link rel="stylesheet" href="checkout.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
<div class="row-md">
            <div class="indexBG"></div>
                <?php include 'userNavBar.html';?>     
        </div>
</div>

<div class="content-box">
    <h1 class="info">Proceed To Checkout</h1>
    <p class="Trip">Trip</p>
    <input type="text" class="input Triprect">
    <p class="date">date</p>
    <input type="text" class="input daterect">
    <p class="price">Price</p>
    <input type="text" class="input2 pricerect">
    <p class="quantity">Quantity</p>
    <input type="number" class="input2 quantityrect">
     
    <p class="total">Total</p>
    <input type="text" class="input totalrect">
    <a href="paymentH.php"><button class="rect">Checkout</button></a>

</div>
</body>
</html>
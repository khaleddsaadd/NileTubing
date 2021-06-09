<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="checkout.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
        <?php 
            include 'NavBoot/index.html';
        ?>
</head>
<?php

require_once('__ROOT__' . "view/View.php");
include 'CSS/checkoutCSS.php';

class checkout extends View
{
    public function output()
    {
        $str ="";
        $str .='<div class="container-fluid">
                    <div class = "row">    
                        <h1 class="info">Proceed To Checkout</h1>    
                            <div class = "col-sm-6 col-md-6">
                                <p class="Trip">Trip</p>
                                <p class="date">date</p>
                                <p class="price">Price</p>
                                <p class="quantity">Quantity</p>
                                <p class="total">Total</p>
                            </div>
                            <div class = "col-sm-3 "> 
                                <input type="text" class="input Triprect"> 
                                <input type="text" class="input daterect">
                                <input type="text" class="input2 pricerect">
                                <input type="number" class="input2 quantityrect">
                                <input type="text" class="input totalrect">
                            </div>                
                            <div class = "col-sm-3">
                                <a href="paymentH.php"><button class="rect">Checkout</button></a>
                            </div> 
                    </div>
                </div>';
        $str.='';
        return $str;
    }
}
?>
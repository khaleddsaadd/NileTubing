<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <?php include 'NavBoot/index.html';?>
        
</head>

<?php
require_once(__ROOT__ . "view/View.php");
include 'CSS/checkoutCSS.php';

class checkouts extends View
{
    public function output()
    {
        $str ="";
        $str .='<div class = "body">
                    <div class="container-fluid">
                                <div class = "row">    
                                    <h1 class="info">Proceed To Checkout</h1>    
                                        <div class = "column">
                                            <p class="Trip">Trip</p>
                        
                                            <p class="date">date</p>
                                            <p class="price">Price</p>
                                            <p class="quantity">Quantity</p>
                                            <p class="total">Total</p>
                                        </div>
                                </div>
                                        <div class= "row">
                                            <div class = "coulumn "> 
                                                
                                                <label class= "input Triprect">'.$this->model->get_name().'</label>
                                                <input type="text" class="input daterect">
                                                <input type="text" class="input2 pricerect">
                                                <input type="number" class="input2 quantityrect">
                                                <input type="text" class="input totalrect">
                                            </div> 
                                        </div>             
                                        <div class = "row">
                                            <div class = "column">
                                                <a href="payment.php"><button class="rect">Checkout</button></a>
                                            </div>
                                        </div>     
                                </div>
                    </div>
                </div>';
        $str.='';
        return $str;
    }
}
?>
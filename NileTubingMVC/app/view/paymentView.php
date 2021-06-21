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
include 'CSS/paymentCSS.php';

class payments extends View
{
    public function output()
    {
        $str = "";
        $str .= '<div class="body">
                    <div class="container-fluid">
                        <div class="row"> 
                            <h1 class="info">Fill Your Info To Checkout</h1>
                            <form method="POST">
                                <div class= "column">
                                    <p class="Fname">First Name</p>
                                    <p class="Lname">Last Name</p>
                                    <p class="Mobileno">Mobile number</p>
                                </div>
                        </div>
                        <div class ="row">
                            <div class = "column">    
                                <input type="text" name="FName" class="input Fnamerect" required="">
                                <input type="text" name="LName" class="input Lnamerect" required=""> 
                                <input type="number" name="Mobile" class="input Mobilerect" required="">
                            </div>
                        </div>
                        <div class ="row">
                            <div class = "column">
                                <p class="Email">Email address</p>
                                <p class="Gender">Gender</p>
                            </div>
                        </div>
                        <div class ="row">
                            <div class = "column">
                                <input type="text" name="Mail" class="Emailrect" required="">
                                <select name="Gender" class="input Genderrect">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class ="row">
                            <div class = "column">
                                <div class="payment-methods flex">
                                    <p>Payment Methods:</p>
                                    <input type="radio" name="payment" value="Cash"  checked="checked"> <img src="'.__ROOT__.'/view/Images/cash.jpg" alt=""> Cash Payment
                                    <input type="radio" name="payment" value="Fawry"> <img src="'.__ROOT__.'/view/Images/fawry.jpg" alt=""> <img src="'.__ROOT__.'/view/Images/vf cash.jpeg" alt=""> <img src="'.__ROOT__.'/view/Images/etisalat.jpg" alt=""> Fawry/Vodafone Cash/Etisalat
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';

                $str .='<div class="body">
                            <div class="container-fluid">                                
                                <div class="row">
                                    <div class="column">
                                        <input type="submit" class="rect4" value="Print your ticket">
                                    </div>
                                    </form>
                                    <a href="Rides.php"><button class="cancelBtn">Cancel Payment</button></a>
                                </div>
                            </div>
                    </div>
                    ';
        $str.='';
        $str .='';
        return $str;
                
    }
}

?>
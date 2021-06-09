<?php
require_once(__ROOT__ . "model/checkoutModel.php");
require_once(__ROOT__ . "controller/checkoutController.php");
require_once(__ROOT__ . "view/checkoutView.php");

$img = __ROOT__.'/view/Images/NTLogo.png';

?>
<style>
    .body
    {
        background: #e5e5e5;
        font-family: Hind;
        font-family: 'IBM Plex Mono', monospace;
        margin: 0;
        padding: 0;
    }
    .column 
    {
        float: left;
        width: 50%;
        padding: 10px;
    }
    .row:after 
    {
        content: "";
        display: table;
        clear: both;
    }
    .logo
    {
        position: absolute;
        width: 70px;
        height: 70px;
        left: 5%;
        top: 0%;
        transition: 0.5s all;
    }
    .logo img{
        width: 100%;
        height: 100%;
    }
    .info{
        width: 100%;
        height: 104px;
        font-family: 'IBM Plex Mono', monospace;
        font-style: normal;
        font-weight: bold;
        font-size: 22px;
        text-align: center;
        letter-spacing: -0.017em;
        color: #000000;
    }
   /* .container-fluid {
        width: 70%;
        height: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 10px;
        margin-top: 50px;
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
    }*/
    .body2{
        position: absolute;
        width: 50px;
        height: 0px;
        left: 69px;
        top: 53px;
    }
    .input {
        position: absolute;
        width: 150px;
        height: 50px;
        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    .input2{
        position: absolute;
        width: 100px;
        height: 50px;
        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    .Trip{
        position: absolute;
        width: 15%;
        height: 12%;
        left: 31.5%;
        top: 42%;

        font-family:'Hind', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 38px;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: -0.017em;

        color: #1F3351;
    }
    .Triprect{
        left: 28%;
        top: 50%;
    }
    .date{
        position: absolute;
        width: 15%;
        height: 12%;
        left: 44.5%;
        top: 42%;
        font-family: 'Hind', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 38px;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: -0.017em;
        color: #1F3351;
    }
    .daterect
    {   
        left: 41%;
        top: 50%;
    }
    .price{
        position: absolute;
        width: 15%;
        height: 12%;
        left: 56.5%;
        top: 42%;

        font-family: 'Hind', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 38px;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: -0.017em;
        color: #1F3351;
    }
    .pricerect{
        left: 55%;
        top: 50%;    
    }
    .quantity{
        position: absolute;
        width: 15%;
        height: 12%;
        left: 64%;
        top: 42%;

        font-family: 'Hind', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 38px;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: -0.017em;

        color: #1F3351;
    }
    .quantityrect{
        left: 64%;
        top:  50%;
    }
    .total{
        position: absolute;
        width: 15%;
        height: 12%;
        left: 76%;
        top: 42%;

        font-family:'Hind', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 38px;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: -0.017em;

        color: #1F3351;
    }
    .totalrect{
        left: 73%;
        top: 50%;
    }
    .rect{
        position: absolute;
        width: 120px;
        height: 40px;
        left: 76%;
        top: 70%;
        background: #1A3E92;
        border-radius: 20px;
        border: none;
        color: white;
        cursor: pointer;
        transition: .1s all;
    }

    .rect:hover {
        background-color: #133074;
    }
</style>
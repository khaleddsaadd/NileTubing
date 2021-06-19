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
    .body2{
        position: absolute;
        width: 50px;
        height: 0px;
        left: 69px;
        top: 42%;
    }
    .input {
        position: absolute;
        width: 150px;
        height: 50px;
        padding-left: 1%;
        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    .input2{
        position: absolute;
        width: 100px;
        height: 50px;
        padding-top:1%;
        padding-left: 1%;
        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    .input3 {
        position: absolute;
        width: 150px;
        height: 50px;
        padding-top:1%;
        padding-left: 3%;
        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    .input4{
        position: absolute;
        width: 100px;
        height: 50px;
        padding-top:1%;
        padding-left: 2%;
        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    #i
    {
        width:50px;
        height:50px;
        padding-top:5%;
        padding-left:5%
    }
    .img
    {
        width:250px;
        height:500%;
        padding-top:7%;
        padding-left:5%;
        border-radius:50%;
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
        left: 64.5%;
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
    @media (orientation: landscape) and (max-width: 500px) 
    {
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
        #i
        {
            width:50px;
            height:50px;
            padding-top:5%;
            padding-left:5%
        }
        .img
        {
            width:250px;
            height:500%;
            padding-top:5%;
            padding-left:5%
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
            left: 31.5%;
            top: 58%;
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
            left: 28%;
            top: 66%;
        }
        .price{
            position: absolute;
            width: 15%;
            height: 12%;
            left: 31.5%;
            top: 75%;

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
            left: 28%;
            top: 84%;    
        }
        .quantity{
            position: absolute;
            width: 15%;
            height: 12%;
            left: 31.5%;
            top: 92%;

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
            left: 28%;
            top:  102%;
        }
        .total{
            position: absolute;
            width: 15%;
            height: 12%;
            left: 31.5%;
            top: 112%;

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
            left: 28%;
            top: 122%;
        }
        .rect
        {
            position: absolute;
            width: 120px;
            height: 40px;
            left: 76%;
            top: 134%;
            background: #1A3E92;
            border-radius: 20px;
            border: none;
            color: white;
            cursor: pointer;
            transition: .1s all;
        }

        .rect:hover 
        {
            background-color: #133074;
        }
    }
    @media (orientation: portrait), (max-width: 1020px) 
    {
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
        .body2{
            position: absolute;
            width: 50px;
            height: 0px;
            left: 25%;
            top: 25%;
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
        #i
        {
            width:50px;
            height:50px;
            padding-top:15%;
            padding-left:5%
        }
        .img
        {
            width:250px;
            height:500%;
            padding-top:2%;
            padding-left:18%
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
            left: 31.5%;
            top: 58%;
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
            left: 28%;
            top: 66%;
        }
        .price{
            position: absolute;
            width: 15%;
            height: 12%;
            left: 31.5%;
            top: 75%;

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
            left: 28%;
            top: 84%;    
        }
        .quantity{
            position: absolute;
            width: 15%;
            height: 12%;
            left: 30%;
            top: 92%;

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
            left: 28%;
            top:  102%;
        }
        .total{
            position: absolute;
            width: 15%;
            height: 12%;
            left: 31.5%;
            top: 112%;

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
            left: 28%;
            top: 122%;
        }
        .rect
        {
            position: absolute;
            width: 120px;
            height: 40px;
            left: 66%;
            top: 134%;
            background: #1A3E92;
            border-radius: 20px;
            border: none;
            color: white;
            cursor: pointer;
            transition: .1s all;
        }

        .rect:hover 
        {
            background-color: #133074;
        }
    }
</style>
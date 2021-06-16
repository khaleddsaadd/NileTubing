<?php
require_once(__ROOT__ . "model/checkoutModel.php");
require_once(__ROOT__ . "controller/checkoutController.php");
require_once(__ROOT__ . "view/checkoutView.php");

$img = __ROOT__.'/view/Images/NTLogo.png';

?>
<style>
    .body{
        background: #e5e5e5;
        font-family: 'IBM Plex Mono', monospace;
        margin: 0;
        padding: 0;
    }
    .body2{
        position: absolute;
        width: 50px;
        height: 0px;
        left: 69px;
        top: 53px;
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
    .logo{
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
        font-family: IBM Plex Mono;
        font-style: normal;
        font-weight: bold;
        font-size: 22px;
        text-align: center;
        letter-spacing: -0.017em;
        color: #000000;
    }
    .Fname{
        position: absolute;
        width: 250px;
        height: 45px;
        left: 23%;
        top: 20%;

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
    .Fnamerect{
        left: 20%;
        top: 30%;
    }
    .Lname{
        position: absolute;
        width: 250px;
        height: 45px;
        left: 43%;
        top: 20%;

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
    .Lnamerect{
        left: 40%;
        top: 30%;
    }

    .input {
        position: absolute;
        width: 200px;
        height: 50px;
        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }

    .Mobileno{
        position: absolute;
        width: 250px;
        height: 45px;
        left: 62%;
        top: 20%;

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
    .Mobileno-edited{
        position: absolute;
        width: 250px;
        height: 45px;
        left: 21.5%;
        top: 105%;
        
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
    .Mobilerect-edited{
        position: absolute;
        width: 200px;
        height: 50px;
        left: 20%;
        top: 110%;

        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    .Mobilerect
    {   
        left: 60%;
        top: 30%;
    }
    .Email{
        position: absolute;
        width: 229px;
        height: 45px;
        left: 22%;
        top: 40%;

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
    .Email-edited{
        position: absolute;
        width: 229px;
        height: 45px;
        left: 42%;
        top: 105%;

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
    .Emailrect-edited{
        position: absolute;
        width: 500px;
        height: 50px;
        left: 40%;
        top: 110%;

        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    .Emailrect{
        position: absolute;
        width: 500px;
        height: 50px;
        left: 20%;
        top: 50%;

        background: #FFFFFF;
        border: 1px solid #1A3E92;
        box-sizing: border-box;
        border-radius: 20px;
    }
    .Gender
    {
        position: absolute;
        width: 250px;
        height: 45px;
        left: 64%;
        top: 40%;

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
    .Genderrect{
        left: 60%;
        top:  50%;
    }

    .content-box 
    {
        width: 70%;
        height: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 10px;
        margin-top: 50px;
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
    }

    .content-box.edited {
        height: 300px !important;
        margin-top: 100px;
        margin-bottom: 100px;
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
    }

    #rect2{
        position: absolute;
        width: 1228px;
        height: 97px;
        left: 46px;
        top: 795px;
        background-color: white;
    }
    .flex {
        display: flex;
    }

    .payment-methods {
        
        align-items: center;
        width: 90%;
        margin: 0 auto;
        margin-top: 250px;

    }

    .payment-methods.edited {
        margin-top: 0;
        justify-content: center;
    }

    .payment-methods img {
        width: 50px;
        height: 50px;
        border-radius:50%;
        object-fit: contain;
        margin-right: 15px;
    }
    .rect4{
        position: absolute;
        width: 170px;
        height: 40px;
        left: 75%;
        top: 68%;
        background: #1A3E92;
        border-radius: 20px;
        border: none;
        color: white;
        cursor: pointer;
        transition: .1s all;
        font-weight:bolder;

    }
    .cancelBtn
    {
        position: absolute;
        width: 170px;
        height: 40px;
        left: 63%;
        top: 68%;
        background: white;
        border-radius: 20px;
        border: none;
        color: black;
        cursor: pointer;
        transition: .1s all;
        font-weight:bolder;
    }

    .rect4:hover 
    {
        background-color: #133074;
    }
    #Title
    {
        padding-left:40%;
    }
    @media (orientation: portrait), (max-width: 170px)
    {
        .body
        {
            background: #e5e5e5;
            font-family: 'IBM Plex Mono', monospace;
            margin: 0;
            padding: 0;
        }
        .body2{
            position: absolute;
            width: 50px;
            height: 0px;
            left: 69px;
            top: 53px;
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
        .logo{
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
            font-family: IBM Plex Mono;
            font-style: normal;
            font-weight: bold;
            font-size: 22px;
            text-align: center;
            letter-spacing: -0.017em;
            color: #000000;
        }
        .Fname{
            position: absolute;
            width: 250px;
            height: 45px;
            left: 28%;
            top: 20%;

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
        .Fnamerect{
            left: 20%;
            top: 25%;
        }
        .Lname{
            position: absolute;
            width: 250px;
            height: 45px;
            left: 28%;
            top: 32%;

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
        .Lnamerect{
            left: 20%;
            top: 38%;
        }

        .input {
            position: absolute;
            width: 200px;
            height: 50px;
            background: #FFFFFF;
            border: 1px solid #1A3E92;
            box-sizing: border-box;
            border-radius: 20px;
        }
        .Mobileno{
            position: absolute;
            width: 250px;
            height: 45px;
            left: 25%;
            top: 45%;

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
        .Mobilerect
        {   
            left: 20%;
            top: 51%;
        }
        .Email{
            position: absolute;
            width: 229px;
            height: 45px;
            left: 28%;
            top: 59%;

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
        .Emailrect{
            position: absolute;
            width: 500px;
            height: 50px;
            left: 18%;
            top: 65%;

            background: #FFFFFF;
            border: 1px solid #1A3E92;
            box-sizing: border-box;
            border-radius: 20px;
        }
        .Gender
        {
            position: absolute;
            width: 250px;
            height: 45px;
            left: 28%;
            top: 74%;

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
        .Genderrect{
            left: 20%;
            top:  80%;
        }
        .content-box 
        {
            width: 70%;
            height: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 10px;
            margin-top: 50px;
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
        }

        .content-box.edited {
            height: 300px !important;
            margin-top: 100px;
            margin-bottom: 100px;
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
        }

        #rect2{
            position: absolute;
            width: 1228px;
            height: 97px;
            left: 46px;
            top: 795px;
            background-color: white;
        }
        .flex {
            display: flex;
        }

        .payment-methods {
            
            align-items: center;
            width: 90%;
            margin: 0 auto;
            margin-top: 450px;

        }

        .payment-methods.edited {
            margin-top: 450px;
            justify-content: center;
        }

        .payment-methods img {
            width: 50px;
            height: 50px;
            border-radius:50%;
            object-fit: contain;
            margin-right: 15px;
        }
        .rect4{
            position: absolute;
            width: 170px;
            height: 40px;
            left: 70%;
            top: 105%;
            background: #1A3E92;
            border-radius: 20px;
            border: none;
            color: white;
            cursor: pointer;
            transition: .1s all;
            font-weight:bolder;

        }
        .cancelBtn
        {
            position: absolute;
            width: 170px;
            height: 40px;
            left: 40%;
            top: 105%;
            background: white;
            border-radius: 20px;
            border: none;
            color: black;
            cursor: pointer;
            transition: .1s all;
            font-weight:bolder;
        }
        .rect4:hover 
        {
            background-color: #133074;
        }
        #Title
        {
            padding-left:40%;
        }
    }
</style>
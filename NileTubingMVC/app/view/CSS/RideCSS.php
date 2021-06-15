<?php 
require_once(__ROOT__ . "model/RideModel.php");
require_once(__ROOT__ . "controller/RideController.php");
require_once(__ROOT__ . "view/RideView.php");


?>
<style>
.body{
	background-color: white;
	font-family: Hind;
}
#rec1{
	position: absolute;
width: 35%;
height: 70%;
left: 8%;
top: 20%;

background: #FFFFFF;
box-shadow: 2px 2px 40px rgba(0, 0, 0, 0.15);
border-radius: 20px;}


#price{
	position: absolute;
/*width: 100%;
height: 10%;*/
left: 15%;
top: 5%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 36px;
line-height: 58px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #1F3351;}

#per{
	position: relative;
/*width: 137px;
height: 121px;*/
left: 16%;
top: 20%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 22px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #1F3351;

}

#date{
	position: absolute;
/*width: 20%;
height: 20%;*/
left: 15%;
top: 30%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 38px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #1F3351;
}

.date{position: absolute;
width: 60%;
height: 10%;
left: 14%;
top: 45%;

background: #EEEFF3;
border-radius: 30px;}

.form-control {
	position: absolute;
	top: 5%;
	left: 13%;

	background-color: #ebecee;
	border-radius: 400px;
	width: fit-content;
	border: none;

	height: 40px;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #3e485c;
	font-size: 18px;
}

.persons{
	position: absolute;
/*width: 115px;
height: 46px;*/
left: 15%;
top: 55%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 38px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #1F3351;

}


#quantity
{
position: absolute;
width: 30%;
height: 10%;
left: 14%;
top: 70%;
text-align: center;
background: #EEEFF3;
border-radius: 30px;
font-size: 18px;
}

#cap{
	position: absolute;
width: 30%;
height: 10%;
left: 50%;
top: 67%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 38px;
display: flex;
align-items: center;
text-align: center;
letter-spacing: -0.017em;

color: #F1D158;

}

.sub{
	position: absolute;
width: 135px;
height: 36px;
left: 60%;
top: 85%;
border-radius: 30px;
}
.BookNow
{
    text-decoration: none;
    font-family: 'Hind';
    font-weight: bolder;
    font-size: large;
    padding-left: 30%;
    color: #1F3351;

}

.submit-btn {
	display: inline-block;
	color: #fff;
    background-color: #1A3E92; 
	font-weight: 700;
	padding: 14px 30px;
	border-radius: 400px;
	border: none;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}
.submit-btn:hover, .submit-btn:focus {
	opacity: 0.3;
}

h1{
	position: absolute;
width: 700px;
height: 165px;
left: 55%;
top: 13%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 75px;
line-height: 128px;
display: flex;
align-items: right;
letter-spacing: -0.017em;

color: #1F3351;
}
.review{
margin-top:40%;
margin-left:8%;
}
#des{
	position: absolute;
width: 506px;
height: 337px;
left: 55%;
top: 25%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 38px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #000000;
}

#rideinfo{
	width: 90%;
	height: 80%;
	margin-top: 2%;
	margin-left: 3%;
}
#avg{
	position: absolute;
width: 300px;
height: 47px;
left: 55%;
top:60%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 36px;
line-height: 58px;
display: flex;
align-items: center;
text-align: center;
letter-spacing: -0.017em;

color: #F1D158;
}

#rec2
{
	position: absolute;
width: 85%;
left: 10%;
top: 120%;
/*margin-left:20px;*/

background: #FFFFFF;
box-shadow: 2px 2px 40px rgba(0, 0, 0, 0.15);
}

#rev{

	position: absolute;
width: 419px;
height: 102px;
left: 10%;
top: 5%;

font-family: Hind;
font-style: normal;
font-weight: normal;
font-size: 64px;
line-height: 102px;
display: flex;
align-items: center;
letter-spacing: -0.017em;

color: #EEBF0F;


}

.wrev{
	position: absolute;
width: 80%;
height: 225px;
left: 10%;
top: 30%;

background: #EEEFF3;
}

#name{
	position: absolute;
width: 20%;
height: 15%;
left: 3%;
top: 10%;

background: #FFFFFF;
border: 0.2px solid #1F3351;
box-sizing: border-box;
}

#rev-box{
	position: absolute;
width: 90%;
height: 15%;
left: 3%;
top: 35%;

background: #FFFFFF;
border: 0.2px solid #1F3351;
box-sizing: border-box;
}

#rev-sub{

	position: absolute;

left: 77%;
top: 50%;
}
</style>
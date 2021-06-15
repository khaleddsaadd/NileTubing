<?php 
require_once(__ROOT__ . "model/adminRidesModel.php");
require_once(__ROOT__ . "controller/adminRidesController.php");
require_once(__ROOT__ . "view/adminRidesView.php");

$img = __ROOT__.'/view/Images/tubes.png';

?>
<style>
.indexBG
{
     background-image: url("<?php echo $img?>");
      height: 100%; 
        width: 100%;
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
}
.indexText
{
    font-family: Hind;
    font-style: normal;
    font-weight: normal;
    font-size: 80px;
    line-height: 154px;
    display: flex;
    align-items: center;
    letter-spacing: -0.017em;
    color: #1F3351;
    padding-left: 14%;
    padding-top: 14%;
}
#img
{
    position: relative;
}
#TripTitle
{
    width: 20%;
    padding-top: 0.5%;
    text-align: center;
    font-family: 'Hind';font-size: 32px;
    background-color: #EEEFF3;
    border-radius: 80px;
    color: #1F3351;

}
#indexBG 
{
      position: absolute;
        width: 100%;
        height: 100%;
        background-image: url("images/tubes.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
}
#BGIMG
{
   
}
.Timg
{
    padding-left: 5%;
    width:80%;
    height: 400px;

}
#body2
{
    padding-top: 5%;
}
#body3
{
    padding-top: 5%;
}
#body4
{
    padding-top: 5%;
}
.desc
{
    padding-left:10%;
    width:100%;
    height: 400px;
    font-family: 'Hind';
    padding-top: 10%;
    padding-right: 10%;
    color: #1F3351;
    background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
   
    
}
#dd
{
    padding-left: 3%;
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
#description
{   
    position:absolute;
   width:80%;
    height:60%;
    left:10%;
}
.dtext
{
    font-family: 'Hind';
    font-size: 20px;


}
#Price
{ 
    position:absolute;
    color:red;
    font-weight: bolder;
    top:75%;
    left: 40%;
    width:15%; 
    text-align:center;   

}
#submit
{
    position:absolute;
    top:85%;
    right: 10%;
    width:25%;
    font-size:20px;
}
a
{
    text-decoration: none;
}
#body5
{
    width: 70%;
    height: 100%;
    background-color: red;
    left: 15%;
    right: 20%;
    position: absolute;
    background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
   
}

.OfferEventText
{
    position: absolute;
    font-family: 'Hind';
    font-size: 30px;
    left:5%;
    top:4%;
     color: #1F3351;

}
.remove
{
position: absolute;
font-size:430%;
margin-top:-1.4%;
right:20%;

}

.edit
{
    position: absolute;
    font-size:400%;
    margin-top:17%;
    left:40%;
    
    color:white;
}
</style>

<?php 
require_once(__ROOT__ . "model/RidesModel.php");
require_once(__ROOT__ . "controller/RidesController.php");
require_once(__ROOT__ . "view/RidesView.php");

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
.dtext
{
    font-family: 'Hind';
    font-size: 20px;

}
.Price
{
    color:#CCA203;
    font-weight: bolder;
    padding-left:32%;
    font-size: 20px;
    font-family:'Hind';
}
a
{
    text-decoration: none;
}
#body5
{
    width: 70%;
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



#body5
    {
        position:absolute;
        top:380%;
    }
    .all
    {
        padding-left:22%;
        padding-top:12%;
    }
    .Name
    {
        color:#1F3351;
        font-size:20px;
        font-weight:bolder;
        font-family='Hind';


    }
    .p 
    {
        color:#1F3351;
        font-size:17px;
        font-weight:bolder;
        font-family='Hind';
    }
    .sd
    {
        color:#1F3351;
        font-size:17px;
        font-weight:bolder;
        font-family='Hind';
    }
    .t 
    {
        color:#1F3351;
        font-size:17px;
        font-weight:bolder;
        font-family='Hind';
    }
    .imgdiv
    {
    }
    .oneOffer 
    {
        background-color:blue;
        width:70%;
        background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
        
    }
    .oimg
    {
        width:100%;
        height:300px;
    }
    .bookoffer
    {
        
    }
</style>

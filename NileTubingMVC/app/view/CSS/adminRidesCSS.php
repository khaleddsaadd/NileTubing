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
    width: 22%;
    height:10%;
    padding-top: 0.5%;
    text-align: center;
    font-family: 'Hind';font-size: 32px;
    background-color: #EEEFF3;
    border-radius: 80px;
    color: #1F3351;
    padding-top:0.5%;
    
   

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
    width:120%;
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

#title
{   
    position:absolute;
    width:20%;
    padding-top:0.2%;
    left:3.6%;
    margin-top:0.2%;
    border-radius: 20px;   

}
#description
{   
    position:absolute;
    width:100%;
    height:60%;
    left:9%;
    Top:4%;    
}

.dtext
{
    font-family: 'Hind';
    font-size: 20px;

}

#Price
{ 
    position:absolute;
    color:#CCA203;
    font-weight: bolder;
    font-size: 20px;
    top:77.5%;
    left: 40%;
    width:22%; 
    font-family:'Hind';
    text-align:center;   

}

#time
{
    position:absolute;
    color:black;
    font-weight: bolder;
    font-size: 13px;
    top: 68%;
    left: 9%;
    width:25%; 
    height: 7%; 
    font-family:'Hind';
    text-align:center; 
}

#date
{
    position:absolute;
    color:black;
    font-weight: bolder;
    font-size: 11px;
    top: 68%;
    left: 35%;
    width:30%; 
    height: 7%; 
    font-family:'Hind';
    text-align:center; 
}

#capacity{
    position:absolute;
    color:black;
    font-weight: bolder;
    font-size: 13px;
    top: 68%;
    left: 66%;
    width:22%;
    height: 7%; 
    font-family:'Hind';
    text-align:center; 
    
}
#submit
{
    position:absolute;
    top:77%;
    left: 90%;
    width:19%;
    font-size:16px;
}

#add
{

    position:absolute;
    top:67.5%;
    left:90%;
    width:19%;
    font-size:16px;
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
.edit
{
position: absolute;
font-size:300%;
margin-top:-2.5%;
right:20%;

}

#image
{
    position: absolute;
    width:9%;
    height:10%;
    margin-top:-1.4%;
    left:67.2%;
    

}

.oldedit
{
    position: absolute;
    font-size:400%;
    margin-top:17%;
    left:40%;
    
    color:white;
}



.form-control
{
    height:15%;

}
.f
{
    position:absolute;
    margin-top:7%;
    left:37%;
  
    
}

.form-group
{
    font-size:20px;
    color: #1F3351;
    font-family: 'Hind';
}

#offers
{
    position:absolute;
    width:50%;
   
    font-size:18px;
    text-align:center;
    left:20%;
}
</style>

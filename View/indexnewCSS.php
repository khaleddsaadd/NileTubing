<?php 
require_once("HomeClass.php");
$HeaderImg = new HomeImages(1);
?>
<style>
    body, html 
    {
      height: 100%;
    }

    .bg { 
      /* The image used */
      background-image: url("Images/<?php echo $HeaderImg->get_image()?>");
      /* Full height */
      height: 100%; 
        width: 100%;
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .NTLogo_Header
    {
        width:13%;

    }

    #body1  
    {
        background-color: red;
         background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)

    }
    .introText
    {
        font-family: Bungee Outline;
        font-style: normal;
        font-weight: normal;
        font-size: 96px;
        color: #FFFFFF;
        padding-left:20%;
        padding-top: 10%;

    }
    .desc
    {
        padding-left:10%;
        width:100%;
        height: 400px;
        font-family: 'Hind';
        padding-top: 25%;
        padding-right: 10%;
            color: #1F3351;

         font-family: 'Hind';
        font-size: 20px;


    }
    #vid
    {
        padding-bottom: 10%;
    }
    #row1
    {
        width: 90%;
        padding-left: 10%;
        padding-top: 6%;

    }
    .body1Vid
    {
        padding-left: 10%;   
    }
    .Timg
    {
        padding-left: 5%;
        width:80%;
        height: 400px;

    }
    #product-grid
    {
        margin-bottom:30px;
        background-color: red;
        width: 80%;
    }
    #body2
    {
        position: absolute;
        width: 90%;
        height:90%;
        left: 10%;
        top: 200%;
    }
    #body2_1
    {
         position: absolute;
        width: 25%;
        height: 70%;
        left:1.5%;

    background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)

    }
    #body2_2
    {
        position: absolute;
        width: 25%;
        height: 70%;
        left:32%;
       background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
    }
    #body2_3
    {
         position: absolute;
        width: 25%;
        height: 70%;
        left:62%;
        background: #FFFFFF;
    box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.2)
    }
    .body2_titles
    {margin-top: 30%;
        font-family: 'Hind';
        font-size: 18px;
        font-weight: bold;
    }
    .body2_content
    { margin-left: 10% ;
        margin-right:10%;
        font-family: 'Hind';
        font-size: 15px;
        color: #CCA203;
        height: 400px;
    }
    .VMP
    {
        width:100%;
        height:30%
    }
    #Footer 
{
    position: absolute;
    width:100%;
    height:40%; 
    top:320%;
    left: 0%;
    background-color : #1F3351;
}
#NTLogo
{
    position: absolute;
    width:10%;
    height:50%;
    left:4%;
}
.footer_Div_Left
{
    margin-top: 10%;
    margin-left: 5%;
    width: 20%;
    top:73%;
    left:5%;
}
.footer_Text_Left
{ position: absolute;

    color: white;
    font-family: 'Hind';
}
#locImg
{
    position:absolute;
    width:20%;
    height:80%;
    left:60%;
    top:1%;
}
.footer_Div_Right
{
    position:absolute;
    left:73%;
    top:27%;
}
.footer_Text_Right
{
    color:white;
    font-family: 'Hind';
    
}
#Footer2
{
    position: absolute;

    background-color: #F1D158;
    width:100%;
    height: 7%; 
    top: 360%;
}
.socialLogo
{ 
    width:100%;
    height:100%;
   
}
ul.social 
{ 
    margin: 0;
    padding: 0;
    width: 100%;
    text-align: center;
}
ul.social > li
{
display: inline-block;
}

ul.social > li > a 
{ 
display: inline-block;
font-size: 18px;
line-height: 100%;
width: 30px;
height: 30px;
border-radius: 50%;
background-color: #1F3351;
color: #fff;
margin: 0 10px 10px 0;
}

ul.social > li > a:hover 
{
text-decoration: none;
background-color: #ee7c22;
}
.socialmedia
{
    position: relative;

   
    top:15%;
    /*left:1%;*/
}
#i{
    position: relative;
    top: 18%;
    left: 0%;
}

    .product-item {	float:left;	background: #ffffff;margin:15px 10px;	padding:5px;border:#CCC 1px solid;border-radius:4px;}
    .product-item div{text-align:center;	margin:10px;}
</style>

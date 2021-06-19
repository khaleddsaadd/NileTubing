<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>

<?php include 'NavBoot/index.html';?>

</head>
<?php 
require_once(__ROOT__ . "view/View.php");
include 'CSS/indexnewCSS.php';

class v extends View
{
   
    public function output()
    {
       $str="";
        $str.='<div class="bg"><div class="container-fluid">
          <div class="row">
            <div class="col-sm-3 col-md-12">
                 <h1 class="introText">Go with the flow <br> Nile River Run</h1>

            </div>
            <div class="col-sm-9 col-md-6">
            </div>
          </div>
        </div></div>';
        $str.='';
        
        return $str;
    }
    public function displayVideo()
    {
        $str="";
        $str.='<div class="container-fluid">';
        $str.='<div class="row" id="row1">';
        $str.='<div id="body1">
                <div class="col-sm-3 col-md-7">';
        $str.='<div class="body1Vid">';
        $str.='<video id="vid"width="80%" height="400" controls>';
        $str.='<source src="'.__ROOT__.'/view/Videos/oo.mp4" type="video/mp4">';
        $str.='<source src="'.__ROOT__.'/view/Videos/oo.ogg" type="video/ogg">';
        $str.='Your browser does not support the video tag.
                </video>
            </div>
            </div>
            <div class="col-sm-9 col-md-4">
                <div class="desc">
                    <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                 nisi ut aliquip ex ea commodo consequat. </label>
                </div>
            </div>
          </div>
            </div>
        </div>';


        return $str;
    }
    public function VMP()
    {
        $str='<div class="container">
        <div class="row-md" id="body2">
        <div class="body2">
            <div class="col-md-4" id="body2_1">
                <center><p class="body2_titles">Our mission</p>
                <br><br></center>
            
                <p class="body2_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                 nisi ut aliquip ex ea commodo consequat.  </p>
            </div>

            <div class="col-md-4" id="body2_2">
            <center><p class="body2_titles">Our Plan</p>
                <br><br></center>
                <p class="body2_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                 nisi ut aliquip ex ea commodo consequat.  </p>
            </div>

            <div class="col-md-4" id="body2_3">
            <center><p class="body2_titles">Our vision</p>
                 <br><br></center>
                 <p class="body2_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                 nisi ut aliquip ex ea commodo consequat. </p>
        </div>
    </div>
            </div>
    </div>';
        return $str;
    }
    public function Footer()
    {
        $str='   
    <div class="row-md" id="Footer">
            <div>
                 <img src="'.__ROOT__.'/view/Images/NTLogo.png" id="NTLogo">
            </div>

            <div class="footer_Div_Left">
                <p class="footer_Text_Left">Phone: +2001112705325 </p>
                <br><br>
                <p class="footer_Text_Left">Email: Niletubing@gmail.com</p>
                <br><br>
                <p class="footer_Text_Left">2021 © All rights reserved</p>

            </div> 
            <img src="'.__ROOT__.'/view/Images/Loc.png" id="locImg">
            <div class="footer_Div_Right">
                <label class="footer_Text_Right">Egypt <br> Cairo Drops: <br> Dokki <br> Maadi <br> Zamalek <br> Moneeb </label>
            </div>
</div>

        <div class="row-md" id="Footer2">
            <div class="socialmedia">
                <ul class="social">
                <li>
                    <a href="https://www.facebook.com/NileTubing" title="">
                    <span class="icon fa fa-facebook " id="i"></span>
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                    <span class="icon fa fa-instagram"  id="i"></span>
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                    <span class="icon fa fa-whatsapp"  id="i"></span>
                    </a>
                </li>
                </ul>
            </div>

        </div>';
        return $str;
    }
    
}
?>
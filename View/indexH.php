<?php require_once("RidesClass.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="indexnewCSS.php">
<?php include 'indexnewCSS.php';?>

<?php include 'userNavBar.html';?>

</head>
<body>
    <div class="bg">
        <label class="introText">GO WITH THE FLOW <br> NILE RIVER RUN</label>
    </div>
    
        <div class="container-fluid">
          <div class="row" id="row1">
            <div id="body1">

            <div class="col-sm-3 col-md-7">
                <div class="body1Vid">
                    <?php 
                        $HeaderVid = new HomeVideos(1);
                    ?>
                <video id="vid"width="80%" height="400" controls>
                  <source src="Videos/<?php echo $HeaderVid->get_video(); ?>.mp4" type="video/mp4">
                  <source src="Videos/<?php echo $HeaderVid->get_video(); ?>.ogg" type="video/ogg">
                  Your browser does not support the video tag.
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
        </div>
    
    <div class="container">
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
    </div>
    
       
    <div class="row-md" id="Footer">
            <div>
                 <img src="images/NTLogo.png" id="NTLogo">
            </div>

            <div class="footer_Div_Left">
                <p class="footer_Text_Left">Phone: +2001112705325 </p>
                <br><br>
                <p class="footer_Text_Left">Email: Niletubing@gmail.com</p>
                <br><br>
                <p class="footer_Text_Left">2021 © All rights reserved</p>

            </div> 
            <img src="images/Loc.png" id="locImg">
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

        </div>
    
    
    
   
    
</body>
</html>

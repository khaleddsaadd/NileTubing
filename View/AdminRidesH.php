
<?php require_once("RidesClass.php");?>
<!DOCTYPE html>
<html>     
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="adminR.css">
     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    </head>
    <body>
        <?php include 'userNavBar.html';?>
     
        <div class="container">
        <div class="row">
                <div class="row-md">
                        
                    <div class="indexBG">
                            
                        <div class="col-row"> 
                        <h1 class="indexText">Nile Tubing rides</h1>
                        </div>
                        <div class="col-row" id="img">
                        <img class="Tubes" src="images/TS.png">
                        </div> 


                    </div>
                </div>
        
                <div class="row-md">
                     <div class="body2">

                        <div class="col">    
                        <p id="TripTitle">Single Tubing <a href="#"><span class="glyphicon glyphicon-pencil"></span></a></p> <br><br><br>
                        <h1>-->Trip image from database<--</h1>
                        </div>

                        <div class="col" id="line"> </div> 

                    </div>

                </div>
                <div class="row-md">
                     <div class="body3">

                     <div class="col">  
                        <p id="TripTitle">Couple Tubing <a href="#"><span class="glyphicon glyphicon-pencil"></span></a> </p> <br><br><br>
                        <h1>-->Trip image from database<--</h1>
                        </div>
                   

                    <div class="col" id="line"> </div> 
                   
                </div>
                <div class="row-md">
                     <div class="body4">

                     <div class="col"> 
                        <p id="TripTitle">Group Tubing <a href="#"><span class="glyphicon glyphicon-pencil"></span></a></p> <br><br><br>
                        <h1>-->Trip image from database<--</h1>
                        </div>

                        <div class="col" id="line"> </div>


                    </div>
                
                <div class="row-md">
                    <div class="body5">
                        <br><br>
                        <div class="col">
                        <label class="OfferEventText">Special Offers <a href="#"><span class="glyphicon glyphicon-pencil"></span></a></label>
                        </div>

                        <div class="col" id="line2"> </div>

                        </div>

                    </div>
                </div>
                <div class="row-md">
                    <div class="body6">
                        <br><br>
                        <div class="col">
                        <label class="OfferEventText">Upcoming Events <a href="#"><span class="glyphicon glyphicon-pencil"></span></a></label>
                        <div>

                        <div class="col" id="line2"> </div>

                    </div>
                </div>

        </div>
</div>
    </body>
</html>       
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
<link rel="stylesheet" href="RidesNewCSS.css">
<?php include 'userNavBar.html';?>

</head>
<body>


    
<div id="indexBG">
</div>
    
    
    
    
    
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-6">
         <h1 class="indexText">Nile Tubing <br> rides</h1>

    </div>
    <div class="col-sm-9 col-md-6">
    </div>
  </div>
</div>
    
    
    
<div id="body2">    
    <div class="container-fluid">
      <?php 
        $single = new Rides("1");
        $single_id = $single->get_id();
        ?>
      <div class="row">
            <div id="dd">
            <p id="TripTitle"><?php echo $single->get_name();?></p><br><br>
          </div>
        <div class="col-sm-3 col-md-8">
            <a href="RideH.php?id=<?php echo $single_id?>">
                <img class="Timg"src="images/<?php echo $single->get_image();?>">
            </a>
        </div>
        <div class="col-sm-9 col-md-3">
            <div class="desc">
                <label class="dtext"><?php echo $single->get_description();?></label><br>
                <br>
                <label class="Price"><?php echo $single->get_price();?> EGP</label><br>
                <a class="BookNow" href="RideH.php?id=<?php echo $single_id?>">Book Now</a>
            </div>
        </div>
      </div>
    </div>
</div>    
    
    
<div id="body3">    
    <div class="container-fluid">
      <?php 
        $couple = new Rides("2");
        $couple_id = $couple->get_id();
       ?>
      <div class="row">
            <div id="dd">
                <p id="TripTitle"><?php echo $couple->get_name();?></p><br><br>
           </div>
        <div class="col-sm-3 col-md-8">
            <a href="RideH.php?id=<?php echo $couple_id?>">
                <img class="Timg"src="images/<?php echo $couple->get_image();?>">
            </a>
        </div>
        <div class="col-sm-9 col-md-3">
            <div class="desc">
                <label class="dtext"><?php echo $couple->get_description();?></label><br>
                <br>
                <label class="Price"><?php echo $couple->get_price();?> EGP</label><br>
                <a class="BookNow" href="RideH.php?id=<?php echo $couple_id?>">Book Now</a>
            </div>
        </div>
      </div>
    </div>
</div> 
    
<div id="body4">    
    <div class="container-fluid">
      <?php 
        $group = new Rides("3");
        $group_id = $group->get_id();
       ?>
      <div class="row">
        <div id="dd">
            <p id="TripTitle"><?php echo $group->get_name();?></p><br><br>
        </div>
        <div class="col-sm-3 col-md-8">
            <a href="RideH.php?id=<?php echo $group_id?>">
                <img class="Timg"src="images/<?php echo $group->get_image();?>">
            </a>
        </div>
        <div class="col-sm-9 col-md-3">
            <div class="desc">
                <label class="dtext"><?php echo $group->get_description();?></label><br>
                <br>
                <label class="Price"><?php echo $group->get_price();?> EGP</label><br>
                <a class="BookNow" href="RideH.php?id=<?php echo $group_id?>">Book Now</a>
            </div>
        </div>
      </div>
    </div>
</div>
<br><br><br>
<div id="body5">
    <div class="container-fluid">
        <div class="row">
            <label class="OfferEventText">Special Offers </label>
        </div>
    </div>
</div>


    
        
</body>
</html>

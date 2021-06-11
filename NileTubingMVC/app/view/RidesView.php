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
include 'CSS/RidesNewCSS.php';



class rView extends View
{
    public function output()
    {
        $str="";
        $str.='<div class="indexBG"><div class="container-fluid">
          <div class="row">
            <div class="col-sm-3 col-md-6">
                 <h1 class="indexText">Nile Tubing <br> Rides</h1>

            </div>
            <div class="col-sm-9 col-md-6">
            </div>
          </div>
        </div></div>';
        $str.='';
        
        return $str;
    }
    public function single()
    {
        $str='<div id="body2">    
        <div class="container-fluid">

          <div class="row">
                <div id="dd">
                <p id="TripTitle">'.$this->model->get_name().'</p><br><br>
              </div>
            <div class="col-sm-3 col-md-8">
                <a href="Ride.php?id='.$this->model->get_id().'">
                    <img class="Timg"src="'.__ROOT__.'/view/Images/'.$this->model->get_image().'">
                </a>
            </div>
            <div class="col-sm-9 col-md-3">
                <div class="desc">
                    <label class="dtext">'.$this->model->get_description().'</label><br>
                    <br>
                    <label class="Price">'.$this->model->get_price().' EGP</label><br>
                    <a class="BookNow" href="Ride.php?id='.$this->model->get_id().'">
                    <button type="button" class="btn btn-primary">Book now</button></a>

                        </div>
                    </div>
                  </div>
                </div>
            </div>    
        ';
        return $str;
    }
    public function couple()
    {
        $str='<div id="body3">    
        <div class="container-fluid">

          <div class="row">
                <div id="dd">
                <p id="TripTitle">'.$this->model->get_name().'</p><br><br>
              </div>
            <div class="col-sm-3 col-md-8">
                <a href="Ride.php?id='.$this->model->get_id().'">
                    <img class="Timg"src="'.__ROOT__.'/view/Images/'.$this->model->get_image().'">
                </a>
            </div>
            <div class="col-sm-9 col-md-3">
                <div class="desc">
                    <label class="dtext">'.$this->model->get_description().'</label><br>
                    <br>
                    <label class="Price">'.$this->model->get_price().' EGP</label><br>
                    <a class="BookNow" href="Ride.php?id='.$this->model->get_id().'">
                    <button type="button" class="btn btn-primary">Book now</button></a>

                        </div>
                    </div>
                  </div>
                </div>
            </div>    
        ';
        return $str;
    }
    
    public function group()
    {
        $str='<div id="body4">    
        <div class="container-fluid">

          <div class="row">
                <div id="dd">
                <p id="TripTitle">'.$this->model->get_name().'</p><br><br>
              </div>
            <div class="col-sm-3 col-md-8">
                <a href="Ride.php?id='.$this->model->get_id().'">
                    <img class="Timg"src="'.__ROOT__.'/view/Images/'.$this->model->get_image().'">
                </a>
            </div>
            <div class="col-sm-9 col-md-3">
                <div class="desc">
                    <label class="dtext">'.$this->model->get_description().'</label><br>
                    <br>
                    <label class="Price">'.$this->model->get_price().' EGP</label><br>
                    <a class="BookNow" href="Ride.php?id='.$this->model->get_id().'">
                    <button type="button" class="btn btn-primary">Book now</button></a>

                        </div>
                    </div>
                  </div>
                </div>
            </div>    
        ';
        return $str;
    }
    public function offers()
    {
        $str='<br><br><br><br><br><br>
            <div id="body5">
                <div class="container-fluid">
                    <div class="row">
                        <label id="o" class="OfferEventText">Special Offers </label>
                    </div>
                </div>
            </div>';
        return $str;
    }
}
?>
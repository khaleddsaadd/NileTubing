<head>
    <meta charset="utf-8">
    <title> Admin Rides </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>
        <?php include 'AdminNav/index.html';?>
</head>

<?php 
require_once(__ROOT__ . "view/View.php");
include 'CSS/adminRidesCSS.php';



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

                 <form name="single" method="POST" action="">

                <div id="dd">

                <p id="TripTitle">
                <input type=text  id="title" name="Stitle" value="'.$this->model->get_name().'"

                </p><br><br>
              </div>
            <div class="col-sm-3 col-md-8">
            <input id="image"  type="file" name="Simage" placeholder="" >
                    <img class="Timg"src="'.__ROOT__.'/view/Images/'.$this->model->get_image().'"> <a class="edit" href="#" ><span  class="glyphicon glyphicon-edit"></span>
                    
                    </a>
                

            </div>
            <div class="col-sm-9 col-md-3">
                <div class="desc">
                    

                    <div class="dtext">
                    <textarea id="description" name="Sdescription" > '.$this->model->get_description().'</textarea>
                    </div>

                    <br>
                    <br>

                    <input type=text id="price" name="Sprice" value="'.$this->model->get_price().' EGP"   > 
                    
                    <br>

                    <input type="submit"  id="submit" name="Ssubmit" class="btn btn-primary" value="Save">

                    </div>

                        <form name="single" method="POST" action="">

                        <div id="dd">
    
                        <input type=time  id="time"  name="Stime"  value="" > 

                        <br>

                        <input type=date id="date" name="Sdate" value="" > 
                        <br>
    
                        <input type=text id="capacity" name="Scapacity" value="" placeholder="Capacity" > 
                        <br>
    
                        <input type="submit"  id="add" name="Sadd" class="btn btn-primary" value="Add">
                        </form>

                    </div>
                    </form>

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

          <form name="couple"  method="POST" action="">

                <div id="dd">

                <p id="TripTitle">
                <input type=text  id="title" name="Ctitle" value="'.$this->model->get_name().'"

                </p><br><br>

              </div>
            <div class="col-sm-3 col-md-8">
            <input id="image"  type="file" name="Cimage" placeholder="" >
                    <img class="Timg"src="'.__ROOT__.'/view/Images/'.$this->model->get_image().'"><a class="edit" href="#" ><span  class="glyphicon glyphicon-edit"></span>
                    </a>


                
            </div>
            <div class="col-sm-9 col-md-3">
                <div class="desc">
                
                <div class="dtext">
                    <textarea id="description" name="Cdescription" > '.$this->model->get_description().'</textarea>
                </div>

                    <br>
                    <br>

                    <input type=text id="price" name="Cprice" value="'.$this->model->get_price().'"  EGP > 
                    
                    <br>

                    <input type="submit"  id="submit" name="Csubmit" class="btn btn-primary" value="Save">

                    </div>

                    <form name="couple" method="POST" action="">

                    <div id="dd">

                    <input type=time  id="time"  name="Ctime"  value="" > 

                    <br>

                    <input type=date id="date" name="Cdate" value="" > 
                    <br>

                    <input type=text id="capacity" name="Ccapacity" value="" placeholder="Capacity" > 
                    <br>

                    <input type="submit"  id="add" name="Cadd" class="btn btn-primary" value="Add">
                    </form>

                    </div>
                    </form>

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

          <form method="POST" action="">
          
                <div id="dd">

                <p id="TripTitle">

                <input type=text  id="title" name="Gtitle" value="'.$this->model->get_name().'"

                </p><br><br>
              </div>
            <div class="col-sm-3 col-md-8">
            <input id="image"  type="file" name="Gimage" placeholder="" >
                    <img class="Timg"src="'.__ROOT__.'/view/Images/'.$this->model->get_image().'"><a class="edit" href="#" ><span  class="glyphicon glyphicon-edit"></span>
                    </a>

                
            </div>
            <div class="col-sm-9 col-md-3">
                <div class="desc">

                <div class="dtext">
                    <textarea id="description" name="Gdescription" > '.$this->model->get_description().'</textarea>
                </div>
                
                    <br>
                    <br>
                    <input type=text id="price" name="Gprice" value="'.$this->model->get_price().'"  EGP > 
                    
                    <br>

                    <input type="submit"  id="submit" name="Gsubmit" class="btn btn-primary" value="Save">

                    </div>

                    <form name="group" method="POST" action="">

                    <div id="dd">

                    <input type=time  id="time"  name="Gtime"  value="" > 

                    <br>

                    <input type=date id="date" name="Gdate" value="" > 
                    <br>

                    <input type=text id="capacity" name="Gcapacity" value="" placeholder="Capacity" > 
                    <br>

                    <input type="submit"  id="add" name="Gadd" class="btn btn-primary" value="Add">
                    </form>


                    </div>
                    </form>
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
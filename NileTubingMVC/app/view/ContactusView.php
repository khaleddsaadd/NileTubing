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
include 'CSS/ContactusCSS.php';

class contactV extends view
{

    public function output()
    {
       $str="";
        $str.= '<div class="container">
                    <div class="row">
        
                     <div class="row-md">
                     <div class="indexBG">
                        <h1 id="CU">Contact Us </h1>
                    </div>
                    </div>  
                    </div>
                </div>    
                    ';

                return $str;

    }

    public function form()
    {
        $str="";
        $str.='<div class="total"><form method="POST" action="" class="contact-form row" style="padding-top:40%; margin-left:10%;" id="box">
        <div id="newgedan">

      <div class="form-field col-lg-12">
         <input id="name" name="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field col-lg-12 ">
         <input id="email" name="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>

       <div class="form-field col-lg-12 ">
         <input id="phone" name="phone" class="input-text js-input" type="text" required>
         <label class="label" for="phone">Contact Number</label>
      </div>
      
      <div class="form-field col-lg-12">
         <input id="message" name="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Message</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit" id="submit" name="submit"> 
      </div>
   </form>

                 ';

                 return $str;


    }

}

?>
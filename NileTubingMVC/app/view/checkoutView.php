<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <?php include 'NavBoot/index.html';?>
        
</head>

<?php
require_once(__ROOT__ . "view/View.php");
include 'CSS/checkoutCSS.php';

class checkouts extends View
{
    public function output()
    {
        $str ="";
        $str .='<div class = "body">
                    <div class="container-fluid">
                                <div class = "row">    
                                    <h1 class="info">Proceed To Checkout</h1>    
                                    <div class = "column">
                                        <p class="Trip">Trip</p>
                                        <p class="date">date</p>
                                        <p class="price">Price</p>
                                        <p class="quantity">Quantity</p>
                                        <p class="total">Total</p>
                                    </div>
                                </div>
                               <div class= "row">
                                   <div class = "coulumn "> 
                                        <label class= "input Triprect">'.$this->model->get_name().'</label>
                                        <label class="input daterect">'.$this->model->get_date().'</label>
                                        <label class="input2 pricerect">'.$this->model->get_price().' EGP</label>
                                        <label class="input4 quantityrect">'.$this->model->get_quantity().'</label>
                                        <label class="input3 totalrect">'.$this->model->totalprice().' EGP</label>
                                    </div> 
                                </div>             
                                <div class = "row">
                                    <div class = "column">
                                        <button onclick="myFunction()" name="btn" class="rect" >Checkout</button>
                                    </div>
                               </div>     
                    </div>
                </div>
                <div class="img">
                    <div id="i">
                        <img class="img"src="'.__ROOT__.'/view/Images/'.$this->model->get_image().'">
                    </div>
                </div>';
        $str.='';
        $str .= '
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Checkout Confirmation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Press confirm to continue to the paymnet method
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <a href="payment.php?id='.$this->model->get_id().'&date='.$this->model->get_date().'&q='.$this->model->get_quantity().'"> <button type="button" class="btn btn-primary">Confrim</button></a>
            </div>
          </div>
        </div>
      </div>
      <script>
function myFunction() {
  var txt;
  if (confirm("Are you Sure You Want To Checkout ?")) {
    window.location = "payment.php?id="+".$date.";
  } else {
    window.location = "checkout.php?id="+"<?php echo $date; ?>";;
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
        ';
        $date = $this->model->get_id();
        return $str;
    }
}
?>

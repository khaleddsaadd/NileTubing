<?php 
require_once(__ROOT__ . "model/ContactusModel.php");
require_once(__ROOT__ . "controller/ContactusController.php");
require_once(__ROOT__ . "view/ContactusView.php");

$Cimg= __ROOT__.'/view/Images/ContactUs.png';
?>

<style>
    #row1{
  
 
  background-size: 70% 100%;
  background-repeat: no-repeat;
  position: absolute;
  width: 100%;
  height: 120%;
  left:25%;
  filter: drop-shadow(1px 20px 40px rgba(0, 0, 0, 0.1));

}
.indexBG
{
     position: absolute;
     width: 90%;
     height: 90%;
    
     background-image: url("<?php echo $Cimg?>");  
     background-position: center;
     background-repeat: no-repeat;
     background-size: 70% 100%;
     right:5%;
     margin-top:5%;
     
}

#CU{
  position: absolute;
  width: 50%
  float:left;
  
  margin-top:3%;
  margin-left:20%;
   
  font-family: Hind;
  font-style: normal;
  font-weight: normal;
  font-size: 60px;
  line-height: 154px;
  display: flex;
  align-items: center;
  letter-spacing: -0.017em;

  color: #1F3351;
}

#box{

  position: absolute;
  width: 50%;
  height: 100%;
  left: 12%;
  top: 100%;

  background: #FFFFFF;
  box-shadow: 2px 2px 50px rgba(0, 0, 0, 0.1);

}
.contact-form .form-field 
  {
     padding-top:-40%;
  }
  .contact-form .input-text
   {
    display: block;
    width: 50%;
    height: 50%;
    border-width: 0 0 2px 0;
    border-color: #5543ca;
    font-size: 18px;
    line-height: 26px;
    font-weight: 400;
    
  }
  .contact-form .input-text:focus
   {
    outline: none;
  }
  .contact-form .input-text:focus + .label,
  .contact-form .input-text.not-empty + .label {
    -webkit-transform: translateY(-24px);
            transform: translateY(-24px);
  }
  .contact-form .label 
  {
    position: absolute;
    left: 20px;
    bottom: 11px;
    font-size: 18px;
    line-height: 26px;
    font-weight: 400;
    color: #5543ca;
    cursor: text;
    transition: -webkit-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    transition: transform .2s ease-in-out, 
    -webkit-transform .2s ease-in-out;
  }
  .contact-form .submit-btn 
  {
    display: inline-block;
    background-color: #000;
    background-image: linear-gradient(125deg,#F1D158,#064497);
    color: #fff;
    text-transform: uppercase; 
    letter-spacing: 2px;
    font-size: 16px;
    padding: 8px 16px;
    border: none;
    margin-top:10%;
    margin-left:25%;
    width:200px;
    cursor: pointer;
  }

  #total{
      position: absolute;
      height:20%;
      padding-top:10%;
      left: 20px;

  }
  


</style>
<?php

include_once "../model/checkout.php";
include_once "../view/checkoutH.php";

class CheckoutController
{
    public static function ViewallwithnoPDF()
    {
        $Result= checkouts::viewAll();
        return $Result;
    }
    
    public static function Viewcowtarns()
    {
        $Result= checkouts::cowtrans();
        return $Result;
    }

    public static function addnew()
    {
        checkoutView::addnewride();
        if(isset($_POST['add']))
        {
            $obj=new checkouts();
            $obj->ID=$_POST['cowno'];
            $obj->name=$_POST['cowname'];
            $obj->price=$_POST['price'];
            $Result=checkouts::Addnew($obj);

          
        }
    }

  
   
}


?>
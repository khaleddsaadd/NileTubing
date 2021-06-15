<?php 
require_once(__ROOT__ . "controller/Controller.php");
class ContactusController extends Controller
    {
    public function insert() 
    {
    $name = $_REQUEST['name'];
    $email= $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $message= $_REQUEST['message'];


    $this->model->insertMessage($name,$email,$phone,$message);
   


    }

    }
?>
<?php 
require_once(__ROOT__ . "controller/Controller.php");
class AddAdminController extends Controller
{
    function insert()
    {
        $username=$_REQUEST["username"];
        $password=hash('ripemd160', $_REQUEST["password"]);
        $m=$this->model->add($username,$password);
        
         echo "<script>alert('$m');</script>";
    }
}
?>
<?php 
require_once(__ROOT__ . "controller/Controller.php");
class AddAdminController extends Controller
{
    function insert()
    {
        $username=$_REQUEST["username"];

        $password=$_REQUEST["password"];
       
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo '<script>alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.")</script>';
    return;}
    else{ 
    	 $password=hash('ripemd160', $_REQUEST["password"]);

    	$m=$this->model->add($username,$password);

         echo "<script>alert('$m');</script>";}
       
    }
}
?>
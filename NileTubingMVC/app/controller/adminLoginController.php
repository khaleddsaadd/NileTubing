<?php 
require_once(__ROOT__ . "controller/Controller.php");
class AdminController extends Controller
{
    function login()
    {
        $name=$_REQUEST["username"];
        $password=password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
        $password=hash('ripemd160', $_REQUEST["password"]);
        $sql = "SELECT * FROM adminaccounts where username='$name' and password='$password'";
        $dbh = new Dbh();
        $result = $dbh->query($sql);
    
        if ($result->num_rows == 1)
        {
            $row = $dbh->fetchRow();
            $_SESSION["id"]=$row["id"];
            $_SESSION["username"]=$row["username"];
       
            echo'<script>
            window.location.href="adminRides.php";
            </script>';
          
            
        }
    
        
        else
        {   
            echo'<div class="msg">';
            echo' <div class="alert alert-warning" role="alert" style="";>
            Incorrect Username or Password !
            </div>';
            echo'<div>';
        }
    }

}
?>
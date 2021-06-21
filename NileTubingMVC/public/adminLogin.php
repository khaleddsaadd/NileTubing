<?php 
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/adminLoginModel.php");
require_once(__ROOT__ . "controller/adminLoginController.php");
require_once(__ROOT__ . "view/adminLoginView.php");


$model = new Admin();
$controller=new AdminController($model);
$view = new adminView($controller, $model);
echo $view->output();


/*$Alogin = new Admin();
$Alogin->login($username, $password);
$view = new adminView;
echo $view->output();
*/

if(isset($_POST['button']))
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
?>



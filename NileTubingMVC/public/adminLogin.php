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
   $controller->login();

}
?>



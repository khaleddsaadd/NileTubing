<?php 
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/AddAdminModel.php");
require_once(__ROOT__ . "controller/AddAdminController.php");
require_once(__ROOT__ . "view/AddAdminView.php");


$model = new AddAdmin();
$controller=new AddAdminController($model);
$view = new AddAdminView($controller, $model);
echo $view->output();


if(isset($_POST['button']))
{      

$controller->insert();
   
}
?>



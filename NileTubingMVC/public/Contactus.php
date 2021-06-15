<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/ContactusModel.php");
require_once(__ROOT__ . "controller/ContactusController.php");
require_once(__ROOT__ . "view/ContactusView.php");


$model = new Contactus();
$controller = new ContactusController($model);
$view = new contactV($controller, $model);


echo $view->output();
echo $view->form();

if (isset($_POST['submit']) && !empty($_POST['submit'])) 
{
    $controller->insert();
}



?>
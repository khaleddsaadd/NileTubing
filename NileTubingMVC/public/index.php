<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/HomeModel.php");
require_once(__ROOT__ . "controller/HomeController.php");
require_once(__ROOT__ . "view/HomeView.php");

$model= new Home(1);
$controller = new HomeController($model);
$v = new v($controller, $model);

echo $v->output();
echo $v->displayVideo();
echo $v->VMP();
echo $v->Footer();
?>
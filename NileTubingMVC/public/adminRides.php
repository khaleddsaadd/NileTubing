<?php 
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/adminRidesModel.php");
require_once(__ROOT__ . "controller/adminRidesController.php");
require_once(__ROOT__ . "view/adminRidesView.php");

$model = new adminRides();
$controller=new adminRidesController($model);
$view = new rView($controller, $model);
echo $view->output();

$model = new adminRides('Single');
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->single();


if ($_POST) 
{
	
	 $controller->edit();
	
}

$model = new adminRides('Couple');
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->couple();

$model = new adminRides('Group');
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->group();

$model = new adminRides();
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->offers();
?>
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


if (isset($_POST['Ssubmit'])) 
{
	
	 $controller->editS();
     
	
}

$model = new adminRides('Couple');
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->couple();

if (isset($_POST['Csubmit'])) 
{
	
	 $controller->editC();

	
}

$model = new adminRides('Group');
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->group();

if (isset($_POST['Gsubmit'])) 
{
	
	 $controller->editG();

	
}

$model = new adminRides();
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->offers();
?>
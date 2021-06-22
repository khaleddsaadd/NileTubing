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

if (isset($_POST['Sadd'])) 
{
	
	 $controller->addS();
     
	
}

$model = new adminRides('Couple');
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->couple();

if (isset($_POST['Csubmit'])) 
{
	
	 $controller->editC();

	
}

if (isset($_POST['Cadd'])) 
{
	
	 $controller->addC();
     
	
}

$model = new adminRides('Group');
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->group();

if (isset($_POST['Gsubmit'])) 
{
	
	 $controller->editG();

	
}

if (isset($_POST['Gadd'])) 
{
	
	 $controller->addG();
     
	
}

$model = new adminRides();
$controller=new adminRidesController($model);
$v = new rView($controller, $model);
echo $v->offers();

if (isset($_POST['offers'])) 
{
	
	 $controller->offers();
     
	
}
?>
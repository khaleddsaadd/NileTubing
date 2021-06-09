<?php 
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/RidesModel.php");
require_once(__ROOT__ . "controller/RidesController.php");
require_once(__ROOT__ . "view/RidesView.php");
$model = new Rides();
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->output();

$model = new Rides(1);
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->single();

$model = new Rides(2);
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->couple();

$model = new Rides(3);
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->group();

$model = new Rides();
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->offers();
?>
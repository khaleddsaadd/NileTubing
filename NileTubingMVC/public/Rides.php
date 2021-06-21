<?php 
define('__ROOT__', "../app/");

require_once(__ROOT__ . "model/RidesModel.php");
require_once(__ROOT__ . "controller/RidesController.php");
require_once(__ROOT__ . "view/RidesView.php");
require_once(__ROOT__ . "model/OffersModel.php");
require_once(__ROOT__ . "controller/OffersController.php");
require_once(__ROOT__ . "view/OffersView.php");
 include 'Offers.php';

$model = new Rides();
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->output();

$model = new Rides('Single');
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->single();

$model = new Rides('Couple');
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->couple();

$model = new Rides('Group');
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->group();

$model = new Rides();
$controller=new RidesController($model);
$v = new rView($controller, $model);
echo $v->offers();
?>
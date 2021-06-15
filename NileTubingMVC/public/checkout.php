<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/checkoutModel.php");
require_once(__ROOT__ . "controller/checkoutController.php");
require_once(__ROOT__ . "view/checkoutView.php");

$id = $_GET['id'];
$date = $_POST['rideDate'];
$quantity = $_POST['quantity'];
$model= new checkout($id,$date,$quantity);
$controller = new checkoutController($model);
$checkouts = new checkouts($controller, $model);
echo $checkouts->output();
?>
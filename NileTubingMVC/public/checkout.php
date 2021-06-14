<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/checkoutModel.php");
require_once(__ROOT__ . "controller/checkoutController.php");
require_once(__ROOT__ . "view/checkoutView.php");

$id = $_GET['id'];
echo $id;
$model= new checkout($id);
$controller = new checkoutController($model);
$checkouts = new checkouts($controller, $model);
echo $checkouts->output();
?>
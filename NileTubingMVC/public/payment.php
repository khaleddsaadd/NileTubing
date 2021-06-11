<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/paymentModel.php");
require_once(__ROOT__ . "controller/paymentController.php");
require_once(__ROOT__ . "view/paymentView.php");

$model= new payment(1);
$controller = new paymentController($model);
$checkouts = new payments($controller, $model);
echo $checkouts->output();
?>
<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/AdminReservationsModel.php");
require_once(__ROOT__ . "controller/AdminReservationsController.php");
require_once(__ROOT__ . "view/AdminReservationsView.php");
$model = new res();
$controller=new AdminReservationsConroller($model);
$v = new resView($controller, $model);
echo $v->output();

if($_POST)
{
	$controller->printpdf();
}
?>
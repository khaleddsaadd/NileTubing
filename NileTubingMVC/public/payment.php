<head>      <link rel="stylesheet" 
    href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><head>
<?php
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/paymentModel.php");
require_once(__ROOT__ . "controller/paymentController.php");
require_once(__ROOT__ . "view/paymentView.php");

$id = $_GET['id'];
$model= new payment($id);
$controller = new paymentController($model);
$checkouts = new payments($controller, $model);
echo $checkouts->output();

if($_POST)
{
    $controller->insert();
}
   
?>
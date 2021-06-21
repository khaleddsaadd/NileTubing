<?php 
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/MessagesModel.php");
require_once(__ROOT__ . "controller/MessagesController.php");
require_once(__ROOT__ . "view/MessagesView.php");
$model = new MessagesModel();
$controller=new MessagesController($model);
$v = new MessagesView($controller, $model);
echo $v->output();
?>
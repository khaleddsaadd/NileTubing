<?php

$model = new offers();
$controller=new offersController($model);
$v = new offerview($controller, $model);
echo $v->output();
?>
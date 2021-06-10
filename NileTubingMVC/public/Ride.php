<?php 
define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/RideModel.php");
require_once(__ROOT__ . "model/ReviewModel.php");
require_once(__ROOT__ . "view/RideView.php");


$id = $_GET['id'];
$ridemodel = new RideInfo();
$ridemodel->readRide($id);

$ridev = new rideView();
$revmodel = new Review();
echo $ridev->output($ridemodel,$revmodel);

// $revmodel->Reviews($id);

if($_POST){
$name = $_POST['name'];
$rev = $_POST['rev-box'];
$revmodel->InsertReview($id,$rev,$name);
}

?>
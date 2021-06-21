<?php 
require_once(__ROOT__ . "controller/Controller.php");
class adminRidesController extends Controller
{
    public function editS()
     {
		$name = $_REQUEST['Stitle'];
        $price = $_REQUEST['Sprice'];
        $description=$_REQUEST['Sdescription'];
        $image = $_REQUEST['Simage'];
        $rideTime = $_REQUEST['Stime'];
        $rideDate = $_REQUEST['Sdate'];
        $rideCapacity = $_REQUEST['Scapacity'];
        $currentCapacity = $_REQUEST['Scapacity'];


		$this->model->edit($name,$price,$description, $image);
 
	}

    public function addS()
    {
       $rideTime = $_REQUEST['Stime'];
       $rideDate = $_REQUEST['Sdate'];
       $rideCapacity = $_REQUEST['Scapacity'];
       $currentCapacity = $_REQUEST['Scapacity'];

       $this->model->schdule($rideTime,$rideDate,$rideCapacity, $currentCapacity);
   }

    public function editC()
    {


       $Cname = $_REQUEST['Ctitle'];
       $Cprice = $_REQUEST['Cprice'];
       $Cdescription=$_REQUEST['Cdescription'];
       $Cimage = $_REQUEST['Cimage'];


       $this->model->edit($Cname,$Cprice,$Cdescription,$Cimage);

   
   }

   public function editG()
   {


      $Gname = $_REQUEST['Gtitle'];
      $Gprice = $_REQUEST['Gprice'];
      $Gdescription=$_REQUEST['Gdescription'];
      $Gimage = $_REQUEST['Gimage'];


      $this->model->edit($Gname,$Gprice,$Gdescription,$Gimage);

  
  }
	

    
}



?>
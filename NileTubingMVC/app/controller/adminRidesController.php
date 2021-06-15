<?php 
require_once(__ROOT__ . "controller/Controller.php");
class adminRidesController extends Controller
{
    public function edit()
     {
		$price = $_REQUEST['Sprice'];
        $description=$_REQUEST['Sdescription'];

		$this->model->edit($price,$description);
	}
	

    
}



?>
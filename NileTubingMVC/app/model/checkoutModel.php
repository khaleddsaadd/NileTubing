<?php
require_once(__ROOT__ . "model/Model.php");
class checkout extends Model
{
  /*public $tittle = 'Checkout';*/
  public $id;
  public $tripname;
  public $tripdate;
  public $tripprice;
  public $tripquantity;
  public $totalprice;
  public $tripimage;
  function __construct($id="",$date,$quantity)
  {
		$this->db = $this->connect();
        if($id!="")
        {
            $this->id = $id;
            $this->tripdate = $date;
            $this->tripquantity = $quantity;
            $this->readRide($id);
        }
  }  
  function readRide($id)
  {
        $sql = "SELECT * FROM rides where id='$id'";
		    $result = $this->db->query($sql);
		    if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $this->id = $row["id"];
            $this->tripname = $row["Name"];
            $this->tripprice = $row["Price"];
            $this->tripimage = $row["Image"];
        }   
  }
  function get_id()
    {
        return $this->id;
    }
    function get_name()
    {
        return $this->tripname;
    }
    function get_price()
    {
        return $this->tripprice;
    }
    function get_date()
    {
        return $this->tripdate;
    }
    function get_quantity()
    {
        return $this->tripquantity;
    }
    function totalprice()
    {
       return $this->totalprice= $this->tripprice*$this->tripquantity;
        
        /*return $this->totalprice;*/
    }
    function get_image()
    {
      return $this->tripimage;
    }

}  
?>
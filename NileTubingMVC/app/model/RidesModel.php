<?php 
require_once(__ROOT__ . "model/Model.php");
class Rides extends Model
{
    public $id;
    public $image; 
    public $name;
    public $price;
    public $discription; 
    public $capacity; 
    function __construct($id="")
    {
		$this->db = $this->connect();
        if($id!="")
        {
            $this->id = $id;
            $this->readRide($id);
        }
    }   
    function readRide($type)
    {
        $sql = "SELECT * FROM rides where R_Type='$type'";
		$result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $this->id = $row["id"];
            $this->name = $row["Name"];
            $this->price = $row["Price"];
            $this->image = $row["Image"];
            $this->discription = $row["Description"];
        }   
    }
    function get_id()
    {
        return $this->id;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_price()
    {
        return $this->price;
    }
    function get_image()
    {
        return $this->image;
    }
    function get_description()
    {
        return $this->discription;
    }
}
?>
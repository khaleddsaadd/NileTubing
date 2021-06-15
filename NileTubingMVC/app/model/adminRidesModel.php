<?php 
require_once(__ROOT__ . "model/Model.php");
class adminRides extends Model
{
    public $id;
    public $image; 
    public $name;
    public $price;
    public $discription; 
    public $capacity; 
    function __construct($R_Type="")
    {
		$this->db = $this->connect();
        if($R_Type!="")
        {
            $this->R_Type = $R_Type;
            $this->readRide($R_Type);
        }
    }  
    
    function readRide($R_Type)
    {
        $sql = "SELECT * FROM rides where R_Type='$R_Type'";
		$result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $this->id = $row["id"];
            $this->name = $row["Name"];
            $this->price = $row["Price"];
            $this->discription = $row["Description"];
            $this->image = $row["Image"];
        }   
    }
   
    

    function get_id()
    {
        return $this->id;
    }

    function set_name($name) 
    {
		return $this->name = $name;
    }   

    function get_name()
    {
        return $this->name;
    }

    function set_price($price) 
    {
		return $this->price = $price;
    }

    function get_price()
    {
        return $this->price;
    }

    function set_image($image) 
    {
		return $this->image = $image;
    }
    function get_image()
    {
        return $this->image;
    }

    function set_description($description) 
    {
		return $this->description = $description;
    }

    function get_description()
    {
        return $this->discription;
    }


    function edit( $price, $description)
    {
		$sql = "UPDATE rides set Price='$price', Description='$description' where id=$this->id;";
		if($this->db->query($sql) === true){
			echo "updated successfully.";
			$this->readRide($this->id);
		} else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
}
?>
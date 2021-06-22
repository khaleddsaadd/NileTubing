<?php 
require_once(__ROOT__ . "model/Model.php");
class adminRides extends Model
{
    public $id;
    public $image; 
    public $name;
    public $price;
    public $discription;
    public $rideID; 
    public $rideTime;
    public $rideDate;
    public $rideCapacity; 
    public $currentCapacity; 
    public $offerName;
    public $offerPrice; 
    public $offerimg;
    public $type;
    public $offerCapacity;
    public $startdate;
    public $enddate;

    

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


    function edit( $name, $price, $description,$image)
    {
		$sql = "UPDATE rides set Name= '$name', Price='$price', Description='$description', Image='$image' where id=$this->id;";
		if($this->db->query($sql) === true){
			echo' <script> alert("Updated successfully.") </script>';
            echo'<script>
            window.location.href="adminRides.php";
            </script>';
          
			$this->readRide($this->id);
		} else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}

    function schdule( $rideTime,$rideDate, $rideCapacity, $currentCapacity)
    {   
        $Rid = $this->id;

		$sql = "INSERT INTO ridesinfo (rideID, rideTime, rideDate, rideCapacity, currentCapacity) VALUES ( '$Rid', '$rideTime', '$rideDate', '$rideCapacity', '$currentCapacity','$enddate')";
		if($this->db->query($sql) === true)
        {
			echo '<script> alert("Records inserted successfully.") </script>';
		} 
		else
        {
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}


    function offers( $offerName,$offerPrice, $offerimg, $type, $offerCapacity,$startdate,$enddate)
    {   

		$sql = "INSERT INTO offers (Name, Price, Image, Type, Capacity,Start_Date, End_Dare) VALUES ( '$offerName', '$offerPrice','$offerimg', '$type', '$offerCapacity','$startdate','$enddate')";
		if($this->db->query($sql) === true)
        {
			echo '<script> alert("Records inserted successfully.") </script>';
		} 
		else
        {
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}

}
?>
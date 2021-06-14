<?php 
require_once(__ROOT__ . "model/Model.php");
class RideInfo extends Model
{
    public $id;
    public $rideID; 
    public $rideTime;
    public $rideDate;
    public $rideCapacity; 
    public $currentCapacity; 
    public $Name;
    public $Price;
    public $Description;
    public $Image; 
    function __construct($id="")
    {
		$this->db = $this->connect();
        if($id!="")
        {

            $sql = "SELECT * FROM ridesinfo where id=".$id;
		    $result = $this->db->query($sql);
		    if ($result->num_rows == 1)
            {
                $row = $this->db->fetchRow();
                $this->id = $row["id"];
                $this->rideID = $row["rideID"];
                $this->rideTime = $row["rideTime"];
                $this->rideDate = $row["rideDate"];
                $this->rideCapacity = $row["rideCapacity"];
                $this->currentCapacity = $row["currentCapacity"];

            }   
            $this->readRide($id);
        }
    }
    function readRide($id)
    {
        $sql = "SELECT * FROM rides where id=".$id;
		$result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $this->rideID = $row["id"];
            $this->Name = $row["Name"];
            $this->Price = $row["Price"];
            $this->Image = $row["Image"];
            $this->Description = $row["Description"];
        }   
    }   
    function RideInfos($ride_ID)
    {
        $sql = "SELECT id FROM ridesinfo where rideID=".$ride_ID;
		$result = $this->db->query($sql);
		if ($result->num_rows > 0)
        {
            $rideArray;
            $i=0;
            while($row = $result->fetch_assoc()) 
            {
            $rideData = new RideInfo($row["id"]);
            $rideArray[$i] = $rideData;
            $i++;
           }   
           return $rideArray;
        }
        return;
    }
    function get_id()
    {
        return $this->rideID;
    }
    
}
?>
<?php 
require_once(__ROOT__ . "model/Model.php");
class Review extends Model
{
    public $id;
    public $ID_Ride; 
    public $Review;
    public $Name;

    function __construct($id="")
    {
		$this->db = $this->connect();
        if($id!="")
        {
            $this->id = $id;
            $this->readReview($id);
        }
    }   
    function readReview($id)
    {
        $sql = "SELECT * FROM reviews where id=".$id;
		$result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $this->id = $row["id"];
            $this->ID_Ride = $row["ID_Ride"];
            $this->Review = $row["Review"];
            $this->Name = $row["Name"];
           
        }   
    }

    function Reviews($ride_ID)
    {
        $sql = "SELECT id FROM reviews where ID_Ride=".$ride_ID;
		$result = $this->db->query($sql);
		if ($result->num_rows > 0)
        {
            $reviewArray;
            $i=0;
            while($row = $result->fetch_assoc()) 
            {
            $reviewData = new Review($row["id"]);
            $reviewArray[$i] = $reviewData;
            $i++;
           }   
           return $reviewArray;
        }
        return;
    }
    function InsertReview($ride_ID,$review,$name)
    {
        $sql = "INSERT INTO reviews (`ID_Ride`, `Review`, `Name`) VALUES (".$ride_ID.",'".$review."','".$name."')";
        $result = $this->db->query($sql);
        return $result;
    }
}
?>
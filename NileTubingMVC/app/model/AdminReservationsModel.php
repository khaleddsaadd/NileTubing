<?php 
require_once(__ROOT__ . "model/Model.php");
class res extends Model
{
    public $id;
    public $rideId;
    public $Username;
    public $mail;
    public $gender;
    public $payment;
    public $date;
    public $quantity;
    public $price;
    public $rideName;
    function __construct($id="")
    {
        $this->db = $this->connect();
        if($id!="")
        {
            $sql = "SELECT * FROM reservations where id='$id'";
            $result = $this->db->query($sql);
            if ($result->num_rows == 1)
            {
                $row = $this->db->fetchRow();
                $this->id = $row["id"];
                $this->rideId = $row["ID_Ride"];
                $this->Username = $row["Name"];
                $this->mail = $row["Email"];
                $this->gender = $row["Gender"];
                $this->payment=$row["PaymentMethod"];
                $this->date = $row["Date_Time"];
                $this->quantity = $row["Quantity"];
                $this->price = $row["TotalPrice"];  
            }  
    }
    }
    function reservedRide()
    {
        $this->db = $this->connect();
        $sql = "SELECT * FROM rides where id='$this->rideId'";
        $result = $this->db->query($sql);
        if ($result->num_rows == 1)
        {
            $this->rideName = $row["R_Type"];

        }
        
        return $this->rideName;

    }
    function All()
    {
        $sql="SELECT * FROM reservations";
        $result = $this->db->query($sql);
        $i=0;
        $Result;
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()) 
            {
                $MyObj= new res($row["id"]);
                $Result[$i]=$MyObj;
                $i++;
            }
        }
        return $Result;	
        
    }
}
?>

<?php
require_once(__ROOT__ . "model/Model.php");
class payment extends Model
{
    public $tittle = 'Payment';
    public $id;
    public $name;
    public $price;
    public $userFirstName;
    public $userLastName;
    public $userEmail;
    public $userPhoneNumber;
    public $userGender;
    function __construct($id="")
    {
        $this->db = $this->connect();
        if($id!="")
        {
            $sql = "SELECT * FROM rides where id='$id'";
            $result = $this->db->query($sql);
            if ($result->num_rows == 1)
            {
                $row = $this->db->fetchRow();
                $this->id = $row["id"];
                $this->name = $row["Name"];
                $this->price = $row["Price"];
        }
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
    function SaveReservation($FName,$LName,$mobile,$PaymentMethod,$mail,$RideID,$Date,$Quantity)
    {
         $Total = $this->price * $Quantity;
         $rideName = $this->name;
        $sql = "INSERT INTO `reservations`(`Name`, `Mobile`, `Email` , `PaymentMethod`, `ID_Ride`, `Date_Time`, `Quantity` , `TotalPrice`)
         VALUES ('$FName','$mobile','$mail','$PaymentMethod','$RideID','$Date','$Quantity' , '$Total')";
		if($this->db->query($sql) === true)
        {
            echo "<br><div id='alr'> <div class = 'alert alert-success'>
            Thank You For Joining Nile Tubing!
            </div></div> ";            echo "<div id='prr' style='display:none;'>
                    <label id='Title'>$FName's Nile Tubing Ticket</label> <br>
                    <br><br>
                    <label>Contact Info</label>
                    <hr>
                    <label>Name: $FName $LName </label><br>
                    <label>Mobile: $mobile </label><br>
                    <label>E-Mail: $mail </label><br>
                    <label>Gender:  </label><br>


                    <br><br>
                    <label>Trip Info</label>
                    <hr>
                    <label>Payment Method: $PaymentMethod </label><br>
                    <label>Ride Name: $rideName </label><br>
                    <label>Reservation Date: $Date </label><br>
                    <label>Quantity: $Quantity Person/s </label><br>";
                    if($PaymentMethod=="Cash")
                    {
                        echo '<hr>
                        <label class="tprice">Total Price: '.$Total.' EGP</label>';
                    }
                    else
                    {
                      echo '<br><br>
                      <label>Payment Details</label>
                      <hr>
                      <label>Fawry: </label><br>
                      <label>Vodafone Cash:  </label><br>
                      <label>Etisalat Cash: </label><br>';
                      echo '<hr>
                      <label class="tprice">Total Price: '.$Total.' EGP</label>';
                    }
                    echo  "</div>";
                    echo '<script>
                    createPDF();
                </script>';
		} 
		else
        {
		}
    }
    function decrease($RideID,$Quantity,$CDate,$timeT)
    {
        $TotalCapacity;
        $sql = "SELECT * FROM ridesinfo  where rideDate='$CDate' AND rideTime='$timeT' AND rideID='$RideID'";
		$result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $TotalCapacity = $row['rideCapacity'];
        }
        $Remaining = $TotalCapacity - $Quantity;
        $sql = "UPDATE ridesinfo set currentCapacity='$Remaining' where rideDate='$CDate' AND rideTime='$timeT' AND rideID='$RideID'";
		if($this->db->query($sql) === true){
		} else{
		}
    }
}
?>

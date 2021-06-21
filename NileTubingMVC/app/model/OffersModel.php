<?php
require_once(__ROOT__ . "model/Model.php");
class offers extends Model
{
    public $id;
    public $image; 
    public $name;
    public $price;
    public $discription; 
    public $capacity; 
    public $type;
    public $startDate;
    public $enddate;

    function __construct($id="")
    {
        $this->db = $this->connect();
        if($id!="")
        {
            $sql = "SELECT * FROM offers where id='$id'";
            $result = $this->db->query($sql);
            if ($result->num_rows == 1)
            {
                $row = $this->db->fetchRow();
                $this->id = $row["id"];
                $this->name = $row["Name"];
                $this->image = $row["Image"];
                $this->price=$row["Price"];
                $this->type = $row["Type"];
                $this->startDate = $row["Start_Date"];
                $this->enddate=$row["End_Dare"];
            }  
         }
    }
    function All()
    {
        $sql="SELECT * FROM offers";
        $result = $this->db->query($sql);
        $i=0;
        $Result;
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()) 
            {
                $MyObj= new offers($row["id"]);
                $Result[$i]=$MyObj;
                $i++;
            }
        }
        return $Result;	
        
    }

}
?>
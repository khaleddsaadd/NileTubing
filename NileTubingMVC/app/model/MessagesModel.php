<?php
require_once(__ROOT__ . "model/Model.php");
class MessagesModel extends Model
{
    public $id;
    public $Name;
    public $Mail;
    public $Phone;
    public $Message;
    function __construct($id="")
    {
        $this->db = $this->connect();
        if($id!="")
        {
            $sql = "SELECT * FROM contactus where id='$id'";
            $result = $this->db->query($sql);
            if ($result->num_rows == 1)
            {
                $row = $this->db->fetchRow();
                $this->id = $row["id"];
                $this->name = $row["name"];
                $this->Mail = $row["email"];
                $this->Phone = $row["phone"];
                $this->Message=$row["message"];
            } 
        }
    }
    function All()
    {
        $sql="SELECT * FROM contactus";
        $result = $this->db->query($sql);
        $i=0;
        $Result;
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()) 
            {
                $MyObj= new MessagesModel($row["id"]);
                $Result[$i]=$MyObj;
                $i++;
            }
        }
        return $Result;	
        
    }

}
?>
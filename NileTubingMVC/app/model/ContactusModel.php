<?php 
require_once(__ROOT__ . "model/Model.php");

class Contactus extends Model
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $message;


    function __construct()
    {
        $this->db = $this->connect();
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->message = "";
    }

    function readMessage($id)
    {
        $sql = "SELECT * FROM contactus where id=".$id;
        $result = $this->db->query($sql);
        if($result->num_rows==1)
        {
            $row = $this->db->fetchRow();
            $this->id = $row["id"];
            $this->name = $row["name"];
            $this->email = $row["email"];
            $this->phone = $row["phone"];
            $this->message = $row["message"];
        }

    }

    function insertMessage($name,$email,$phone,$message)
    {
        $sql = "INSERT INTO contactus (name, email, phone, message) VALUES ('$name','$email', '$phone', '$message')";
        if($this->db->query($sql) === true)
        {
			echo'<script> alert("Message sent successfuly")</script>';
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
    }



	function set_name($name) 
    {
		return $this->name = $name;
	}

    function get_name()
    {
        return $this->name;
    }


    function set_email($email) 
    {
		return $this->email = $email;
	}


    function get_email()
    {
        return $this->email;
    }

    function set_phone($phone) 
    {
		return $this->phone = $phone;
	}

    function get_phone()
    {
        return $this->phone;
    }

    function set_msg($message) {
		return $this->message = $message;
	}

    function get_message()
    {
        return $this->message;
    }


}

?>
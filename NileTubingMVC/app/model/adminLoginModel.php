<?php 
require_once(__ROOT__ . "model/Model.php");
class Admin extends Model
{
    
    public $username;
    public $password;

    function __construct($username="", $password="")
    {
        $this->db = $this->connect();

        $this->username = $username;
        $this->password = $password;
        $this->login($username, $password);
    }

    function login($username,$password)
    {
        $sql="SELECT * FROM adminaccounts WHERE username= '$username' and password = '$password'" ;
        $result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $this->username = $row["username"];
            $this->password = $row["password"];
    
    }
}

function get_username()
    {
        return $this->username;
    }
function get_password()
    {
        return $this->password;
    }

}
?>

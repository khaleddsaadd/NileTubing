<?php 
require_once(__ROOT__ . "model/Model.php");
class AddAdmin extends Model
{
    
    public $username;
    public $password;

    function __construct($username="", $password="")
    {
        $this->db = $this->connect();

        $this->username = $username;
        $this->password = $password;
        $this->add($username, $password);
    }

    function add($username,$password)
    {

        // $sql = "INSERT INTO `adminaccounts`(`username`, `password`) VALUES (".$username.",'".$password."')";
         $sql = "INSERT INTO adminaccounts (`username`, `password`) VALUES ('".$username."','".$password."')";
        $result = $this->db->query($sql);
        if ($result)
        {
            return 'Done';
        }
        else{
            return'Failed to Add Admin';
        }
     
    
    }
}


?>

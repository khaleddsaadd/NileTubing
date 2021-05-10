<?php

include "admin_LoginH.php";

private $host = 'localhost';
private $username = 'root';
private $password = '';
private $database = 'niletubing';

protected $con;

class DB 
{
    function __construct()
    {
 
        if (!isset($this->con)) 
        {
 
            $this->con = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if (!$this->connection) 
            {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
 
        return $this->con;
    }


}



class User extends Db
{
     
 /* 
    public function login($username, $pass) 
    {  
        if(isset($_POST['loginbutton']))
        {
            $pass = md5($pass);  
            $check = mysql_query("Select * from adminaccounts where username='$username' and password='$pass'");    
            $result = mysql_num_rows($check);  
            if ($result == 1)
            {  
                header('Location: AdminRidesH.php');
            } 
            else 
            {  
               echo"NO"; 
        }  
    } 
}
*/
?>




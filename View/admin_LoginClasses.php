<?php
 class DB
 {
    private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "niletubing";
	public $conn;

    function __construct()
	{
		$this->conn = $this->connectDB();
	}

	function connectDB() 
    {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}


    public function login($Uname,$Pass)
    {
    $db_handle = new DB();
    $sql="SELECT * FROM adminaccounts WHERE username= '$Uname' and password = '$Pass'" ;
    $result = mysqli_query($db_handle -> conn , $sql);
    return $result;
    }
    
}

 ?>

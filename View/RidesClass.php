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

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
}
class Rides 
{
    public $id;
    public $image; 
    public $name;
    public $price;
    public $discription; 
    public $capacity; 

    function __construct($id)
    {
        $db_handle = new DB();
        $sql="SELECT * FROM rides WHERE id =".$id;
		$result = mysqli_query($db_handle -> conn , $sql);
		if ($row = mysqli_fetch_array($result))
		{
            $this->id = $row["id"];
            $this->name = $row["Name"];
            $this->price = $row["Price"];
            $this->image = $row["Image"];
            $this->discription = $row["Description"];
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
    function get_image()
    {
        return $this->image;
    }
    function get_description()
    {
        return $this->discription;
    }
}

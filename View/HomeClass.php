<?php
require_once("DBClass.php");
class HomeImages
{
    public $id;
    public $name;
    public $image;
    
    function __construct($id)
    {
        $db_handle = new DB();
        $sql="SELECT * FROM images WHERE id =".$id;
		$result = mysqli_query($db_handle -> conn , $sql);
		if ($row = mysqli_fetch_array($result))
		{
            $this->id = $row["id"];
            $this->name = $row["Name"];
            $this->image = $row["Image"];
        }
    }
    function get_name()
    {
        return $this->name;
    }
    function get_image()
    {
        return $this->image;
    }
}
class HomeVideos
{
    public $id;
    public $name;
    public $video;

    function __construct($id)
    {
        $db_handle = new DB();
        $sql="SELECT * FROM videos WHERE id =".$id;
		$result = mysqli_query($db_handle -> conn , $sql);
		if ($row = mysqli_fetch_array($result))
		{
            $this->id = $row["id"];
            $this->name = $row["name"];
            $this->video = $row["video"];
        }
    }
     function get_name()
    {
        return $this->name;
    }
    function get_video()
    {
        return $this->video;
    }
}
?>
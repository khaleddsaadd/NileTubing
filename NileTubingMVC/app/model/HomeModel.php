<?php 
require_once(__ROOT__ . "model/Model.php");

class Home extends Model
{
    public $id;
    public $name;
    public $video;
    public $image;
    
    function __construct($id="")
    {
		$this->db = $this->connect();
        if($id!="")
        {
            $this->id = $id;
            $this->readVideo($id);
            $this->readImage($id);
        }
        
    }
    function readImage($id)
    {
        $sql = "SELECT * FROM images where id=".$id;
		$result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $this->name = $row["Name"];
            $this->image = $row["Image"];
        }
    }
    function get_Image()
    {
        return $this->image;
    }
    function readVideo($id)
    {
        $sql = "SELECT * FROM videos where id=".$id;
		$result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
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
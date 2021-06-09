<?php
require_once(__ROOT__ . "model/Model.php");
class checkouts extends Model
{

    public $ID;
    public $name;
    public $price;
    
   
  
  public static function viewAll()
  {
    $database = Database::getInstance();
    $mysql=$database->getConnection();
    $database=mysqli_query($mysql,"SET NAMES 'utf8'");
    $sql="SELECT * FROM `rides`";
    $DataSet = mysqli_query($mysql,$sql) ;
	$i=0;
    $Result;
    while ($row = mysqli_fetch_array($DataSet))
    {
      $object= new Trip();
      $object->name=$row['trip'];
      $object->price=$row["price"];
      $Result[$i]=$object;
      $i++;
    }
    return $Result; 
  }
}  
?>
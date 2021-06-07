<?php

    class Database
    {
        public $databasename;
        public $host;
        public $user ;
        public $pass; 
        public $connection;
        public static $instance;

        private function __construct($hostname,$username,$password,$database)
        {  
            $this->host=$hostname;
            $this->user= $username;
            $this->pass=$password;
            $this->databasename=$database;

            if(!isset(self::$instance))
            {
                self::$instance=$this;
                $this->connection=new mysqli( $this->host,$this->user, $this->pass,$this->databasename) or die("no connection");
            }
        }

        public static function getInstance()
        {
            if(!isset(self::$instance)){
                $db = new Database("localhost","root","","niletubing");
                self::$instance=$db;
            }
            return self::$instance;     
        }

        public function getConnection()
        {
            return $this->connection;
        }

       public static function addwithid($tablename, $tabledata, $value)
        {
            $sql="INSERT INTO $tablename ($tabledata) VALUES ($value)";
            $database = Database::getInstance();
            $mysql=$database->getConnection();
            $database=mysqli_query($mysql,"SET NAMES 'utf8'");
            $result=mysqli_query($mysql,$sql);
            $last_id=mysqli_insert_id($mysql);
            return $last_id;
        }


        public static function add($tablename, $tabledata, $value)
        {
            $sql="INSERT INTO $tablename ($tabledata) VALUES ($value)";
            $database = Database::getInstance();
            $mysql=$database->getConnection();
            $database=mysqli_query($mysql,"SET NAMES 'UTF8'");
            $result=mysqli_query($mysql,$sql);
        }

        public static function delete($tablename, $where)
        {
            date_default_timezone_set("Africa/Cairo");
            $today= date("Y-m-d H:i:s");
            $sql="UPDATE $tablename SET lastupdate='$today', isDelete = 1 WHERE".$where;
            $database = Database::getInstance();
            $mysql=$database->getConnection();
            $database=mysqli_query($mysql,"SET NAMES 'UTF8'");
            $result=mysqli_query($mysql,$sql);
        }

        public static function update($tablename, $set, $where)
        {
            $sql="UPDATE $tablename SET $set WHERE $where" ;
            $database = Database::getInstance();
            $mysql=$database->getConnection();
            $database=mysqli_query($mysql,"SET NAMES 'UTF8'");
            $result=mysqli_query($mysql,$sql);
        }
    }

?>
<?php
class dbconnection{
    public $host="localhost:3306";
    public $usr="root";
    public $pwd="";
    public $db="student";

    public $conn;

    public function dbconnect(){
        $this->conn=mysqli_connect($this->host, $this->usr,$this->pwd, $this->db) or die("Unable to connect to db");
        return $this->conn;
    }
}
?>
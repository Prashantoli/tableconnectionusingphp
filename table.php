<?php
include("dbconnection.php");
$sql="
CREATE TABLE IF NOT EXISTS users(
id int PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(40) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE,
role VARCHAR(6) DEFAULT 'user',
status TINYINT(1) DEFAULT 0,
created_at datetime DEFAULT CURRENT_TIMESTAMP,
updated_at datetime DEFAULT CURRENT_TIMESTAMP
)";
$obj = new dbconnection;
$c=$obj->dbconnect();
$qry=mysqli_query($c, $sql) or die(mysqli_error($c));
if($qry){
    echo "Table created";
}
else{
    echo "Unable to create table";
}

?>
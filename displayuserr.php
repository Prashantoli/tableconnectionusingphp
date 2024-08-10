<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<?php


    include("dbconnection.php");
    $obj=new dbconnection;
    $c=$obj->dbconnect();
    $sql="SELECT * FROM users ORDER BY id DESC LIMIT 0,1000";
    //executing the query
    $qry=mysqli_query($c, $sql) or die(mysqli_error($c));
    while($row=mysqli_fetch_array($qry)){
        $id=$row['id'];
        echo $row['id']." ". $row['username']." ".$row['email']." ".$row['status']." ".$row['role'];
        echo "<a href=editdeleteuser.php?id=$id&action=edit>EDIT </a> | ";
        echo "<a href=editdeleteuser.php?id=$id&action=delete>DELETE</a>";
        echo "<br>";
    }
    

?>   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form method="post" name="register" action="">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Passowrd"><br>
        <input type="email" name="email" placeholder="you@example.com"><br>
        <input type="submit" name="submit" value="register">
</form>

<?php
if(isset($_POST['submit'])){
    //capturing the data
    $u=$_POST['username'];
    $p=md5($_POST['username']);
    $e=$_POST['email'];

    include("dbconnection.php");
    $obj=new dbconnection;
    $c=$obj->dbconnect();
    $sql="INSERT INTO users(username, password, email) VALUES('$u', '$p', '$e')";
    //executing the query
    $qry=mysqli_query($c, $sql) or die(mysqli_error($c));
    if($qry){
        echo "data Inserted";
    }
    else{
        echo "Something wrong";
    }
}
?>   
</body>
</html>
<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "auth_db";

$con=mysqli_connect("localhost","root","","auth_db");

if($con)
{
    echo "<hidden>";
}
else{
    echo "error";
}





try {
 
 $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                 $uName, $pass);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo "Connection failed : ". $e->getMessage();
}

?>
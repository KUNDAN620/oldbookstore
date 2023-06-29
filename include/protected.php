<?php
session_start();
$pro=$_SESSION['user'];
if($pro==true){

}
else{
    header("Location: ../login/login.php");
}
//echo "welcome".$_SESSION['user'];
?>
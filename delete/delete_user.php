<?php
 
include "../include/db.php"; 
include "../include/protected.php"; 


if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    echo $user_id;

    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";
    $result = $conn->query($sql);

    $sql1 = "DELETE FROM `post` WHERE `user_id`='$user_id'";
    $result1 = $conn->query($sql1);


     if ($result == TRUE) {
?>  



<script type="text/javascript">  
alert("User Acount and their ads deleted succesfully") 
window.open("http://oldstore.epizy.com/login/login.php","_self") </script>
<?php  
session_start();

session_unset();
session_destroy();

//header("Location: ../login.php");
exit;
?>
<?php } else {?>
 
 <script type="text/javascript">  
alert("Please try again") 
 </script>


<?php exit; } }  ?>
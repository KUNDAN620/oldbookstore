<?php

include "../include/db.php"; 
include "../include/protected.php"; 


if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    echo $user_id;

    $sql = "DELETE FROM `post` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {
?>  

<script type="text/javascript">  
alert("data deleted success") 
window.open("http://oldstore.epizy.com/user.php","_self") </script>

<?php } else {?>
 
 <script type="text/javascript">  
alert("Please try again") 
 </script>


<?php exit; } }  ?>
<?php 
include "include/db.php";
include "include/protected.php";
include "single_post.php";
$user_id = $_SESSION['id'];
$to_user_name=$name;
echo $user_id;
echo "to = ".$to_user_name;

$sql="SELECT * FROM `users` where `id`='$user_id'";
$data=mysqli_query($con,$sql);
while($uid=mysqli_fetch_array($data)){
   $name=$uid['fname'];
   $profile="upload/".$uid['pp'];
   echo "from = ".$name;
   echo $profile;
   ?>
  <?php
}
?>

<?php
if (isset($_GET['id'])) {
   $post_id = $_GET['id'];
   
}


?>  

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content=" width=device-width, initial-scale=1.0">    
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link type="text/css" rel="stylesheet" href="style/main.css">
    <link type="text/css" rel="stylesheet" href="style/single_post.css">
</head>
<body>
   <div class="messege-con">

<form aciion="" method="post">
 <div class="d-flex justify-content-center mb-4">
    <div class="form-outline me-3" style="width: 14rem">
        <input type="text" placeholder="Write Something" name="messege" id="form1" class="form-control" />
        <label class="form-label" for="form1"></label>
    </div>
    <button  name="send" class="btn btn-primary">SEND</button>
 </div>
</form>
</div>

<?php 
include "include/db.php";
$sql1="SELECT * FROM `post` where `id`='$post_id'";
$data1=mysqli_query($con,$sql1);
while($uid=mysqli_fetch_array($data1)){
 $to_id=$uid['user_id'];
 
echo $to_id;}


if(isset($_POST['messege'])){
   $messege=$_POST['messege'];

$sql= "INSERT into `chat` (`to_post`,`from_user`,`meg`,`to_user`,`from_user_name`,`profile`,`to_user_name`,`first_meg`,`to_user_profile`)VALUES('$post_id','$user_id','$messege','$to_id','$name','$profile','$to_user_name','$user_id','$uimage')";
$dat=mysqli_query($con,$sql);
  
$sql= "INSERT into `chat` (`from_user`,`to_user`,`profile`,`from_user_name`)VALUES('$idf','$user_id','$uimage','$to_user_name')";
$dat=mysqli_query($con,$sql);


if ($dat == TRUE) {
?>  

<script type="text/javascript">  
alert("messege send") 
window.open("http://oldstore.epizy.com/single_post.php?id=<?php echo $post_id; ?>","_self") </script>

<?php } else {?>
 
 <script type="text/javascript">  
alert("Please try again") 
 </script>


<?php exit; } }  ?>

</body>
</html>

<style>
   .messege-con{
      display: flex;
    position: absolute;
    top: 533px;
    /* border: solid; */
    right: 124px;
   }
   .user h2 {
    font-size: 22px;  
}

.user{
   
    margin-bottom: 60px;
}
   @media only screen and (max-width: 600px){
      .messege-con{
    top: 932px;
    right: 40px;
   }
   .user {
      margin-bottom:95px;
   }
   }
   </style>
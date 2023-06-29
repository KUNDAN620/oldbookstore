<?php  require "include/db.php";
if (isset($_GET['id'])) {
   $post_id = $_GET['id'];
   
}?>   

<?php
$sql="SELECT * FROM post where id=$post_id";
$data=mysqli_query($con,$sql);
while($pid=mysqli_fetch_array($data)){
    $title= $pid['title'];
    $dis= $pid['dis'];
   $image=$pid['file'];
   $price=$pid['price'];
   $address=$pid['address'];
   $state=$pid['state'];
   $city=$pid['city'];
   $zip=$pid['zip'];
   $user_id=$pid['user_id'];
}
?>

<?php
$sql="SELECT * FROM users where id=$user_id";
$data=mysqli_query($con,$sql);
while($uid=mysqli_fetch_array($data)){
    $name= $uid['fname'];
    $username= $uid['username'];
   $uimage="upload/".$uid['pp'];
   $mobile=$uid['mobile'];
   $idf=$uid['id'];
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content=" width=device-width, initial-scale=1.0">    
    <meta charset="utf-8">
    <link type="image" rel="icon" href="upload/icon.jpeg" >
    <title>Old book store</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link type="text/css" rel="stylesheet" href="style/main.css">
    <link type="text/css" rel="stylesheet" href="style/single_post.css">
</head>
<body>

      <div class="header">
        <?php include "include/navbar.php"; ?>
      </div>


    <div id="wrapper-div">
     
          <div class="main">
              
          <div class="box1"> 
            <div class="image"> <img src="<?php echo "upload/".$image; ?>" alt="image"></div>
            <div class="til-dis">
            <h2><?php echo "₹ ". $price; ?></h2> 
              <h1><?php echo $title; ?></h1> 
            <p>  <?php echo $dis; ?> </p>  </div>
        </div>
              <div class="box2"> 
                <div class="user">
                <div class="uimage"> <img src="<?php echo $uimage; ?>" alt="image" ></div> 
                <h1><i class="fa fa-user-o" aria-hidden="true"></i>  <?php echo $name; ?></h1> 
                <h2><i class="fa fa-envelope-o" aria-hidden="true"></i>       <?php echo $username; ?></h2> 
                <h2><i class="fa fa-phone" aria-hidden="true"></i>   <?php echo $mobile; ?></h2>

               <div class="button">
                <button class="but-call">CALL</button>
                <button class="but-messege"><a href="messege.php?id=<?php echo $post_id; ?>">MESSEGE</a></button></div>
                </div>
                <div class="address"> <h1><i class="fa fa-address-book-o" aria-hidden="true"></i>  ADDRESS</h1>

                  <h2>Area</h2>
                  <h3><?php echo $address; ?></h3> 

                  <h2>City</h2>
                  <h3><?php echo $city; ?></h3>

                  <h2>State</h2>
                  <h3><?php echo $state; ?></h3>

                  <h2>Zip</h2>
                  <h3><?php echo $zip; ?></h3>

                </div>
            </div>
       </div>
</div>
<div class="footer"> <?php include "include/footer.php";?></div>

</body>
           


</html>
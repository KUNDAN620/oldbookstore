
<?php 
include "include/protected.php"; 
 include "include/db.php";
   include "include/navbar.php";?>

   
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">    
    <meta charset="utf-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link type="image" rel="icon" href="upload/icon.jpeg" >
    <title>Old book store</title>
    <link type="text/css" rel="stylesheet" href="style/my_post.css">
    <link type="text/css" rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" type="text/css" href="style/user.css">
</head>
<body>
    <div class="section">
    <div class="section1">
<?php include "section2/user_profile.php"; ?>
<!-- section 1 ENDS HERE -->

<!-- section 2 post && chat page-->
<div class="section2">
<?php include "section2/my_post.php"; ?>

<!-- section 2 ENDS HERE -->

<!-- section 3 footer-->
<div class="section3"><?php include "include/footer.php";?></div>

</body>
</html>

<?php 
include "include/protected.php"; 
 include "include/db.php";
   include "include/navbar.php";?>

   
<!DOCTYPE HTML>
<html>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">    
    <meta charset="utf-8">
    <link type="image" rel="icon" href="upload/icon.jpeg" >
    <title>Old book store</title>
    <link type="text/css" rel="stylesheet" href="style/user_post.css">
    <link type="text/css" rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" type="text/css" href="style/user.css">
</head>
<body>
<div class="section">
<div class="section1">
<?php include "section2/user_profile.php"; ?>
<!-- section 1 ENDS HERE -->

<!-- section 2 START HERE -->
<div class="section2">
<?php include "my_messeges.php"; ?>
<!-- section 2 END HERE -->
</div>
</div>
<!-- footer section -->
  <div class="section3"><?php include "include/footer.php";?></div>
<!-- footer end -->


</body>
</html>

<style>

@import url(https://fonts.googleapis.com/css?family=Lato:400,700);

$green: #86BB71;
$blue: #94C2ED;
$orange: #E38968;
$gray: #92959E;


body {
  background: #C5DDEB;
  font: 14px/20px "Lato", Arial, sans-serif;
 
 
  color: white;
}
html{
    font-family: sans-serif;
}
.container {
  margin: 0 auto;
  width: 80%;
  background: #444753;
  border-radius: 5px;
}

.people-list {
  width:260px;
  float: left;
  
  .search {
    padding: 20px;
  }

.clearfix img{
    border-radius:50%;
}
  
  img {
    
  }
  
  .about {
    float: left;
    margin-top: 8px;
  }
  
  .about {
    padding-left: 8px;
  }
  
  .status {
    color: $gray;
  }
  
}






.clearfix:after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}






    .list {
    padding: 20px;
    height: 770px;
 
    
    }
    
    .clearflix{
      padding-bottom: 20px;
    }
  



  
  img {
    float: left;
    border-radius: 50%;
    float: left;
    height: 80;
    width:80;
     margin-top:20px;
  }
  
  .about {
    float: left;
    margin-top: 8px;
  }
  
  .about {
    padding-left: 8px;
  }
  
  .status {
    color: $gray;
  }
  



    .container{
        height: 800;
    width: 95%;
    border: solid;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: auto;}
   
    .users{
      
        width:40%;
        border:solid;
    }
    
    .messege-box{
      font-size:200px;
        width:60%;
        border:solid;
    }

  
    </style>
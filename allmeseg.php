<?php
include "include/protected.php"; 
include "include/db.php";
  include "include/navbar.php";
if (isset($_GET['id'])) {
   $meseg_id = $_GET['id'];
 // echo "mesege profile==".$meseg_id;
}  ?>

<!DOCTYPE HTML>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<!-- all SECTIONS -->
   <div class="section">
    <div class="section1">
    <?php include "section2/user_profile.php"; ?>
<!-- section 1 ENDS HERE -->

<!-- section 2 start HERE -->
<div class="section2">
<?php include "my_messeges.php"; ?>
<!-- section 2 end here -->



<!-- fetch messeges -->
<div class="messege-box">
  <div class="messege">
  <div class="user-whom"><?php
  ?> <img src="<?php echo $profile;?>" alt="avatar" /> <h2><?php echo $name;?></h2></div>
<?php   $user_id = $_SESSION['id'];

$sql="SELECT * FROM `chat`  ";
$chats=mysqli_query($con,$sql);

if (!empty($chats)) {
  foreach($chats as $chat){
    if(($chat['from_user'] ==$user_id) && ($chat['to_user'] ==$meseg_id)  or ($chat['first_meg'] ==$user_id))
    { ?>
<!-- user 1 mssege -->
<div class="right"><p class="rtext align-self-end border rounded p-2 mb-1"> <?=$chat['meg']?> </p></div>
     	
<!-- user 2 meseg -->
<?php }
 
 if(($chat['to_user'] ==$user_id) && ($chat['from_user'] ==$meseg_id))
 { //echo $chat['to_user'] ?>

<div class="left"><p class="ltext border rounded p-2 mb-1"><?=$chat['meg']?> </p></div>
 <?php } 
  }	
}
//end heere
else{ ?>
<div class="alert alert-info 
     text-center">
<i class="fa fa-comments d-block fs-big"></i>
No messages yet, Start the conversation
</div>
<?php } ?>

<!-- fetching messge end -->

   <!-- reply messege inserting -->
    <?php  
                    

                       include "include/db.php";
                      
                       $user_id = $_SESSION['id'];
                       
                        $sql="SELECT * FROM `users` where `id`='$user_id'";
                        $data=mysqli_query($con,$sql);
                        $uid=mysqli_fetch_array($data);{
                        $from_user_name=$uid['fname'];
                        $profile_from="upload/".$uid['pp'];}


            
                
        if(isset($_POST['rep-btn'])){
            $messege=$_POST['reply'];
          
         $sql= "INSERT into chat (`from_user`,`meg`,`to_user`,`profile`,`from_user_name`)VALUES('$user_id','$messege','$meseg_id','$profile_from','$from_user_name')";
         $dat=mysqli_query($con,$sql);

         if ($dat == TRUE) {
            ?>  
            
            <script type="text/javascript">  
            alert("messege send") 
            window.open("http://oldstore.epizy.com/allmeseg.php?id=<?php echo $meseg_id; ?>","_self") </script>
            
            <?php } else {?>
             
             <script type="text/javascript">  
            alert("Please try again") 
             </script>
            
            
            <?php exit; } }  ?>
            
            </div>
           
           
<div class="reply" >
<form aciion="" method="post">
<div class="d-flex justify-content-center mb-4">
    <div class="form-outline me-3" style="width: 14rem">
            <input type="text" name="reply"  class="form-control" placeholder='Write Something...' autocomplete="off" required/>
                    <label class="form-lareplyfor="form1"></label>
                        </div>
                            <button name="rep-btn" class="btn btn-primary">SEND</button>
                            </div>
</form>
</div>

</div>


  
        



</div>
</div>

<div class="section3"><?php include "include/footer.php";?></div>



</body>


</html>


<!-- allmessege styling -->
<style>
li.clearfix {
    border-bottom: double;
    /* margin-top: 100; */
    padding-bottom: 17px;
}
  .messege{
      background-color:#fff;
    width: -webkit-fill-available;
    height: 680px;
    border-bottom: double;
    overflow: auto;
}

.reply{
 height:90px;
 background-color:blueviolet;
    padding: 10px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
  


.user-whom h2{
  color:green;
  padding-left: 15px;

}
  
    .user-whom {
        background-color:darkgray;
    border-bottom:double;
    padding: 10px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
  header .navi ul li .a-btn, .delete-btn {
    display: block;
    text-decoration: none;
  }

 .right {
  display: flex;
    flex-direction: column;
    align-items: end;}
.left{
   
  }
</style>





<!-- all messge style end -->


<!-- user meseg style begin -->
<style>
p.rtext.align-self-end.border.rounded.p-2.mb-1 {
    float: right;
    background-color: blue;
    border-radius: 57px;
    padding: 10px;
    margin-right: 10px;
    margin-top:12px;
}

p.ltext.border.rounded.p-2.mb-1 {
    display: flex;
    background-color: green;
    padding: 10px;
    border-radius: 44px;
    margin-left: 10px;
    width: max-content;
    margin-top:12px;
}


@import url(https://fonts.googleapis.com/css?family=Lato:400,700);

$green: #86BB71;
$blue: #94C2ED;
$orange: #E38968;
$gray: #92959E;

*, *:before, *:after {
  box-sizing: border-box;
}

body {
  background: #C5DDEB;
  font: 14px/20px "Lato", Arial, sans-serif;
 
  color: white;
}
.mymeseg{
    display: contents;
    float: right;
    text-align: -webkit-right;
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
        height: 775;
    width: 95%;
    border: solid;
    display: -webkit-box;
    flex-direction: row;
    justify-content: space-between;
    margin: auto;}
   
    .users{
        width:40%;
           border-right: double;
    }
    
    .messege-box{
      
        width:60%;
       
    }

  
    </style>
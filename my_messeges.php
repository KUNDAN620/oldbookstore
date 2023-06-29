<div class="container">
<div class="users">
<div class="user-detail">
    <ul class="list">
                     <?php  include "include/db.php";
                      $user_id = $_SESSION['id'];


                      $sql="SELECT  DISTINCT `profile`,`from_user_name`,`from_user` FROM chat WHERE to_user=$user_id "; 
                      $data=mysqli_query($con,$sql);
                      
                       while($rec=mysqli_fetch_array($data)){
                       // if($rec['to_user'] ==$user_id){
                       $profile=$rec['profile'];
                       $name=$rec['from_user_name'];
                       $id=$rec['from_user'];
                      
                       
                         ?>           
              
        <li class="clearfix">
           <a href="allmeseg.php?id=<?php echo $id;  ?>"><img src="<?php echo $profile;?>" alt="avatar" /></a>
           <div class="about">
            <div class="name"><?php echo $name;?></div>
            <div class="status">
              <i class="fa fa-circle online"></i>
            </div>
            </div> 
        </li> <?php }?>
       
    </ul>
</div>
</div>

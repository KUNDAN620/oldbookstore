<?php
$user = $_SESSION['id'];
$query = mysqli_query($con,"select * from users where id = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];

$us=$row['username'];
$f=$row['fname'];
$sql="SELECT * FROM post where `user_id`='$id'";
$data=mysqli_query($con,$sql);
?>
     <header class="uhead">
	<div class="user">
		
        <img src="<?php echo "upload/".$row['pp']; ?>" alt="image">
		<h3 class="name"><?php ECHO $f; ?></h3>
		<p class="post"><?php ECHO $us; ?></p>
</div>
<nav class="navi">
	<ul>
		<li><a class="a-btn" href="section2/edit_profile.php">Edit Profile</a></li>
		<li><a class="a-btn" href="mymsg.php">my chat</a></li>
		<li><a class="a-btn" href="user.php">My Post</a></li>
        <li><a class="a-btn" href="login/logout.php">logout</a></li>
		<li> <a  onclick="return confirm('Are you sure,you want to delete Acount & Ads ?')" href="delete/delete_user.php?id=<?php echo $id ?>" class="delete-btn">Delete Acount</a></li>
		

</ul>
</header>
</div>

<?php include "../include/navbar.php" ;
include "../include/db.php" ;
include "../include/protected.php"; 
?>

<?php

$user = $_SESSION['id'];
$query = mysqli_query($con,"select * from users where id = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];
$image=$row['pp'];


//update post 
if(isset($_REQUEST['post']))
{
   
    $mobile=$_REQUEST['mobile'];
    $user=$_REQUEST['uname'];
    $name=$_REQUEST['fname'];
	$filet=$_FILES['pic']['tmp_name'];
    $file=$_FILES['pic']['name'];
	
	
	
	if(empty($file)){
	$default=$image	;
	}
	else {
		$default=$file;
	}
 


$sql = "UPDATE `users` SET `fname`='$name',`username`='$user',`pp`='$default',`mobile`='$mobile' WHERE `id`='$id'";
$data = $conn->query($sql);

   if($data)
    {
        move_uploaded_file($filet,"../upload/$file");
         echo "data inserted ";
        header('location:../user.php');
   }else{
       echo "not";
 }
}
?>
<!--end-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="../style/main.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
	<form class="" action="" method="POST" enctype="multipart/form-data">
<?php 
include ("../include/db.php");
$sql="SELECT * FROM movies";
$platform=mysqli_query($con,$sql);?> 

<select class="movie" onChange="update()">

<?php while($res=mysqli_fetch_array($platform)){$p= $res['movie_name'];$v=$res['id'];?>

  <option value="<?php echo $v; ?>"><?php echo $p; ?></option><?php }?>

</select><br><br>


	Movie ID : <input type="text" class="value" class="form-control" name="movie_id" readonly><br><br>

 Movie Name : <input type="text"  class="text" class="form-control" name="movie_name" readonly><br><br>

 <input type="text" class="form-control" placeholder="cast name" name="cast_name" > <br>

 <input type="text" class="form-control" placeholder="Action / Comedy" name="genre" > <br>


<!-- CAST IMAGE ADNS SUBMIT BUTTON  -->

 <div class="row">
   <div class="col">
	<label for=""><b>Cast Image : </b></label> 
		 <div class="">
				  <input type="hidden" name="size" value="100000"><input type="file" name="cast_image" >
			  </div></div></div> <br><br>
 <div class="signupbutton">
   <input type="submit" class ="btn btn-success btn-lg" name="submit" value="Submit" >
 </div>
</form>


    </div>
</body>
</html>


<?php include "../include/footer.php" ; ?>
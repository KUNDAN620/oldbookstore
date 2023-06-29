<?php
include('include/db.php');
 ?>
 <?php 
 session_start();
$user = $_SESSION['id'];
$query = mysqli_query($con,"select * from users where id = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];

$us=$row['username'];
$f=$row['fname'];
echo $id;
echo $f;

 if(isset($_REQUEST['post']))
    {
       
        $title=$_REQUEST['title'];
        $price=$_REQUEST['price'];
        $dis=$_REQUEST['dis'];
        $address=$_REQUEST['address'];
        $address2=$_REQUEST['address2'];
        $city=$_REQUEST['city'];
        $state=$_REQUEST['state'];
        $zip=$_REQUEST['zip'];
        $file=$_FILES['pic']['name'];
       
 // print_r($file);
//$filename=$file['name'];
  //$filepath=$file['tmp_name'];
 //$fileerror=$file['error'];
  

        $sql= "INSERT into post (`title`,`price`,`dis`,`address`,`address2`,`city`,`state`,`zip`,`file`,`user_id`,`post_by`)VALUES('$title','$price','$dis','$address','$address2','$city','$state','$zip','$file','$id','$f')";
        $data=mysqli_query($con,$sql);

       if($data)
        {
            move_uploaded_file($_FILES['pic']['tmp_name'],"upload/$file");
             echo "data inserted ";
            header('location:user.php');
       }else{
           echo "not";
     }
    }
?>


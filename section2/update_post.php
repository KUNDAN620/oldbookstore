<?php
include "../include/navbar.php";
include "../include/db.php"; 
include "../include/protected.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    }


$user = $_SESSION['id'];
$query = mysqli_query($con,"select * from post where id = '$user_id'");
$row =mysqli_fetch_array($query);
$id = $row['id'];
$image=$row['file'];

?>

<?php

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
 	
        if(empty($file)){
          $default=$image	;
          }
          else {
            $default=$file;
          }
  

 $sql = "UPDATE `post` SET `title`='$title',`price`='$price',`dis`='$dis',`address`='$address',`address2`='$address2',`city`='$city',`state`='$state',`zip`='$zip',`file`='$default',`post_by`='' WHERE `id`='$user_id'";

 $data = $conn->query($sql);

       if($data)
        {
            move_uploaded_file($_FILES['pic']['tmp_name'],"../upload/$file");
             echo "data inserted ";
            header('location:../user.php');
       }else{
           echo "not";
     }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/sell_book.css">
    <link rel="stylesheet" href="style/main.css">
    <title>Form Design</title>
  </head>
  <body>
 
   <div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display">Update Your Post</h1>
       </header>
   </div>
   
   <section class="container my-2 bg-dark w-50 text-light p-2">
    <form action="" method="POST" class="row g-3 p-3"  enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="book_title" class="form-label">Book Title</label>
            <input type="text" class="form-control" name="title"   value="<?php echo $row['title']; ?>" required>
          </div>
          <div class="col-md-6">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" placeholder="₹" value="<?php echo $row['price']; ?>" required>
          </div>
          <div class="col-md-4">
          
          </div>
        <div class="col-md-6">
         
        </div>
        <div class="col-md-6-row-5">
          <label for="Discription" class="form-label">Discription</label>
          <input type="text" class="form-control" name="dis" placeholder="discription" value="<?php echo $row['dis']; ?>">
        
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" name="address" placeholder="House No-xx" value="<?php echo $row['address']; ?>">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" class="form-control" name="address2" placeholder="Apartment, studio, or floor" value="<?php echo $row['address2']; ?>">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>">
        </div>
     <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select name="state" class="form-select" value="<?php echo $row['state']; ?>">
            <option selected>Jharkhand</option>
            <option>Bihar</option>
          </select>
        </div> 
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" name="zip" value="<?php echo $row['zip']; ?>">
        </div>
      
        <div class="mb-3">
  <label for="formFile" class="form-label">Update Image</label><br>

  <img src="<?php echo "../upload/".$row['file']; ?>" alt="image" height="70" weight="70"><br><br>

  <input class="form-control" type="file"  name="pic">
</div> 


       
        
       
          
        
        <div class="col-12">
          <button type="submit" name="post" class="btn btn-primary">Post</button>
        </div>
      </form>
   </section>
  </body>
<?php include "../include/footer.php"; ?>
</html>

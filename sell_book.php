<?php 
        include "include/protected.php";
         include "include/db.php";  
         include "include/navbar.php";
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
    <link type="image/x-icon" rel="icon" href="upload/icon.jpeg" >
    <title>Old book store</title>
  </head>
  <body>
   <div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display">Sell Your Old Book</h1>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
    <form action="upload.php" method="POST" class="row g-3 p-3"  enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="book_title" class="form-label">Book Title</label>
            <input type="text" class="form-control" name="title" placeholder="Book Name"  required>
          </div>
          <div class="col-md-6">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" placeholder="₹" required>
          </div>
          <div class="col-md-4">
          
          </div>
        <div class="col-md-6">
         
        </div>
        <div class="col-md-6-row-5">
          <label for="Discription" class="form-label">Discription</label>
          <input type="text" class="form-control" name="dis" placeholder="discription">
        
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" name="address" placeholder="House No-xx">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" class="form-control" name="address2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" name="city">
        </div>
     <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select name="state" class="form-select">
            <option selected>Jharkhand</option>
            <option>Bihar</option>
          </select>
        </div> 
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" name="zip">
        </div>
      
        <div class="mb-3">
  <label for="formFile" class="form-label">Upload Image</label>
  <input class="form-control" type="file" name="pic" >
</div> 


       
        
       
          
        
        <div class="col-12">
          <button type="submit" name="post" class="btn btn-primary">Post</button>
        </div>
      </form>
   </section>
  </body>
<?php include "include/footer.php"; ?>
</html>

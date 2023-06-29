<!DOCTYPE HTML>
<html>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">    
    <meta charset="utf-8">
    <link type="image" rel="icon" href="upload/icon.jpeg" >
    <title>Old book store</title>
    <link type="text/css" rel="stylesheet" href="style/card.css">
    <link type="text/css" rel="stylesheet" href="style/main.css">
</head>
<body>

<?php 
       include "include/db.php";
       include "include/navbar.php";
 ?>

<?php
//pagegnation start
$sql="SELECT * FROM post";
$data=mysqli_query($con,$sql);
$num=mysqli_num_rows($data);
$totalpost=$num;
$limitpost=6;
$totalpage=ceil($totalpost/$limitpost);


if(isset($_GET['page'])){
    $pageno=$_GET['page'];
if($pageno==0){
  $pageno=1;
} else{}
 }
 else{
    $pageno=1;
 }

$startlimit=($pageno-1)*$limitpost;
//echo "start limit=".$startlimit;
$currentpage=$pageno;
//pagegnation end
  ?>

<!-- home page posts start-->
 <div class="container">
        <div class="grid">
        <?php
                        $sql="SELECT * FROM post order by id DESC limit $startlimit,$limitpost ";
                        $data=mysqli_query($con,$sql);
                        if(mysqli_num_rows($data)>0){
                       while($res=mysqli_fetch_array($data))
                        {  ?>
        
            <div class="card">
                <div class="card_img">

                 <img src="<?php echo "upload/".$res['file']; ?>" alt="image" >
                 </div>
                <div class="card_body">
                    <h2 class="card_title"><?php echo $res['title']; ?></h2>
                    
                    <h4>₹ <?php echo $res['price']; ?></h4>
                    <p class="card_author">posted by <a href="#" class="author_link"><?php echo $res['post_by']; ?></a></p>
                   
                    <p><?php echo $res['dis']; ?></p>
                    <a href="single_post.php?id=<?php echo $res['id']; ?>" class="read_more">VIEW</a>
                </div> 
                
            </div><?php } } else { echo "<h1 align='center'>No Records Found</h1>"; } ?>
        </div>
    </div>  
  <!--post page end-->
   
    <?php
    //pagenation limits
    if($pageno==0){
      $p=$pageno=1;
    }
    else{
      $p=$pageno-1;
    }

    if($pageno>$totalpage-1){
      $n=$pageno=1;
    }
    else{
      $n=$pageno+1;
    }
    //limits end here ?>

    
    
  <div class="pagination">
    <!-- previous page-->  <a href="index.php?page=<?= $p; ?>"><i class="fa fa-chevron-left" ></i> Previous</a>

            <?php //create pagenation loop
            for($btn=1;$btn<=$totalpage;$btn++){
            $class="";
             if($currentpage==$btn){
            $class="active"; } 
             //loop ends here ?>

<!-- page numbers 1  2  3  4... -->  <a href="index.php?page=<?= $btn; ?>"  class="<?php echo $class; ?>"> <?php echo $btn;} ?></a>  

<!-- Next page --> <a href="index.php?page=<?= $n; ?>">Next <i class="fa fa-chevron-right" ></i></a> </div>

</body>
    
<div class="foot"><?php include "include/footer.php"; ?></div>
  
</html>

<style>
.pagination {
  margin: auto;
    display: flex;
    width: fit-content;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
</style>
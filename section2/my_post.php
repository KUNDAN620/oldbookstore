<div class="container">
    <h2>My Post</h2>
    <?php  
                       while($res=mysqli_fetch_array($data))
                        {  ?>
        
        <div class="blog-post">
            <div class="blog-post_img">
                <img src="<?php echo "upload/".$res['file']; ?>" alt="image">
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                   
                </div>
                <h1 class="blog-post_title"><?php echo $res['title']; ?></h1>
                <p class="blog-post_text">
                <?php echo $res['dis']; ?>
                </p>
                <a href="single_post.php?id=<?php echo $res['id']; ?>" class="blog-post_cta" id="v">View  </a>
                <a href="section2/update_post.php?id=<?php echo $res['id']; ?>" class="blog-post_cta">Modify</a>
                <a onclick="return confirm('Are you sure,you want to delete ?')" href="delete/delete_post.php?id=<?php echo $res['id']; ?>" class="blog-post_cta">Delete</a>
            </div>
        </div>

      
        <?php } ?>

    </div>


  
        
    </div>

    
   
</div>
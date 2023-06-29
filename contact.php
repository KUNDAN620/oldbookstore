
<?php include "include/navbar.php"; ?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link type="image" rel="icon" href="upload/icon.jpeg" >
    <title>Old book store</title>
    <link rel="stylesheet" href="style/contact.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="https://formspree.io/f/xjvddeqw"
  method="POST"">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name" autocomplete="off" required>
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Enter your email"  autocomplete="off" required>
        </div>
        <div class="input-box">
        <textarea name="message" class="input-box" id="message" cols="50" rows="9" placeholder="Message"  autocomplete="off" required></textarea>
        
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
        <button type="submit">  <input type="button" value="Send Now" ></button>
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
<?php include "include/footer.php"; ?>
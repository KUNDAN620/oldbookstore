<?php  

if(isset($_POST['fname']) && isset($_POST['mobile'])&&
   isset($_POST['uname']) &&  
   isset($_POST['pass'])){

    include "../../include/db.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $mobile=$_POST['mobile'];
    $pass = $_POST['pass'];
    
    
    $data = "fname=".$fname."&uname=".$uname."&mobile=".$mobile;
    
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../singup.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "Gmail is required";
    	header("Location: ../singup.php?error=$em&$data");
	    exit;
    }
    else if(empty($mobile)){
      $em = "Mobile no is required";
      header("Location: ../singup.php?error=$em&$data");
      exit;
    }else if(!preg_match('/^[0-9]{10}+$/', $mobile)) {
      $em = "Mobile no should be of 10 digit";
      header("Location: ../singup.php?error=$em&$data");
      exit;
   }
   else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../singup.php?error=$em&$data");
	    exit;
    }else {
   	  # checking the database if the username is taken
   	  $sql = "SELECT username 
   	          FROM users
   	          WHERE username=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$uname]);

      if($stmt->rowCount() > 0){
      	$em = "The Gmail ($uname) is already registered";
      	header("Location: ../singup.php?error=$em&$data");
   	    exit;
      }else {
      	# Profile Picture Uploading
      	if (isset($_FILES['pp'])) {
      		# get data and store them in var
      		$img_name  = $_FILES['pp']['name'];
      		$tmp_name  = $_FILES['pp']['tmp_name'];
      		$error  = $_FILES['pp']['error'];

      		# if there is not error occurred while uploading
      		if($error === 0){
               
               # get image extension store it in var
      		   $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

               /** 
				convert the image extension into lower case 
				and store it in var 
				**/
				$img_ex_lc = strtolower($img_ex);

				/** 
				crating array that stores allowed
				to upload image extension.
				**/
				$allowed_exs = array("jpg", "jpeg", "png");

				/** 
				check if the the image extension 
				is present in $allowed_exs array
				**/
				if (in_array($img_ex_lc, $allowed_exs)) {
					/** 
					 renaming the image with user's username
					 like: username.$img_ex_lc
					**/
					$new_img_name = $username. '.'.$img_ex_lc;

					# crating upload path on root directory
					$img_upload_path = '../../upload/'.$new_img_name;

					# move uploaded image to ./upload folder
                    move_uploaded_file($tmp_name, $img_upload_path);
				}else {
					$em = "You can't upload files of this type";
			      	header("Location: ../singup.php?error=$em&$data");
			   	    exit;
				}

      		}
      	}

      	// password hashing
      	$pass = password_hash($pass, PASSWORD_DEFAULT);

      	# if the user upload Profile Picture
      	if (isset($new_img_name)) {

      		# inserting data into database
            $sql = "INSERT INTO users
                    (fname, username, password, mobile, pp)
                    VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$fname, $uname, $pass, $mobile, $new_img_name]);
      	}else {
            # inserting data into database
            $sql = "INSERT INTO users
                    (fname, username, password, mobile)
                    VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$fname, $uname, $pass, $mobile]);
      	}

      	# success message
      	$sm = "Account created successfully";

      	# redirect to 'index.php' and passing success message
      	header("Location: ../singup.php?success=$sm&$data");
     	exit;
      }

   }
}else {
	header("Location: ../singup.php");
   	exit;
}
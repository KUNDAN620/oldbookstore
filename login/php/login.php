
<?php

session_start();


if(isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../../include/db.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=".$uname;
    
    if(empty($uname)){
    	$em = "Gmail name is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }
    

	 

      else if($username==$uname){
    	$em = "Your Gmail is not registered";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }
    else {

    	$sql = "SELECT * FROM users WHERE username = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$uname]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $username =  $user['username'];
          $password =  $user['password'];
          $fname =  $user['fname'];
          $id =  $user['id'];
          $pp =  $user['pp'];

          if($username === $uname){
             if(password_verify($pass, $password)){
               $_SESSION['id'] = $id;
               $_SESSION['fname'] = $fname;
               $_SESSION['user']=$uname;
               $_SESSION['pp'] = $pp;
                  $_SESSION['mobile'] = $pp;

                   header("Location: ../../user.php");
                 exit;
             }
             
             else {
               $em = "Incorect Gmail or password";
               header("Location: ../login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorectemail or password";
            header("Location: ../login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorect gmail  or password";
         header("Location: ../login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../login.php?error=error");
	exit;
}

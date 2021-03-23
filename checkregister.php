<?php 
session_start(); 
include "connection/connection.php";
$conn = connection();
if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['password2'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['password2']);
	$email = validate($_POST['email']);
	$role = validate($_POST['role']);
	$user_data = 'username='. $uname. '&email='. $email;


	if (empty($uname)) {
		header("Location: register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: register.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: register.php?error=Email is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        //$pass = md5($pass);

	    $sql = "SELECT * FROM user WHERE email='$email' AND username='$uname";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			//header("Location: register.php?error=The username is taken try another&$user_data");
			header("Location: register.php?error=The email is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO `user`(`username`, `email`, `password`, `role`) VALUES ('$uname','$email','$pass','$role')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
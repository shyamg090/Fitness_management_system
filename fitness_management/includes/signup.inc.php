<?php
session_start();


if (isset($_POST['submit'])) {
	require 'dbh.inc.php';
	
	$first =  $_POST['first'];
	$last = $_POST['last'];
	$email =$_POST['email'];
	$uid =  $_POST['uid'];
	$pwd =  $_POST['pwd']  ;
	$gender =  $_POST['gender'] ;
	$phone =  $_POST['phone'] ;
	$_SESSION["userid"]=$uid;
	//error handlers
	//check for empty fields
	
	if (empty($first) || empty($last) || empty($email)|| empty($uid)|| empty($pwd)|| empty($gender)|| empty($phone) ) 
	{
	    header("Location: ../signup.php?signup=empty");
	    exit();
	
	} else {
		//check if input character are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
        
		    header("Location: ../signup.php?signup=invalid");
	         exit();
           } else {
			   //check if email is valid
			   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				   
				   header("Location: ../signup.php?signup=email");
	               exit();
			   }
			   
				   else {
					   //hashing the password
					  
					   //insert the user into database
					   $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, gender, phone) VALUES ('$first', '$last', '$email', '$uid', '$pwd' ,'$gender', '$phone')";
					   $result=mysqli_query($conn, $sql);
					   if ($result) {
					   	# code...
					   
					   header("Location: ../indexuser.php?signup=success");
	                  exit();}  
	                    else{

	                  		echo "<script>alert('username taken.')</script>";
        echo "<script>window.open('../signup.php','_self')</script>";
	                  }
					   
				   }
			      
			   
		   }
	}
	mysqli_close($conn);
} else {
	header("Location: ../signup.php");
	exit();
	
}




 
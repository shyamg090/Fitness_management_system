<?php
session_start();


if (isset($_POST['trainer'])) {
	require 'dbh.inc.php';
	
	$first =  $_POST['first'];
	$email =$_POST['email'];
	
	$uid =  $_POST['uid'];
	$pwd =  $_POST['pwd']  ;
	$gender =  $_POST['gender'] ;
	$phone =  $_POST['phone'] ;
	$_SESSION["trainerid"]=$uid;


	//error handlers
	//check for empty fields
	
	if (empty($first)|| empty($email)|| empty($uid)|| empty($pwd)|| empty($gender)|| empty($phone) ) 
	{
	    header("Location: ../trainer_signup.php?signup=empty");
	    exit();
	
	} else {
		//check if input character are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) ){
        
		    header("Location: ../trainer_signup.php?signup=invalid");
	         exit();
           } else {
			   //check if email is valid
			   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				   
				   header("Location: ../trainer_signup.php?signup=email");
	               exit();
			   }
			   else {
				   $sql = "SELECT * FROM trainer WHERE traineruid='$uid'";
				   $result = mysqli_query($conn, $sql);
				   $resultCheck = mysqli_num_rows($result);
				   
				   if($resultCheck > 0) {
					 header("Location: ../trainer_signup.php?signup=usertaken");
	                  exit();   
				   }
				   else {
					   //hashing the password
					  
					   //insert the user into database
					   $sql = "INSERT INTO trainer(name,email,phone,traineruid,trainerpwd,gender) VALUES ('$first', '$email','$phone', '$uid', '$pwd' ,'$gender')";
					   $result=mysqli_query($conn, $sql);
					   if ($result) {
					   
					   	# code...
					   
					   header("Location: ../index2.php?signup=success");
	                  exit();}  
					   
				   }
			   }   
			   
		   }
	}
	mysqli_close($conn);
} else {
	header("Location: ../trainer_signup.php");
	exit();
	
}

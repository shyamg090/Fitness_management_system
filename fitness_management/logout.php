<?php
session_start();

if(isset($_SESSION["userid"])) {
	session_destroy();
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_name']);
	header("Location: index.php");
} else {
	header("Location: index.php");
}

if(isset($_SESSION["trainerid"])) {
	session_destroy();
	unset($_SESSION['trainerid']);
	unset($_SESSION['traineruid']);
	unset($_SESSION["training_name"]);
	unset($_SESSION["training_duriation"]);
	
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>
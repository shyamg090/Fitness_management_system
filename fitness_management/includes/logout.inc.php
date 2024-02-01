<?php

if (isset($_POST['submit'])) {
	session_start();
	session_unset();
	session_destroy();
    header("Location: ../index.php");
     	
	}
if (isset($_POST['logout'])) {
	session_start();
	session_unset();
	session_destroy();
    header("Location: ../index1.php");
     	
	}

?>
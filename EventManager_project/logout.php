<?php
	session_start();
	unset($_SESSION['name']);
    unset($_SESSION['abc']);
	 unset($_SESSION['xyz']);
	session_destroy();
	header("Location: index4.php");
	exit();
?>
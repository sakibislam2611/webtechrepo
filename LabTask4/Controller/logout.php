<?php
	
	session_start();
	
	unset($_SESSION['key']);

	header('location: ../view/Homepage.php');
?>
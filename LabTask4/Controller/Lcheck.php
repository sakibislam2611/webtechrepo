<?php

	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password){
					$_SESSION['key'] = 'true';
					header('location: ../view/dashboard.php');
			}else{
				echo 'Sorry, Invalid username/password';


			}

		}else{
			echo "Please give username and password properly";
		}
	}else{
		echo "invalid request...";
	}


?>
<?php
	session_start();

	if(isset($_POST['submit'])){

		$name= $_POST['name'];
		$email= $_POST['email'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		$gender= $_POST['gender'];
		$dob=$_POST['dob'];
		

		if($name != '' && $email != '' && $username != '' && $password != ''){
			$user =['name'=> $name,'email'=> $email,'username'=> $username, 'password'=> $password, 'gender'=> $gender,'dob'=> $dob];
			$_SESSION['user'] = $user;
			header('location: ../view/Login.php');
		}
		else{
			echo "null value found!";
		}
	}else{
		echo "Invalid request";
	}

?>
<?php
	
	session_start();
	if (isset($_POST['Submit'])) {

		//$ck = 0;

		$username = $_POST['username'];
		$password = $_POST['password'];
		$type = $_POST['type'];

		if ($_POST['username'] == "" && $_POST['password'] == "") {
			//echo "Enter Correct Information";
			echo "<script> alert('Please fill all the Information'); window.location = '../view/login.php' </script>";
		}

		else
		{
			if ($type == "Contractor") {
					
				$conn = mysqli_connect('localhost', 'root', '', 'myDB');
				$sql = "select * from contractor where username = '$username' and password = '$password'"; 
				$result = mysqli_query($conn, $sql);

				if($result->num_rows == 1  ){

					$row = mysqli_fetch_assoc($result);
					
					$_SESSION['name'] = $row['name'];
					$_SESSION['password']=$row['password'];
					$_SESSION['cpassword']=$row['cpassword'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['gender'] = $row['gender'];
					$_SESSION['dob'] = $row['dob'];
					$_SESSION['bg'] = $row['blood_group'];
					$_SESSION['picture'] = $row['picture'];


				setcookie('flag', true, time()+3600, '/');
				header('location: ../view/profile.php');
			}
			else{
				echo "<script> alert('Invalid Contractor'); window.location = '../view/login.php' </script>";
			}
			
			}

			elseif ($type == "Select") {
				
				echo "<script> alert('Please select user type'); window.location = '../view/login.php' </script>";

			}
			

			}
	
}

?>
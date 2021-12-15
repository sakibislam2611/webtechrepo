<?php
	require_once('db_config.php');

	function Contractor($user)
	{
		$conn = getConnection();
		$sql = "SELECT username FROM contractor";
		$result = mysqli_query($conn, $sql);

		while($username = mysqli_fetch_assoc($result)){
			if ($username['username'] == $user['username']) {
				return false;
				break;
			}
		}

		$query = "INSERT INTO contractor VALUES('','{$user['username']}', 
				'{$user['password']}','{$user['cpassword']}', '{$user['name']}', '{$user['email']}', '{$user['dob']}', '{$user['gender']}', '{$user['blood_group']}', '{$user['picture']}')";
		mysqli_query($conn, $query);
		return true;
	}

	function Contractorv($username, $password, $type)
	{
		if($type=="Contractor"){
			$conn = getConnection();
			$query = "SELECT * FROM contractor WHERE username='{$username}' and password='{$password}'";
			$result = mysqli_query($conn, $query);
			$user = mysqli_fetch_assoc($result);		
			return $user;			
		}
		
	}

?>
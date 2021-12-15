<?php
	require_once('db_config.php');
	
	function register($material_name,$material_qty){

		$conn = getConnection();
		$sql = "INSERT INTO custom_list(material_name, material_qty) VALUES ('$material_name','$material_qty')";
		$result = mysqli_query($conn, $sql);
		return true;
	
	}
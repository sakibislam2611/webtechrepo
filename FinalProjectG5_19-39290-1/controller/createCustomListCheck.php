<?php
	
	session_start();

	require_once('../model/customListModel.php');

	if (isset($_POST['add'])) {

		$material_name = $_POST['material_name'];
		$material_qty = $_POST['material_qty'];

			if($material_name != '' && $material_qty != ''){
			

			$status = register($material_name,$material_qty);

			if($status){
				
				$_SESSION['material_name'] = $material_name;
				$_SESSION['material_qty'] = $material_qty;
				setcookie('flag', 'true', time()+3600, '/');
				header('location: ../view/dashboard.php');
			}else{
				echo 'invalid input';
			}


		}else{
			echo "Provide information please";
		}
	}else{
		echo "invalid request";
	}

?>
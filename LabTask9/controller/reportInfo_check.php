<?php
	
	$name = $_POST['name'];

	if($name == null){
		echo 'Please fill the box then submit';
	}else{
		echo "Your report issue has been submitted";		
	}

?>
<?php
	if (isset($_POST['submit'])) {
		
		$material_name = $_POST['mname'];
		$material_qty = $_POST['mqty'];

		$ck = 1;

		if ($material_name == "" && $material_qty == "" ) {
			echo "Fill all the information";
		}else{
			

			
				$material = [
						'material_name'=>$material_name,	
						'material_qty'=>$material_qty,
						
					];

					$decode[] = $material;

					$curr_encode=json_encode($decode);

					$myfile = fopen('../model/addmaterial.json', 'a');
					fwrite($myfile, $curr_encode);
					fclose($myfile);
					header('location: ../view/profile.php');
			}
			

				
			}
	
?>
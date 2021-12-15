<?php 
session_start();
if(!isset($_COOKIE['flag']))
	{
		
		header('location:../view/login.php');
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGGED IN DASHBOARD</title>

</head>
<body>
	<form method="post" action="../controller/materialadd_check.php">
	<table width="50%">
		<tr>
			<td>
		<fieldset>
	
	
	<table width="100%">
		
		<tr>
			<td valign="top" width="40%">

				<a href="../view/profile.php" >BACK</a>
			
			</td>
		<td colspan="2">
		<fieldset>
			<legend>Add Material</legend>
		<?php 
		$myfile = fopen('../model/addmaterial.json','r');
		$data= fread($myfile, filesize('../model/addmaterial.json'));
		$user=json_decode($data,true);
		
		echo $user[];

		$material_name="";
		foreach ($user as $value) {

			$material_name.=$value['material_name'];
			$material_qty.=$value['material_qty'];
			$material_name="<br/>";
		}
		echo $material_name;

		 ?>

	    </fieldset>
        </td>

		</tr>

					
	</table>

</fieldset>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php

	}
	
?>
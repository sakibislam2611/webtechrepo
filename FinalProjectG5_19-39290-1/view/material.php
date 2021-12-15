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
	<title>Add Material</title>

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
			<legend>Request Material</legend>
		<table width="100%">
			<tr>
				<td width="30%">Material Name</td>
				<td>:<input type="text" name="mname"></td>
			</tr>

			<tr>
				<td>Material Quantity</td>
				<td>:<input type="text" name="mqty"></td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" name="submit" value="Add">
					
				</td>
			</tr>
		</table>

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
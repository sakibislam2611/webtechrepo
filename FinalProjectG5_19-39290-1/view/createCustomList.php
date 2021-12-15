<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<h1>Request Material</h1>

		<form action="../controller/createCustomListCheck.php" method = "POST">
			<label>Material Name :</label>
			<input type="text" name="material_name">
			<label>Material Qty :</label>
			<input type="text" name="material_qty">
			<input type="submit" name="add" value="Add">
		</form>
</body>
</html>
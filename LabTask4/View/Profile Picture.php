<?php

if(isset($_POST["submit"])) {
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] < 4000) {
  echo "Sorry, your file size should not be more than 4MB.";
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	
	<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <?php include 'dashboard.php'?>
	 
	<fieldset style=" height: 300px;  width: 450px;margin: -420px auto;">
          	<legend><b>PROFILE PICTURE</b></legend>
          	<img src="uploads/default.png" width="200" height="220"><br>
    		<input type="file" name="fileToUpload" id="fileToUpload"><br><hr>
    		<input type="submit" value="Submit" name="submit">

          </fieldset>	
</form>
	</body>
	</html>
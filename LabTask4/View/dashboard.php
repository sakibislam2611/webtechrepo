<?php
	session_start();
	if(isset($_SESSION['key'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<br><br><br><br><br><br>
	<div style="width: 600px;height:100px;text-align: right;border: 1px solid;margin: auto;background-color: lightgoldenrodyellow;">
		 Logged in as
                                 <a href="View Profile.php" style="color: indianred;"><?=$_SESSION['user']['username']?></a> |
                                  <a href="../Controller/logout.php" style="color: indianred;">Logout</a>&nbsp;&nbsp;&nbsp;
	</div>
	
	  <div style="width: 600px;height:200px;border: 1px solid;margin: auto;background-color: lightgoldenrodyellow;">
<br><br>
                                	 &nbsp;&nbsp;&nbsp;<a href="dashboard.php" style="text-align: left;color: indianred;">Dashboard</a><br>
                        &nbsp;&nbsp;&nbsp;<a href="Edit Profile.php"  style="text-align: left;color: indianred;">Edit Profile</a><br>
                        &nbsp;&nbsp;&nbsp;<a href="Profile Picture.php" style="color: indianred;">Change Profile Picture </a>

                                	<b style="text-align: center;color: darkred;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome, Contractor '<?=$_SESSION['user']['username']?>'</b>
                                </div>
</body>
</html>
<?php
	}else{
		header('location: Login.php');
	}
?>
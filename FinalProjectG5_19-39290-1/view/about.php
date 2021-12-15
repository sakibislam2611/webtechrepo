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
	<title>About</title>
		<style type="text/css">
		body{
		    background:#C0C0C0;
		    margin:0;
		    padding:0;
		    font-family: sens-serif;
		    
		}
		.box{
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    background:black;
		    text-align: center;
		    border-radius: 10px;
		    
		}
		.box a{
			color:red;
		}
		.box details{
			padding: 30px;

			color:red;
		}
		#print{
			padding-bottom: 30px;
			color:white;
		}



		
	</style>

</head>
<body>
	<table width="50%">
		<tr>
			<td>
		<fieldset class="box">
	
	<form method="post" action="../upload/fileupload.php" enctype="multipart/form-data">
	<table width="100%">
		
		<tr>
			
			<td valign="top" width="50%" id="print"><br><br>

				<?php echo "Name: &nbsp &nbsp".$_SESSION['name'];
				
				?><br>
				
				<?php echo "username: &nbsp &nbsp".$_SESSION['username']; ?><br>
				<?php echo "password: &nbsp &nbsp".$_SESSION['password']; ?><br>
				<?php echo "email: &nbsp &nbsp".$_SESSION['email']; ?><br>
				<?php echo "Blood Group: &nbsp &nbsp".$_SESSION['bg']; ?><br>
				
				<img src="../asset/<?php echo $_SESSION['picture']; ?>" width='60px'>
				
			</td>
			<td width="10%" valign="top"> <a href="../controller/logout_check.php">Logout</a><br>
				<a href="../view/profile.php">back</a>
			</td>

		</tr>
			
	</table>
</form>
</fieldset>
</td>
</tr>
</table>

</body>
</html>
<?php

	}
	
?>
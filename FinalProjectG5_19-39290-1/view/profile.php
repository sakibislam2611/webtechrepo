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
	<title>Registration</title>
	
	<style type="text/css">
		body{
		    background:#C0C0C0;
		    margin:0;
		    padding:0;
		    font-family: sens-serif;
		    background: url("../asset/abc.jpg");
			 background-repeat: no-repeat;
			 background-size:100%
		    
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

		 details{
			padding: 30px;

			color:red;
		}
		a{
			color: white;
		}

		
	</style>
</head>
<body>
		<table width="80%">
		<tr>
		<td>
	<form method="POST" action="../controller/login_check.php" >
		<table width="100%" height="700px">
			<tr>
				<td>
					<table align="center" >
						<tr>
							<td>
								<fieldset class="box">
									<form method="post" action=""></form>
	<table width="100%">
		
		<tr>
			<td>
					<summary>Dashboard</summary>
					<a href="../view/dashboard.php">Dashboard</a>
				<br>
					<summary>About</summary>
					<a href="../view/about.php">About</a>
				<br>
					<summary>Material</summary>
					<a href="../view/material.php">Request Material</a><br>
					<option>Delete Material</option>
				<br>
					<summary>Report Issue</summary>
					<a href="../view/reportInfo.php">Report Issue</a>
				<br>
					<summary>Add Contractor</summary>
					<a href="../view/addcontractor.php">Add Contractor</a>
				<br>
					<summary>Update Profile</summary>
					<a href="../view/updateown_profile.php">Update Profile</a>
			
			</td>
			<td valign="top" width="50%">
				<?php $link=$_SESSION['username'];
				
				?>
		

                <h3 style="color: white"><?php echo "Welcome,"?>
                 <a href="../view/about.php"><?php  echo $link ?><img src="../asset/<?php echo $_SESSION['picture']; ?>" width='100px'></a></h3>

             
			</td>
			<td width="10%" valign="top"> <a href="../controller/logout_check.php">Logout</a></td>

		</tr>

					
	</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</td>
       </tr>
      </table>
	</form>
</body>
</html>
<?php

	}
	
?>


<?php 
session_start();
if(!isset($_COOKIE['flag']))
	{
		
		header('location:../view/login.php');
	}
	else{
		$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Student</title>
	<script type="text/javascript" src="../js/registration_check.js"></script>
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
		label{
			color: white;
		}
	</style>

</head>
<body>
	<form method="post" action="../controller/updateownprofile_check.php">
	<table width="50%">
		<tr>
			<td>
		<fieldset class="box">
	
	
	<table width="100%">
		
		<tr>
			<td valign="top" width="40%">
				<a href="../view/profile.php" >BACK</a>
			</td>
		<td colspan="2">
		<fieldset class="regi">
			<legend style="color: red">Update</legend>
								<label>username:</label>&nbsp<input id="inuser" type="text" name="username" value="<?php echo $username; ?>" onkeyup=" usernotnull()"><br>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id='userN'></span><br>
							
								
								<label>Password:</label>&nbsp<input id="inpass" type="password" name="password" onkeyup="passnotnull()" ><br>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id='pass'></span><br>

								<label>Cpassword:</label>&nbsp<input id="incpass" type="password" name="cpassword" onkeyup="cpassnotnull()"><br>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id='cpass'></span><br>


								<label>Name:</label>&nbsp &nbsp &nbsp &nbsp<input id="inname"  type="text" name="name" onkeyup="namenotnull()"><br>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id='name'></span><br>

								
								<label>Email:</label>&nbsp &nbsp &nbsp &nbsp<input id="inemail" type="email" name="email" onkeyup="emailnotnull()"><br>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id='email'></span><br>

								<label>DOB:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input id="indob" type="date" name="dob" onkeyup="dobnotnull()"><br>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id='dob'></span><br>

								<label>Gender:</label>&nbsp
									<input id="male" type="radio" name="gender" value="male" onclick="gendernotnul()"><label> Male</label>
									<input id="female" type="radio" name="gender" value="female" onclick="gendernotnull()"> <label>Female</label>
									<input id="other" type="radio" name="gender" value="other" onclick="gendernotnull()"><label> Other</label><br>
									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id='gender'></span><br>


									<label>Blood group:</label>&nbsp
									<select id="inbg" name="bg">
										<option  value="O+" onclick="bgnotnull()">O+</option>
										<option  value="O-" onclick="bgnotnull()">O-</option>
										<option  value="A+" onclick="bgnotnull()">A+</option>
										<option  value="A-" onclick="bgnotnull()">A-</option>
										<option  value="B+" onclick="bgnotnull()">B+</option>
										<option  value="B-" onclick="bgnotnull()">B-</option>
										<option  value="AB+" onclick="bgnotnull()">AB+</option>
										<option  value="AB-" onclick="bgnotnull()">AB-</option>
									</select><br>
									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id='bg'></span><br><br>
									<center><input type="submit" name="Submit" value="Update"></center>
									<a href="changeProfilePicture.php"> change profile picture</a>


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
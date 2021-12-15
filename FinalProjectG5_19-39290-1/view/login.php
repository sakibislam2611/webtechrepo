<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	
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
		.box h2{
		    color: #fff;
		    text-transform: uppercase;
		    font-weight: 500;
		}
		.label{
			color: #fff;
		    text-transform: uppercase;
		    font-weight: 500;
		}
		.box input[type = "text"], .box input[type = "password"]{
		    border: 0;
		    background: none;
		    text-align: center;
		    border: 2px solid #009900;
		    padding: 6px 6px;
		    outline: none;
		    color: #48dbfb;
		    border-radius: 15px;
		}
		.box select{
			border: 0;
		    background: none;
		    text-align: center;
		    border: 2px solid #48dbfb;
		    padding: 6px 6px;
		    outline: none;
		    color: green;
		    border-radius: 15px;
		}
		.box input[type="submit"]{
		    border: 0;
		    background: none;
		    display: block;
		    margin: 20px auto;
		    text-align: center;
		    border: 2px solid #1dd1a1;
		    padding: 14px 40px;
		    outline: none;
		    color: #ffffff;
		    border-radius: 24px;
		    transition: 0.25s;
		    cursor: pointer;
		}
		.box input[type="submit"]:hover{
		    background: #1dd1a1;
		}
		.box a{
			color: #FFFF99;
		} 

	</style>
</head>
<body>
	<form method="POST" action="../controller/login_check.php" >
		<table width="100%" height="700px">
			<tr>
				<td>
					<table align="center" >
						<tr>
							<td>
								<fieldset class="box">
									<table>
										<tr>
											<td colspan="2">
												<h2 align="center">Sign In</h2>
											</td>
										</tr>

										<tr>
											<td class="label">
												User type
											</td>
											<td>
												<select name="type" id="type">
													<option value="Select">Select</option>
													<option value="Contractor">Contractor</option>
													<option value="Engineer">Engineer</option>
													<option value="Client">Client</option>
													<option value="Supervisor">Supervisor</option>
												</select>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
											</td>
										</tr>
										<tr>
											<td class="label">
												Username
											</td>
											<td>
												<input type="text" name="username" id="username" value=""> <br>
												<span style="color: red" id="user"> </span>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
											</td>
										</tr>
										<tr>
											<td class="label">
												Password
											</td>
											<td>
												<input type="password" name="password" id="password" value=""> <br>
												<span style="color: red" id="pass"> </span>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
												<hr>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<div id="result"></div>
												<input type="submit" name="Submit" value="Sign In">
											</td>
										</tr>
										<tr>
											<td align="center" colspan="2">
												<a href="../view/registration.html">No Account? Sign Up here</a>
											</td>
										</tr>
									</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Assessment Task</title>
</head>
<body>

<?php
	$nameErr = $emailErr = $birthErr = $genderErr =$degreeErr =$bloodErr = "";
		$name = $email = $birth = $gender =$degree =$blood = "";
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	  	$name = test_input($_POST["name"]);
	   
	    if (!preg_match("/^[A-Za-z]{2}[a-zA-Z . -]*$/",$name)) {
	      $nameErr = "Must start with a letter and can contain a-z, A-z, dash, Period";
	    }
	  }
	
	if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
	    
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	    }
	  }
  if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }
	  if (empty($_POST["degree"])) {
	    $degreeErr = "degree is required";
	  } else {
	  	    
	    $degree = test_input($_POST["degree"]);
	    if($degree<2)
	     $degerrErr="At least two of them must be selected";

	  }
    
  if (empty($_POST["birth"])) {
	    $birthErr = "birth is required";
	  } else {
	  	$birth = test_input($_POST["birth"]);
	   
	    if (!preg_match("/^([0-9]{2})([0-9]{2})([0-9]{4})*$/",$birth)) {
	      $birthErr = "Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
	    }
	  }
	  if(empty($_POST["blood"]))
	
      {
      	$bloodErr="blood is required";
      }else{
      	$blood = test_input($_POST["blood"]);
      }

	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	  return $data;
	}

	?>

	
	<h2>TASK</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<fieldset style="width:250px;height:130px;">
			<legend><h2>Name</h2></legend>
			<input type="text" name="name">
			<?php echo $nameErr;?>
			<hr>
		</fieldset><br>
		<fieldset style="width:250px;height:130px;">
			<legend><h2>Email</h2></legend>
			<input type="text" name="email">
			<?php echo $emailErr;?>
			<hr>
		</fieldset><br>
		<fieldset style="width:250px;height:130px;">
			<legend><h2>Date of Birth</h2></legend>
			&nbsp;&nbsp;&nbsp;dd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yyyy<br>
			<input type="text" name="birth" size="3">&nbsp;<span>/</span>&nbsp;<input type="text" name="birth" size="3">&nbsp;<span>/</span>&nbsp;<input type="text" name="birth" size="4">
       <?php echo $birthErr;?>
			<hr>
		</fieldset><br>
		<fieldset style="width:250px;height:130px;">
			<legend><h2>Gender</h2></legend>
			<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="other">Other
		<?php echo $genderErr;?>
			<hr>
		</fieldset><br>
		<fieldset style="width:250px;height:130px;">
			<legend><h2>Degree</h2></legend>
			<input type="checkbox" name="degree" value="SSC">SSC
		<input type="checkbox" name="degree" value="HSC">HSC
		<input type="checkbox" name="degree" value="BSc">BSc
		<input type="checkbox" name="degree" value="MSc">MSc
       <?php echo $degreeErr;?>
			<hr>
		</fieldset><br>
		<fieldset style="width:250px;height:150px;">
			<legend><h2>Blood Group</h2></legend>
			<select name="blood">
			
			
              <option selected disabled ></option>
                <option>A+</option>
                 <option>B+</option>
                  <option>AB+</option>
                  <option>O+</option>
    	          <option>O-</option>
    	          
    	        </select><?php echo $bloodErr;?><br><br>
    	        <input type="submit" value="Submit">
    		<hr>
			
		</fieldset><br>

	</form>
    
    <?php 

	 	echo "<h1>Your input</h1>";
	 	echo $name."<br>";
	 	echo $email . "<br>";
	 	echo $birth . "<br>";
	 	echo $gender . "<br>";
	 	echo $degree . "<br>";
	 		echo $blood . "<br>";
	 		
	 ?>

</body>
</html>	
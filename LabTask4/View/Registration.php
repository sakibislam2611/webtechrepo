<?php

	
	
	 $message = '';  
 $error = '';

	

   if (isset($_POST["submit"])) 
   {
	  if (empty($_POST["name"])) {
	     $error= "Name is required";
	  } 

	
	else if (empty($_POST["email"])) {
	    $error = "Email is required";
	  } 
	 
	    
	    else if (!(strpos($_POST["email"],"@")>0) and !(strpos($_POST["email"],".")>0)) {
	      $error = "Invalid email format";
	    }
	  
	  else if (empty($_POST["username"])) {
	   $error = "Username is required";
	  }
	  
	   
	   else if (!preg_match("/^[A-Za-z]{2}[a-zA-Z]*$/",$_POST["username"])) {
	       $error= "Must start with a letter and can contain a-z,A-z,";
	    }
	  

 else if(empty($_POST["password"]))
 {
     $error = "Please enter password   ";
 }
     

	
	  else if (strlen($_POST["password"]) <= '8') {
        $error = " Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
        $error = " Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
       $error = " Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
        $error = " Password Must Contain At Least 1 Lowercase Letter!";
    }
     elseif(!preg_match("/[@%$#]/",$_POST["password"])) {
        $error = "Password must contain at least one of the special characters (@, #, $,%)";
    }
    
    
    elseif(empty($_POST["cpassword"])) {
    $error = "Please enter confirmpassword ";
}
 else if($_POST['password']!=$_POST['cpassword']) {
    $error = "Password and Confirm password does not match ";
}

    
   

else if (empty($_POST["gender"])) {
	    $error = "Gender is required";
	  }
	   
	   else if (empty($_POST["dob"])) 
     {
          $error="Please put valid date of birth";
     }
    


 else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST["name"],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["username"],
                     'password'     =>     $_POST["password"],
                    
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"],
                    
	                 
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                       if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<b>Congratulations, your account has been successfully created.</b>";  
                }  
           }  
           else  
           {  
                $error = 'Sorry, something wrong with your json file';  
           }  
           
      }
  }
       

	 
    
  

             
          
        





	


	?>






















<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>




	<br><br><br><br><br><br>
   <div style="height:500px;width:400px;border:1px solid;background-color: lightgoldenrodyellow;margin: auto;">
   	<br><h2 style="text-align: center;color:darkred;"><u style="color:darkred;">Registration Form</u></h2><br>
   	<form method="post" action="../Controller/Rcheck.php">
   		 <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
   		 &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: indianred;"> Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name"><br>
     
   		
   		
     <br>
     &nbsp;&nbsp;&nbsp;&nbsp; <span style="color: indianred;">Email:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email"><br>
     <br>

     &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: indianred;"> Username:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="username"><br>
    
     <br>
   		&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: indianred;">Password:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="password"><br>
    <br>
   		&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: indianred;"> Confirm Password:</span>&nbsp;&nbsp;&nbsp; <input type="password" name="cpassword"><br>
     <br>
   		&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: indianred;">Gender:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female"><span style="color: indianred;">Female</span>
		<input type="radio" name="gender" value="male"><span style="color: indianred;">Male</span>
		<input type="radio" name="gender" value="other"><span style="color: indianred;">Other</span><br>
    <br>
   		 &nbsp;&nbsp;&nbsp;&nbsp;Date Of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   		 <input type="date" name="dob"><br><br>
   		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Submit" name="submit"value="Submit"style="background-color: indianred;">
 <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  

   	</form>
   </div>

</body>
</html>
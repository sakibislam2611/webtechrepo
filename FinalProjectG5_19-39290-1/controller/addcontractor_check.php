<?php
session_start();

if(isset($_POST['Submit']))
{
   $username= $_POST['username'];
   $password= $_POST['password'];
   $cpassword=$_POST['cpassword'];
   $name= $_POST['name'];
   $email= $_POST['email'];
   $dob= $_POST['dob'];
   $gender=$_POST['gender'];
   $blood_group=$_POST['bg'];
   $picture='dp.png';
   if($username !=''  && $password!=''&& $cpassword!='' && $name!='' && $email!='' && $dob!='' && $gender!='' && $blood_group!='')

    
      
   {
    
      if($password==$cpassword)
      {

        $conn = mysqli_connect('localhost', 'root', '', 'myDB');
        $sql = "insert into contractor values('', '$username', '$password', '$cpassword', '$name', '$email','$dob', '$gender','$blood_group','$picture')"; 
        $result = mysqli_query($conn, $sql);
        echo "<script> alert('Contractor added successfully'); window.location = '../view/addcontractor.php' </script>";

        

      } 

      else
      {
        echo "password don't match";
      }
        

        }
        else{
          

        }

        }

else
{
    echo " Invalid request";
}

?>
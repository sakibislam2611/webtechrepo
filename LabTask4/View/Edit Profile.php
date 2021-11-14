<?php
    session_start();
    if(isset($_SESSION['key'])){
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post" action="../Controller/Rcheck.php">
    <br><br><br><br><br><br>
     <div style="width: 600px;height:100px;border: 1px solid;text-align: right;margin: auto;background-color: lightgoldenrodyellow;">
                            Logged in as
                               <a href="View Profile.php"style="color: indianred;" ><?=$_SESSION['user']['username']?></a>|
                               <a href="dashboard.php"style="color: indianred;">Home</a> |

                                <a href="../Controller/logout.php"style="color: indianred;">Logout</a>&nbsp;&nbsp;&nbsp;
                                </div>
                                <div style="width: 600px;height:400px;border: 1px solid;margin: auto;background-color: lightgoldenrodyellow;"><br>
                                <b style="text-align:left;color: darkred;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Edit Profile</u></b><br><br>
                                &nbsp;&nbsp;&nbsp;<span style="color: indianred;">Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" value="<?=$_SESSION['user']['name']?>"><br><br>
                                &nbsp;&nbsp;&nbsp;<span style="color: indianred;">Email:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" value="<?=$_SESSION['user']['email']?>"><br><br>
                               &nbsp;&nbsp;&nbsp; <span style="color: indianred;">Username:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="username" value="<?=$_SESSION['user']['username']?>"><br><br>
&nbsp;&nbsp;&nbsp;<span style="color: indianred;">Password:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="password"value="<?=$_SESSION['user']['password']?>" ><br><br>

                                &nbsp;&nbsp;&nbsp;<span style="color: indianred;">Gender:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" checked=""><span style="color: indianred;">Female</span>
        <input type="radio" name="gender" value="male"><span style="color: indianred;">Male</span>
        <input type="radio" name="gender" value="other"><span style="color: indianred;">Other</span><br><br>
        &nbsp;&nbsp;&nbsp;<span style="color: indianred;">Date Of Birth:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="date" name="dob" value="<?=$_SESSION['user']['dob']?>"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submit" value="Edit" style="color: indianred;">

                            </div>
                            </body>
</html>
<?php 
    }else{
        header('location: Login.php');
    }
?>
                        
                   

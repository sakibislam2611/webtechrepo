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
<form method="post" action="../Controller/Rchech.php">
    <br><br><br><br><br><br>
     <div style="width: 400px;height:100px;border: 5px solid;text-align: right;margin: auto;background-color: lightgoldenrodyellow;">
                            Logged in as
                               <a href="View Profile.php"style="color: indianred;"><?=$_SESSION['user']['username']?></a>|
                               <a href="dashboard.php"style="color: indianred;">Home</a> |
                                <a href="../Controller/logout.php"style="color: indianred;">Logout</a>&nbsp;&nbsp;&nbsp;
                                </div>
                                <div style="width: 400px;height:250px;border: 5px solid;margin: auto;background-color: skyblue;"><br>
                                <b style="text-align:left;color: blue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profile</b><br><br>

                   &nbsp;&nbsp;&nbsp; <span style="color: black;"> Name:  <?=$_SESSION['user']['name']?></span><br><br>
                     &nbsp;&nbsp;&nbsp; <span style="color: black;">Email:  <?=$_SESSION['user']['email']?></span><br><br> 
                    
                       &nbsp;&nbsp;&nbsp;<span style="color: black;">Gender:  <?=$_SESSION['user']['gender']?></span><br><br>
                       &nbsp;&nbsp;&nbsp;<span style="color: black;"> Date Of Birth:  <?=$_SESSION['user']['dob']?></span><br><br>

                            </div>
                            </body>
</html>
<?php 
    }else{
        header('location: Login.php');
    }
?>
<?php

session_start(); 

include 'conn.php';
if(isset($_POST['submit'])){
    
    $a_email=$_POST['a_email'];
    $a_password=$_POST['a_pass'];

    $slq="SELECT * FROM `admin_registration` WHERE `a_email` = '$a_email' AND `a_password` ='$a_password' ";
    $res = mysqli_query($con,$slq);
    $row = mysqli_fetch_array($res);

    if($row>0)
    {
        echo 'Login Successful';
       header("location:display.php");
    }
    else
    {
        echo 'data failed ';
    }


}

?>


<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <form method="POST">
            <h2>Login</h2>
            
            <div class="input-field">
                <input type="text" required name="a_email">
                <label>Enter your email</label>
            </div>
            <div class="input-field">
                <input type="password" required name="a_pass" >
                <label>Enter your password</label>
            </div>
            <div class="forget">
                <!-- <label for="remember">
                    <input type="checkbox" id="remember"> 
                </label> -->
                 <!-- <a href="#">Forgot password?</a> -->
            </div>
            <input type="submit" name="submit" value="Login" class="button" />
        </form>
    </div>
</body>

</html>
<?php

include 'conn.php';

if(isset($_POST['submit'])){
    
    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_pass'];

    $slq="SELECT * FROM `register form` WHERE `u_email` = '$u_email'  AND  `u_password` = '$u_password' ";
    $res = mysqli_query($con,$slq);
    $row = mysqli_fetch_array($res);

    if($row>0)
    {
        echo 'Login Successful';
       header("location:/grocery/home.html");
    }
    else
    {
        echo 'data failed ';
        header("location:login.html");
    }


}
?>


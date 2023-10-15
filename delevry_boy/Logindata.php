<?php

include 'conn.php';

if(isset($_POST['submit'])){
    
    $d_email=$_POST['d_email'];
    $d_password=$_POST['d_pass'];

    $slq="SELECT * FROM `delavery boy` WHERE `d_email` = '$d_email' AND `d_password` = '$d_password' ";
    $res = mysqli_query($con,$slq);
    $row = mysqli_fetch_array($res);

    if($row>0)
    {
        echo 'Login Successful';
        // header("location:index.php");
    }
    else
    {
        echo 'deat failed ';
    }

}

?>
<?php
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
       header("location:index.html");
    }
    else
    {
        echo 'data failed ';
    }


}

?>
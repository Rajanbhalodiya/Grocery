<?php

include 'conn.php';

if(isset($_POST['submit'])) 
{

    $a_name=$_POST['a_name'];
    $a_bank_detail=$_POST['a_bank_detail'];
    $a_contact=$_POST['a_contact'];
    $a_email=$_POST['a_email'];
    $a_password=$_POST['a_password'];


    $que = "INSERT INTO `admin_registration` ( `a_name`, `a_bank_detail`, `a_contact`, `a_email`, `a_password`) 
    VALUES ( '$a_name', '$a_bank_detail', '$a_contact', '$a_email', '$a_password')";
    $res = mysqli_query($con,$que);

    if($res>0)
    {
        echo 'data inserted';
    }
    else
    {
        echo 'data failed';
    }

}
?>  
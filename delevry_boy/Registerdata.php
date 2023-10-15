<?php 
 
include 'conn.php'; 
 
if(isset($_POST['submit']))  
{ 
 
    $d_name=$_POST['d_name']; 
    $d_phone=$_POST['d_phone']; 
    $d_email=$_POST['d_email']; 
    $d_password=$_POST['d_pass']; 
 
 
    $que = "INSERT INTO `delavery boy`(`d_phone`, `d_name`, `d_email`, `d_password`)
     VALUES ('$d_phone','$d_name','$d_email','$d_password')"; 
    $res = mysqli_query($con,$que); 
 
    if($res) 
    { 
        echo 'data inserted'; 
    } 
    else 
    { 
        echo 'data failed'; 
    } 
 
} 
?>
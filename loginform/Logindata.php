<?php
 session_start();

 if(isset($_SESSION["alogin"]) && $_SESSION["alogin"]==true)
 {
        header("location:login.html");
     exit;
 }
include 'conn.php';

if(isset($_POST['submit'])){
    
    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_pass'];

    $slq="SELECT * FROM `register form` WHERE `u_email` = '$u_email'  AND  `u_password` = '$u_password' ";
    $res = mysqli_query($con,$slq);
    $row = mysqli_fetch_array($res);

    if($row>0)
    {
        session_start();

       $_SESSION["alogin"]=true;
       $_SESSION["u_email"]=$u_email;

       //$_SESSION["email"]=$row['email'];
       //  $_SESSION["password"]=$row["password"];
       echo "<script>alert('login succsesss')</script>";
      
       header("location:/grocery/index.php");

    }
    else
    {
        echo "<script>alert('invaid username and password')</script>";
        
        echo  "<script>window.location='login.html'</script>";
    }


}
?>
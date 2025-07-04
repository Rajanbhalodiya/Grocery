
<?php

include 'conn.php';


if(isset($_POST['submit'])) 
{

    $u_name=$_POST['u_name'];
    $u_phone=$_POST['u_phone'];
    $u_email=$_POST['u_email'];
    $u_password=($_POST['u_pass']);
    $u_confirmpassword = $_POST['u_confirmpassword'];


    $que = "INSERT INTO `register form`(`u_phone`, `u_name`, `u_email`, `u_password`, `u_confirmpassword`) 
    VALUES ('$u_phone', '$u_name', '$u_email', '$u_password', '$u_confirmpassword')";
    $res = mysqli_query($con,$que);

    
    
    if($_POST['u_pass'] != $_POST['u_confirmpassword']){
        echo "Your passwords did not match.";
        exit();
     }

    if($res)
    {
        echo 'data inserted';
        header("location:login.html");
    }
    else
    {
        echo 'data failed';
        header("location:Register.html");
    }

}
?>  

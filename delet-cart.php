<?php

include 'conn.php';

    $c_id = $_GET['c_id'];
    $tmp_img = $_FILES['c_img']['tmp_name'];
    $file1 = 'admin_login/uploaded/img/'.$img = $_FILES['img']['name'];
    move_uploaded_file($tmp_img,$file1);

    $q = " DELETE FROM `cart` WHERE `c_id`='$c_id' ";

    $qur = mysqli_query($con, $q);
    
    if ($qur) {
    
        echo '<script>alert("data deleted successfully")</script>';
        echo '<script type="text/JavaScript"> window.location = "cart.php" </script>';

    }else{
        
        echo '<script>alert("data deleted failed")</script>';

    }

?>
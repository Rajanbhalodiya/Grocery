<?php

include 'conn.php';

    $id = $_GET['id'];
    $tmp_img = $_FILES['img']['tmp_name'];
    $file1 = 'uploaded/img/'.$img = $_FILES['img']['name'];
    move_uploaded_file($tmp_img,$file1);

    $q = " DELETE FROM `addproduct` WHERE `id`='$id' ";

    $qur = mysqli_query($con, $q);
    
    if ($qur) {
    
        echo '<script>alert("data deleted successfully")</script>';
        echo '<script type="text/JavaScript"> window.location = "display.php" </script>';

    }else{
        
        echo '<script>alert("data deleted failed")</script>';

    }

?>
<?php
    session_start(); 
    session_destroy(); 
    header("Location:index.php");
    
    // $url = 'login.php';

    // header('Location: ' . $url); 

    echo '<script>alert("Logout")</script>';
    echo '<script type="text/JavaScript"> window.location.href = "index.php" </script>';
    

?>
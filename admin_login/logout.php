<?php
    session_start(); 
    session_destroy(); 
    
    // $url = 'login.php';

    // header('Location: ' . $url); 

    echo '<script>alert("Logout")</script>';
    echo '<script type="text/JavaScript"> window.location = "adminlogin.php" </script>';

?>
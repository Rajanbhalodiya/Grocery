<?php

$HOST = 'localhost';
$USER = 'root';
$PASS = "";
$DB = "grocery";

$con = mysqli_connect($HOST,$USER,$PASS,$DB);

if($con==false)
{
    die('Error:Cannot Connect');
}

?>
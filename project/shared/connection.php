<?php

$conn=new mysqli("localhost","root","","WebDevelopment");

if($conn->connect_error)
{
    echo "Connection Failed";
    die;
}

?>
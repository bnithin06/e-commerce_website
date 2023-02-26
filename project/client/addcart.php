<?php

$pid=$_GET['pid'];
session_start();
$userid=$_SESSION['userid'];

include_once "../shared/connection.php";

$cmd="insert into cart(userid,pid) values($userid,$pid)";

$status=mysqli_query($conn,$cmd);

if($status)
{   
    echo "Added to Cart";
    header("location:view.php");
}
else
{
    echo "Error in SQL Syntax";
}



?>
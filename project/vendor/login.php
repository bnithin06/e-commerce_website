<?php

$uname=$_POST['username'];
$uemail=$_POST['email'];
$upass=$_POST['password'];


include_once "../shared/connection.php";

$sql_result=mysqli_query($conn,"select * from seller where email='$uemail'||sellername='$uname' and password='$upass'");
$row_count=mysqli_num_rows($sql_result);

if($row_count==0)
{
    echo "Invalid Credentials";
}
else
{
    $row=mysqli_fetch_assoc($sql_result);
    print_r($row);
    $userid=$row['userid'];

    session_start();
    $_SESSION['sellerid']=$sellerid;

    echo "login Success";
    header('location:view.php');
}


?>
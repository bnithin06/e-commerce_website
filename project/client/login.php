<?php

$uname=$_POST['username'];
$upass=$_POST['password'];


include_once "../shared/connection.php";

$sql_result=mysqli_query($conn,"select * from user where username='$uname' and password='$upass'");
$row_count=mysqli_num_rows($sql_result);

if($row_count==0)
{
    echo "<div class='empty'>
    Invalid Details!<br><br><br>
    </div>";
}
else
{
    $row=mysqli_fetch_assoc($sql_result);
    print_r($row);
    $userid=$row['userid'];

    session_start();
    $_SESSION['userid']=$userid;

    echo "login Success";
    header('location:view.php');
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        .empty{
        font-family:calibri;
        top: 250%;
        text-align:center;
        font-size:27px;
        }
        </style>
</head>
</html>
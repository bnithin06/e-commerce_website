<?php

session_start();
$userid=$_SESSION['sellerid'];

include_once "../shared/connection.php";

$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];


$fname=$_FILES['pdtimg']['name'];

$impath="../shared/images/$fname";

move_uploaded_file($_FILES['pdtimg']['tmp_name'],$impath);

$status=mysqli_query($conn,"insert into product(name,price,details,impath) values('$name',$price,'$details','$impath')");
if($status)
{
    echo "Product Uploaded successfully";
    header('location:add.php');
}
else
{
    echo "Error in SQL Syntax";
    echo mysqli_error($conn);
}

?>
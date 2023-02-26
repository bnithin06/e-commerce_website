<?php

include_once "../shared/connection.php";
$pid=$_POST['pid'];
$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];


$fname=$_FILES['pdtimg']['name'];

$impath="../shared/images/$fname";

move_uploaded_file($_FILES['pdtimg']['tmp_name'],$impath);
$cart_result=mysqli_query($conn,"select * from product where pid=$pid");
        while($cartrow=mysqli_fetch_assoc($cart_result))
        {
            print_r($cartrow);
            echo "<br>";
            $pid=$cartrow['pid'];
            $status=mysqli_query($conn,"UPDATE product SET name='$name',price='$price',details='$details',impath='$impath' where pid=$pid");
            if($status)
        {
            echo "Product Uploaded successfully";
            header('location:edit1.php');
        }
        else
        {
        echo "Error in SQL Syntax";
        echo mysqli_error($conn);
    }
}




?>


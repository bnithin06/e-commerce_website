<?php

$cartid=$_GET['cartid'];

include_once "../shared/connection.php";

$status=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($status)
{
    echo "Cart removed successfully!";
    header("location:viewcart.php");
}
else
{
    echo "Error in Sql Syntax";
}


?>
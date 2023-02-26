<?php

$oid=$_GET['oid'];

include_once "../shared/connection.php";

$status=mysqli_query($conn,"delete from orders where oid=$oid");
if($status)
{
    echo "Cart removed successfully!";
    header("location:vieworders.php");
}
else
{
    echo "Error in Sql Syntax";
}


?>
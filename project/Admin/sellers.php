<?php
include "menu.html";

include_once "../shared/connection.php";

$sql_result=mysqli_query($conn,"select * from sellers");

while($row=mysqli_fetch_assoc($sql_result))
{
    
    $pid=$row["pid"];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];

    $impath=$row['impath'];

    echo "<div class='card'>
        <span>$pid</span>
        <div class='title'>$name </div>
        <div class='price'>₹$price<span style='color:green'> 50%off</span></div>
        <img src='$impath'>
        <p>$details</p>
        <a href='deleteproduct.php?pid=$pid'>
        <button class='br'>Delete</button>
        </a>
        <a href='edit.php'?pid=$pid'>
        <button class='bt'>Edit</button>
        </a>
    
    </div>";
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .card
    {

        width:320px;
        height:70%;
        display:inline-block;
        border:2px solid grey;
        margin:10px;
        padding:5px;
        background-color:whitesmoke;
    }
    .card img
    {
        width:90%;
        height:90%;
    }
    .price
    {
        font-size:24px;
        color:brown;
    }
    .title
    {
        font-size:28px;
        color:black;
        font-family:calibri;
        text-transform:uppercase;
        background-color:black;
        color:white;
        padding:6px 18px;
        border-radius:5px;
        font-size:17px;
        border: 0ch solid  #04AA6D;
    }
    .bg{
        background-color:black;
    }
    .bt{
                background-color:blue;
                color:white;
                padding:6px 18px;
                border-radius:5px;
                font-size:17px;
                font-family: calibri;
                border: 0ch solid  #04AA6D;
    }
    .br{
                background-color:red;
                color:white;
                padding:6px 18px;
                border-radius:5px;
                font-size:17px;
                font-family: calibri;
                border: 0ch solid  #04AA6D;

    }
</style>

</head>
<body>
    
</body>
</html>
<?php
include "menu.html";

include_once "../shared/connection.php";

$sql_result=mysqli_query($conn,"select * from product");

while($row=mysqli_fetch_assoc($sql_result))
{
    
    $pid=$row["pid"];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];

    $impath=$row['impath'];


    echo "<div class='card'>
        <div class='title'>$name </div>
        <div class='price'>₹$price<span style='color:green'> 50%off</span></div>
        <img src='$impath'>
        <p>$details</p>
        <a href='deleteproduct.php?pid=$pid'>
        <button class='br'>Delete</button>
        </a>
        <a href='edit1.php?pid=$pid'>
        <button class='bt'>Edit</button>
        </a>
    
    </div>";
    
}

?>
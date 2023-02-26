<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .card
    {

        width:320px;
        height:70%;
        display:inline-block;
        border:1px solid black;
        border-radius:5px;
        margin:10px;
        padding:7px;
    }
    .card img
    {
        width:90%;
        height:90%;
    }
    .price
    {
        font-size:17px;
        color:brown;
    }
    .title
    {
        font-size:28px;
        color:black;
        font-family:calibri;
        text-transform:uppercase;
        background-color:whitesmoke;
        color:black;
        padding:3px 7px;
        border-radius:5px;
        font-size:17px;
        border: 0ch solid  #04AA6D;
    }
    .bt{
                background-color:blue;
                color:white;
                padding:3px 7px;
                border-radius:5px;
                font-size:17px;
                font-family: calibri;
                border: 0px solid black;
    }
    .bp{
                background-color:#04AA6D;
                color:white;
                padding:3px 7px;
                border-radius:5px;
                font-size:17px;
                position:relative;
                text-align:right;
                font-family: calibri;
                border: 0ch solid  #04AA6D;
    }
</style>

</head>
<body class="bg">
    
</body>
</html>
<?php
include "menu.html";

session_start();
$userid=$_SESSION['userid'];
// echo "User id=$userid";

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
        <div class='title'>$name</div>
        <div class='price'>₹$price <span style='color:green'>55%off</span></div>
        <img src='$impath'>
        <a href='#?pid=$pid'><p>$details</p></a>
        <a href='addcart.php?pid=$pid'>
            <button class='bt'>Addtocart</button>
        </a>
        <a href='order.php?pid=$pid'>
            <button class='bp'>Buynow >></button>
        </a>
        
        
    
    </div>";
    
}

?>
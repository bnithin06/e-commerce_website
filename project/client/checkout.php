<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .card
    {
        width:700px;
        border:2px solid grey;
        margin:10px;
        padding:5px;
    }
    .right{
        text-align:right;
    }
    .card img
    {
        width:200px;
        height:220px;
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
        background-color:whitesmoke;
    }
    .parent
    {
        display:flex;
        
        padding:5px;
        width:100%;        
    }
    .left-panel
    {
        width:85%;
        
    }
    .right-panel
    {
        background-color:aqua;
        width:100px;
    }
</style>

</head>
<body>
    
</body>
</html>

<?php


include_once "../shared/connection.php";
include "menu.html";

session_start();
$userid=$_SESSION['userid'];

$sql_result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where userid=$userid");

$total=0;
echo "<div class='parent'>";

echo "<div class='left-panel'>";
while($row=mysqli_fetch_assoc($sql_result))
{
    
    $cartid=$row['cartid'];
    $pid=$row["pid"];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];

    $total=$total+$price;

    $impath=$row['impath'];

    echo "<div class='card'>
        <div class='title'>$name</div>
        <div>$price</div>

        <div class='right'><img src='$impath'></div>
        
        
    
    </div>";
    
}

echo "</div>";


echo "<div class='right-panel'>
    <div>Total : $total</div>
    <div> <br><br>
    
        <button>Checkout</button>

    </div>
</div>";


echo "</div>";


?>
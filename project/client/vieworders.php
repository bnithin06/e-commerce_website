<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .card
    {

        width:700px;
        display:flex;
        border:0px solid grey;
        margin:10px;
        padding:5px;
    }
    .card img
    {
        width:250px;
        height:199px;
    }
    .price
    {
        font-size:17px;
        color:brown;
        border: 0ch solid  #04AA6D;
    }
    .title
    {
        font-size:28px;
        color:black;
        font-family:calibri;
        text-transform:uppercase;
        padding:6px 18px;
        border-radius:5px;
        font-size:17px;
        border: 0ch solid  #04AA6D;
    }
    .parent
    {
        
        padding:5px;
        width:90%;
        display:flex; 
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
    .empty{
        font-family:calibri;
        text-align:center;
        font-size:27px;
    }
    .br{
                background-color:black;
                color:white;
                border-radius:5px;
                font-size:15px;
                padding: 2px 8px;
                font-family: calibri;
                border: 0ch solid  #04AA6D;
    }
    .price1{
        display:flex;
        flex-direction:column;
    }
    .np{
        text-align:center;
        top:250px;
        }
        .text{
            font-family:calibri;
            font-size:17px;
            color:green;
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


$sql_result=mysqli_query($conn,"select * from orders join product on orders.pid=product.pid where userid=$userid");
$row_count=mysqli_num_rows($sql_result);
if($row_count==0){
    echo "<div class='empty'>
    No Orders!<br><br><br>
    </div>";
}

else{
    $total=0;
echo "<div class='parent'>";

echo "<div class='left-panel'>";
while($row=mysqli_fetch_assoc($sql_result))
{
    
    $oid=$row['oid'];
    $pid=$row["pid"];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];

    $total=$total+$price;

    $impath=$row['impath'];

    echo "<div class='card'>
    <img src='$impath'><br>
    <h1>  .</h1>
        <div class='price1'>
        <a href='trackorder.php?oid=$oid'>
        <P class='text'>Expected delivery on 23 Feb,Friday !!</p>
        </a>
        <div class='title'>$name</div><br>
        <p>$details</p>
        <div class='price'>₹$price<span style='color:green'> 60%off</span></div><br>
        <a href='ordercancel.php?oid=$oid'>
            <button class='br'>Cancel</button>
        </a>
        </div>
        
    
    </div>";
    
}
}


?>
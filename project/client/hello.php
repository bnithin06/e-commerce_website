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
        width:300px;
        height:300px;
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
                border-radius:5px;
                font-size:15px;
                font-family: calibri;
                border: 0ch solid  #04AA6D;
    }
    .bp{
                background-color:blue;
                color:white;
                padding: 5px; 7px;
                padding-left:5px;
                border-radius:5px;
                font-size:17px;
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
$row_count=mysqli_num_rows($sql_result);
if($row_count==0){
    echo "<div class='empty'>
    <img src='../shared/images/ebuybdlogo.png';></img><br>
    Your cart is empty!<br><br><br>
    <a href='view.php'>
            <button class='bt'>Shop now</button>
        </a>
    </div>";
}

else{
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
        <img src='$impath'>
        <div class='price1'>
        <div class='title'>$name</div><br>
        <div>$details</div>
        <div class='price'>₹$price<span style='color:green'>  45%off</span></div><br>
        <a href='deletecart.php?cartid=$cartid'>
            <button class='br'>Remove</button>
        </a>
        </div>




        <!DOCTYPE html>
<html lang=en>
    <head>
        <Style>
            .main{
                width:70%;
                text-align:center;
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
        </Style>
</head>

    <body class='main>
    <form action='placeorder.php' method='post'>
    <h4>continue to place order..</h4>


    <div class=>
            <input type='text' name='username' id='username' placeholder='username'><br>
        </div>
        <div>
            <input type='email' name='email' id='email' placeholder='email'><br>
        </div>
        <div>
            <input type='text' name='mobile' id='mobile' placeholder='mobileno'><br>
        </div>
        <div>
            <textarea type='text' name='address' id='address'required cols='20' rows='5' placeholder='Address'></textarea>
        </div>
    <button class='bt'  type='submit'>PlaceOrder</button>
</form>
</body>
    </html>
        
    
    </div>";
    
}

echo "</div>";


echo "<div class='np'><br><br><r><br>
    <div>Total : $total</div><br>
    <div>
    <a href='order.php'>
            <button class='bp'>proced to place order</button>
        </a>
        
</div>";


echo "</div>";
}


?>
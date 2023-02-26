<?php
include_once "../shared/connection.php";

echo "<div class='empty'>
    <img  class='img'src='../shared/images/order.jpg';></img><br><br><br>
    Order Sucessfully Placed 🥳🤩!<br><br><br>
    <a href='view.php'>
            <button class='bt'>Back</button>
        </a>
    </div>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>

.empty{
        font-family:calibri;
        text-align:center;
        font-size:27px;
        color:green;
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
    .img{
        width:200px;
        height:200px;
    }
        </style>
</head>
<body>
</body>
</html>

<?php
    include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        input,textarea
        {
            display: block;
            margin:10px;
        }
        .bt{
                background-color:green;
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
    
    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <input type="text" placeholder="Product Name" name="name">
        <input type="text" placeholder="Product price" name="price">
        <textarea placeholder="Description" name="details" id="" cols="20" rows="5"></textarea>

        <input type="file" name="pdtimg">

        <input  class="bt" type="submit" value="Upload">

    </form>

</body>
</html>
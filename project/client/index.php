<?php
include "menu.html";

$url = '../shared/images/Samsung.png';

?>

<html lang="en">
<head>
<style>
.body
    {
        background-image:url('<?php echo $url ?>');
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-size: cover;

}
.p{
    font-size:17px;
    color:whitesmoke;
    font-family:Courier;
    padding:7px;
}
.bt{
                background-color:orange;
                color:black;
                position:relative;
                left:70px;
                top:100px;
                padding:6px 11px;
                border-radius:5px;
                font-size:27px;
                font-family: calibri;
                border: 0px solid black;
}
</style>

</head>

<body class="body">
    <div class="p">
        <h1>" DEALS THAT  MAKE YOUR HEART BEAT FASTER "<h1>
        <h1> "" SALE IS LIVE ""<h1>
</div>
<a href="view.php">
<button class="bt">Shop now >></button></a>


</body>
</html>
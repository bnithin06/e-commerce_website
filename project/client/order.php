<?php


include_once "../shared/connection.php";
session_start();
$userid=$_SESSION['userid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body style="background-color:darkblue;">
<main>
    <form action="placeorder.php" method="post">
        <h1 style="font-family:emoji">Continue to Place order..</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="username" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="email"required>
        </div>
        <div>
            <label for="mobile">mobile:</label>
            <input type="text" name="mobile" id="mobile"required minlength="5" placeholder="mobile">
        </div>
        <div>
            <label for="password"> Address:</label>
            <textarea type="text" name="address" id="address" cols="20" rows="5" placeholder="Address"></textarea>
        </div>
        <a href="oredersucess.php"><button style="background-color:green" type="submit">PlaceOrder</button></a>
    </form>
</main>
</body>
</html>
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body style="background-color:darkblue">
<main>
    <form action="login.php" method="post">
        <h1 style="font-family:emoji">E-Shoping Signin</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="password" required minlength="5">
        </div>

        <button type="submit">Login</button>
        <footer>New user ? <a href="reg.php">Register here</a></footer>
    </form>
</main>
</body>
</html>
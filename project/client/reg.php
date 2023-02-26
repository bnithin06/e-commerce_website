<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body style="background-color:darkblue;">
<main>
    <form action="register.php" method="post">
        <h1 style="font-family:emoji">E-Shoping Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"required minlength="5">
        </div>
        <div>
            <label for="password"> Retype-Password:</label>
            <input type="password" name="password" id="password1">
        </div>

        <button type="submit">Register</button>
        <footer>Already a member? <a href="log.php">Login here</a></footer>
    </form>
</main>
</body>
</html>
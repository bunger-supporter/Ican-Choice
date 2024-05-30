<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>
    <br>

    <form method="POST" action="checklogin.php">
        <h1>Login</h1>
        <h2>Username</h2>
        <br>
        <input name = "usernm" maxlength = "20">
        <br>
        <h2>Password</h2>
        <br>
        <input type = "password" name = "passwrd" maxlength = "20">
        <br>
        <br>
        <input type = "submit">
    </form>
    <br>
    <br>
    <a href = "signup.php">Don't have an account?</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonic Underground uwu</title>
</head>
<body>
    <br>

    <form method="POST" action="information.php">
        <h1> Form </h1>
        <h2> Which of the Sonic Underground main characters is your favorite? </h2>
        <br>
        <input type = "radio" name = "character" value = "Sonic"> Sonic
        <input type = "radio" name = "character" value = "Sonia"> Sonia
        <input type = "radio" name = "character" value = "Manic"> Manic
        <br>
        <h2> Why? </h2>
        <br>
        <textarea rows="5" cols="40" maxlength = "260" name = "reason"></textarea>
        <br>
        <p> Do you want to share your name on the survey information? </p>
        <input type = "checkbox" name = "visible">
        <br>
        <br>
        <input type = "text" name = "user" maxlength = "30">
        <br>
        <br>
        <input type = "submit">
    </form>
    <br>
    <br>
    <a href = "everyone.php">Check results</a>
</body>
</html>
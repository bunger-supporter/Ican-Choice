<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonic Underground uwu</title>
</head>
<body>
    <br>

    <form method="POST" action="processpoll.php">
        <h1> Form </h1>
        <br>
        <h2> What do you think of Sonic Underground? </h2>
        <textarea rows="5" cols="40" maxlength = "260" name = "opinion"></textarea>
        <br>
        <br>
        <h2> How many times have you seen it? </h2>
        <input type = "number" step = "1" name = "times">
        <br>
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
        <br>
        <h2> If you got one of the triplet's abilities, which would you pick? </h2>
        <br>
        <input type = "radio" name = "powr" value = "Sonic"> Sonic
        <input type = "radio" name = "powr" value = "Sonia"> Sonia
        <input type = "radio" name = "powr" value = "Manic"> Manic
        <br>
        <br>
        <p> Do you want to share your name on the survey information?   
        <input type = "checkbox" name = "visible" id = "anon"> </p>
        <input type = "submit">
    </form>
    <br>
    <br>
    <?php
        session_start();
        $names = $_SESSION['username'];
        if ($names == "berg_ultimate_admin") {
            echo "<a href = 'secretquestionnaireresults.php'>Check results</a>";
        }
        else{
            echo "<a href = 'questionnaireresults.php'>Check results</a>";
        }
    ?>
    
</body>
</html>
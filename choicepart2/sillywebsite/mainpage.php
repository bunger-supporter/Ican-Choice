<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN PAGE</title>
</head>
<body>
    <?php
    session_start();
    echo "hello ", $_SESSION['username'], ".";
    ?>
    <h1> Sonic am i right? </h1>
    <p> So basically what if there was a website for sonic underground? That's it that's the idea. We got like two quizzes, the most basic information, and nothing else. </p>

    <h2><a href = "basicinfo.html"> What is Sonic underground? </a></h2>
    <h2><a href = "pollquestionnaire/questionnaire.php"> Opinions on the show </a></h2>
    <h2> Which character are you quiz </h2>
</body>
</html>
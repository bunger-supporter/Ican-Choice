<?php

    $dsn = "mysql:host=localhost;dbname=choice2_database";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);


    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["character"]) && !empty(htmlspecialchars($_POST["reason"])) && !empty(htmlspecialchars($_POST["opinion"])) && !empty(htmlspecialchars($_POST["times"])) && !empty(htmlspecialchars($_POST["powr"]))) {
        session_start();
        $names = $_SESSION['username'];
        $likeitorhateit = $_POST["opinion"];
        $count = $_POST["times"];
        $fav = $_POST["character"];
        $why = $_POST["reason"];
        $strength = $_POST["powr"];
        
        if (!empty($_POST["visible"])){
            $real = 1;
        }
        else{
            $real = 0;
        }
        
        // user, opinion, amount, favorite, reason, powers, anonstatus
        $query = "INSERT INTO poll (user, opinion, amount, favorite, reason, powers, anonstatus) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$names,$likeitorhateit,$count,$fav,$why,$strength,$real]);
        $pdo = null;
        $stmt = null;

        header("Location: questionnaire.php");
    }
    else {
        header("Location: questionnaire.php");
    }  
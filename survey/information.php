<?php

    $dsn = "mysql:host=localhost;dbname=first_form_database";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);


    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["character"]) && !empty(htmlspecialchars($_POST["reason"]))) {
        $fav = $_POST["character"];
        $why = $_POST["reason"];
        echo $fav;
        echo $why;
        
        if (!empty($_POST["visible"])){
            $real = $_POST["visible"];
            $names = $_POST["user"];
            echo $real;
            echo $names;
        }
        else{
            $real = "";
            $names = "";
            echo $real;
            echo $names;
        }
        
        $query = "INSERT INTO poll (favorite, explanation, anonymous, username) VALUES (?, ?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$fav,$why,$real,$names]);
        $pdo = null;
        $stmt = null;

        header("Location: input.php");
    }
    else {
        header("Location: input.php");
    }
    # 0 = false, 1 = true
<?php
    
    $dsn = "mysql:host=localhost;dbname=choice2_database";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty(htmlspecialchars($_POST["usernm"])) && !empty(htmlspecialchars($_POST["passwrd"]))) {
        $use = htmlspecialchars($_POST["usernm"]);
        $pass = htmlspecialchars($_POST["passwrd"]);

        $queue = "SELECT * FROM accounts;";
            $statement = $pdo->prepare($queue);
            $statement->execute();

            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            $worked = False;
            foreach ($results as $row) {
                if ($row["username"] == $use && $row["password"] == $pass){
                    header("Location: mainpage.php");
                    $worked = True;
                }
            }
            if ($worked == False){
                header("Location: login.php");
            }
    }
    else {
        header("Location: login.php");
    }
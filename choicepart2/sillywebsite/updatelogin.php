<?php
    
    $dsn = "mysql:host=localhost;dbname=choice2_database";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty(htmlspecialchars($_POST["user"])) && !empty(htmlspecialchars($_POST["pass"]))) {
        $usernm = htmlspecialchars($_POST["user"]);
        $passwrd = htmlspecialchars($_POST["pass"]);

        $queue = "SELECT * FROM accounts;";
        $statement = $pdo->prepare($queue);
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        $worked = False;
        foreach ($results as $row) {
            if ($row["username"] == $usernm){
                header("Location: signup.php");
                $worked = True;
            }
        }
        if ($worked == False){
            $query = "INSERT INTO accounts (username, password) VALUES (?, ?);";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$usernm, $passwrd]);
            $pdo = null;
            $stmt = null;
            

            header("Location: mainpage.php");
        }
    }
    else {
        header("Location: signup.php");
    }
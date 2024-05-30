<?php
    
    $dsn = "mysql:host=localhost;dbname=choice2_database";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $row = $_POST["userinfo"];
        

        $query = "DELETE FROM poll WHERE user = '$row';";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $pdo = null;
        $stmt = null;

        header("Location: secretquestionnaireresults.php");
    }
    else {
        header("Location: secretquestionnaireresults.php");
    }
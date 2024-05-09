<?php
    
    $dsn = "mysql:host=localhost;dbname=first_form_database";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $row = $_POST["idvalue"];
        

        $query = "DELETE FROM poll WHERE id = $row;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $pdo = null;
        $stmt = null;

        header("Location: everyone.php");
    }
    else {
        header("Location: everyone.php");
    }
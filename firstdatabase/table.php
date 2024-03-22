<!DOCTYPE html>
<html lang="en">

<!-- for basic stuff that needs to be set up -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salaries</title>
        <?php
            $dsn = "mysql:host=localhost;dbname=first_form_database";
            $dbusername = "root";
            $dbpassword = "";

            $pdo = new PDO($dsn, $dbusername, $dbpassword);
        ?>
    </head>
<!-- main elements / code -->
    <body>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p> Name </p>
        <input type="text" name="personname">
        <p> Salary </p>
        <input type="text" name="money">
        <input type="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty(htmlspecialchars($_POST["personname"])) && !empty(htmlspecialchars($_POST["money"]))) {
                $pers = htmlspecialchars($_POST["personname"]);
                $salar = htmlspecialchars($_POST["money"]);
                $query = "INSERT INTO salaries (name, dollars) VALUES ($pers,$salar);";
            }
        ?>
        <table border = "1">
            <tr> <th>Name</th> <th> Salary </th> </tr>

        </table>
    </body>
</html>
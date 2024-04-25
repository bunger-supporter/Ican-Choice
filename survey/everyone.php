<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Who's got the bad opinions...</title>
        <?php
            $dsn = "mysql:host=localhost;dbname=first_form_database";
            $dbusername = "root";
            $dbpassword = "";

            $pdo = new PDO($dsn, $dbusername, $dbpassword);
        ?>
    </head>
    <body>
    <table border="1">
        <tr>
        <th>Name (if applicable)</th>
        <th>Favorite</th>
        <th>Reason why</th>
        <th>Delete</th>
        </tr>
        <?php

            $queue = "SELECT * FROM poll;";
            $statement = $pdo->prepare($queue);
            $statement->execute();

            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            if (empty($results)) {

            }
            else {
                foreach ($results as $row) {
                    echo "<tr><th>";
                    echo htmlspecialchars($row["username"]);
                    echo "</th><th>";
                    echo htmlspecialchars($row["favorite"]);
                    echo "</th><th>";
                    echo htmlspecialchars($row["explanation"]);
                    echo "</th><th>";
                    echo "<button type = 'submit'>";
                    echo "</th></tr>";
                }
            }
        ?>
        </table>
    </body>
</html>
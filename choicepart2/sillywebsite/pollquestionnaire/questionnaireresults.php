<!DOCTYPE html>
<html lang="en">
<style>
        #man {
            background-color: #5dcc29;
        }
        #sonic {
            background-color: #3d9ffa;
        }
        #sonia {
            background-color: #ff36a5;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who's got the bad opinions...</title>
    <?php
            $dsn = "mysql:host=localhost;dbname=choice2_database";
            $dbusername = "root";
            $dbpassword = "";

            $pdo = new PDO($dsn, $dbusername, $dbpassword);
        ?>
</head>
<body>
    <table border="1">
        <tr>
        <th>Name (if applicable)</th>
        <th>Opinion</th>
        <th>Viewings</th>
        <th>Favorite</th>
        <th>Reason why</th>
        <th>Powers</th>
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
                    if ($row["favorite"] == "Manic"){
                        echo "<tr id = 'man'>";
                    }
                    elseif ($row["favorite"] == "Sonic"){
                        echo "<tr id = 'sonic'>";
                    }
                    else{
                        echo "<tr id = 'sonia'>";
                    }
                    $name = htmlspecialchars($row["user"]);
                    echo "<th>";
                    if ($row["anonstatus"] == 1){
                        echo htmlspecialchars($row["user"]);
                    }
                    echo "</th><th>";
                    echo htmlspecialchars($row["opinion"]);
                    echo "</th><th>";
                    echo htmlspecialchars($row["amount"]);
                    echo "</th><th>";
                    echo htmlspecialchars($row["favorite"]);
                    echo "</th><th>";
                    echo htmlspecialchars($row["reason"]);
                    echo "</th><th>";
                    echo htmlspecialchars($row["powers"]);
                    echo "</th></tr>";
                }
            }
        ?>
        </table>
        <br>
    </body>
</html>
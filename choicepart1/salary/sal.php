<!-- comments work the same as html ig
--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p> Name </p>
    <input type="text" name="personname">
    <p> Salary </p>
    <input type="text" name="money">
    <input type="submit">
    </form>

    <table border="1">
    <tr>
        <th>Name</th>
        <th>Salary</th>
    </tr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty(htmlspecialchars($_POST["personname"])) && !empty(htmlspecialchars($_POST["money"]))) {
            $pers = htmlspecialchars($_POST["personname"]);
            $salar = htmlspecialchars($_POST["money"]);
            echo "<tr>";
            echo "<td>";
            echo $pers;
            echo "</td>";
            echo "<td>";
            echo $salar;
            echo "</td>";
            echo "</tr>";
        }
    ?>
    </table>
    
</body>
</html>
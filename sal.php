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
    <?php
        //if (isset($_POST['Register'])) {
            $pers = htmlspecialchars($_POST["personname"]);
            //$namearray = array();
            //array_push($namearray, $pers);
            $salar = htmlspecialchars($_POST["money"]);
            //$salarray = array();
            //array_push($salarray, $pers);
            //for ($x = 0; $x <= 10; $x++) {
            echo $pers;
            echo ":  ";
            echo $salar;
            echo "<br>";
           // }
        //}
    ?>
    
</body>
</html>
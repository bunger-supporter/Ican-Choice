<?php
$persons = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $persons[] = ['name' => $name, 'salary' => $salary];
}
?>

<form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary"><br><br>
    <input type="submit" value="Submit">
</form>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Salary</th>
    </tr>
    <?php foreach ($persons as $person) : ?>
        <tr>
            <td><?php echo $person['name']; ?></td>
            <td><?php echo $person['salary']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
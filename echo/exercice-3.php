<?php
$animals = ["Chat", "Chien", "Souris", "Lama"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Exercice 3 echo</title>
    <ul>
        <?php
        foreach ($animals as $animal) {
            echo "<li>$animal</li>";
        }
        ?>
    </ul>
</head>

<body>

</body>

</html>
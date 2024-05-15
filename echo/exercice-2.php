<?php
$number1 = 42;
$number2 = 33;
$numbers = [
    $number1, $number2
]
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Exercice 2 echo</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            echo "<p class='red'>$number</p>";
        } else {
            echo "<p class='blue'>$number</p>";
        }
    }
    ?>

</body>

</html>
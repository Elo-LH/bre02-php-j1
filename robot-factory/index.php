<?php
function generateName()
{
    return (chr(rand(65, 90)) . chr(rand(65, 90)) . "-" . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9));
}
$name = generateName();

date_default_timezone_set("Europe/Paris");

function pickNumber()
{
    $nb = rand(1, 10);
    if ($nb % 2 === 0) {
        return ("J'ai choisi le nombre $nb. C'est un nombre pair.");
    } else {
        return ("J'ai choisi le nombre $nb. C'est un nombre impair.");
    }
}

function randomPhrase()
{
    $proba = rand(1, 3);
    if ($proba === 1) {
        return 'Tu veux un cookie ?';
    } else {
        return "Voulez-vous une boisson chaude ?";
    }
}

function Fibonacci($n)
{

    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter < $n) {
        echo '<br> ' . $num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Factory</title>
</head>

<body>
    <h1>Salut, humain. Je suis <?= $name ?>.</h1>
    <p>Nous sommes le <?php echo date("d/m/Y") ?>, il est <?php echo date("H:i:s") ?> .</p>
    <p><?= pickNumber() ?></p>
    <p>Mon nom à l'envers s'écrit <?= strrev($name) ?>. Ah. Ah. Ah.</p>
    <p><?= randomPhrase() ?></p>
    <?= fibonacci(100) ?>

</body>

</html>
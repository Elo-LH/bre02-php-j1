<?php
$students = [
    [
        "firstName" => "Alex",
        "lastName" => "Fields",
        "grades" => [12, 11, 15],

    ],
    [
        "firstName" => "Lola",
        "lastName" => "Stein",
        "grades" => [18, 12, 13],
        "average" => -1
    ],
    [
        "firstName" => "Judith",
        "lastName" => "Hartoff",
        "grades" => [9, 11, 10],

    ],
    [
        "firstName" => "Elizabeth",
        "lastName" => "Nestle",
        "grades" => [9, 8, 5],

    ],
    [
        "firstName" => "Marie",
        "lastName" => "Brent",
        "grades" => [18, 15, 16],

    ]
];

function average(array $numbers): float
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    $total = count($numbers);
    return (ceil($sum / $total));
};

function colorAverage(int $average): string
{
    if ($average > 13) {
        return 'green';
    } else if ($average < 10) {
        return 'red';
    } else {
        return 'orange';
    };
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php foreach ($students as $student) {
        $student['average'] = average($student['grades']);
        $color = colorAverage($student['average']);
    ?>
        <article class="<?= $color ?>">
            <header>
                <h1><?php echo "$student[firstName] $student[lastName]"; ?></h1>
            </header>
            <section>
                <h2>Grades : </h2>
                <ul>

                    <li><?= $student['grades'][0] ?></li>
                    <li><?= $student['grades'][1] ?></li>
                    <li><?= $student['grades'][2] ?></li>
                </ul>
            </section>
            <footer>
                <h3>Average : <?= $student['average'];
                                ?> </h3>
            </footer>
        </article>
    <?php }
    ?>

</body>

</html>
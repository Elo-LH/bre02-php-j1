
<?php
function average(array $numbers): float
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    $total = count($numbers);
    return ($sum / $total);
};
echo average([12, 15, 18, 9]);
echo "<br>";
echo average([12, 15, 18, 11, 14]);

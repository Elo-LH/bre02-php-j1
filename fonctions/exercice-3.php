<?php
function isOdd(int $nb): bool
{
    if ($nb % 2 === 0) {
        echo "even ";
        return false;
    } else {
        echo "odd ";
        return true;
    };
};
echo isOdd(12) . "<br>"; // doit afficher 1 ou true
echo isOdd(29) . "<br>"; // doit afficher 0 ou false
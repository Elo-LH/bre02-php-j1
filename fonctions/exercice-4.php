<?php
function getFirst(array $array): ?int
{
    if (count($array) === 0) {
        return null;
    } else {
        return ($array[0]);
    }
};
echo getFirst([13, 24, 45]) . "<br>"; // doit afficher 13
echo getFirst([]) . "<br>"; // doit afficher null

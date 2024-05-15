<?php
$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];
foreach ($users as $user) {
    echo "Bonjour $user[firstName] $user[lastName] !";
    echo "<br>";
};

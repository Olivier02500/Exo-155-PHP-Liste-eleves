<?php

$students = [
    [0=> ['Olivier','Peuchet', '24 ans', 'Aubenton',
        'passions' => ['jeux','animé'],]
    ],

    [1=> ['Buchet','Jonathan', '30 ans', 'Couvin',
        'passions' => ['cinéma','la biére'],]
    ],

    [2=> ['hassaini', 'Hocine', '19 ans', 'Fourmies',
        'passions' => ['jeux-vidéo','série'],]
    ],

    [3=> ['Michel', 'Jean', '22 ans', 'Random-city',
        'passions' => ['marché', 'télè']]
    ]
];

foreach ($students as $key => $value) {

    $name = print_r($value[$key][0]);
    $info = print_r($value[$key][1]);
    echo  "<p> $name</p>";

    echo '<span><a href="page.php?key=$key">Infos supplémentaires</a></span>';
}

//bug d'affichage je c'est pas le régler
<?php

$frutas=[
    'Laranja',
    'Banana',
    'abacate',
];

$frutas[] = 'Maça';

$frutas[10] = 'Melancia';

$frutas[7]= 'Genipapo';

$frutas[] = 'Pera'; 

var_dump($frutas);


echo "<ul>";
foreach($frutas as $l_frutas) {
    echo "<li>{$l_frutas}</li>";
    
}
echo "</ul>";
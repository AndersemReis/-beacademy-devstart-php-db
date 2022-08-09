<?php

$x = 1900;
$nasc = 1950;
while ($x < 2022){
    if ($x == $nasc) {
        echo "Você nasceu no ano de: " . $x;
        echo  "<br>";
    }
    $x++;
}
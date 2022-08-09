<?php

$bandas=[
    ['Dream theater', 1],
    ['Neo pi', 2],
    ['ExaltaSamba',3],
];

echo '<table border = "1">';
echo "<th>Bandas</th>";
echo "<th>QT Músicas</th>";

foreach($bandas as $cadaBanda) {
    echo "<tr>";
    echo "<td>{$cadaBanda[0]}</td>";
    echo "<td>{$cadaBanda[1]}</td>";
    echo "</tr>";
}

echo "</table>";
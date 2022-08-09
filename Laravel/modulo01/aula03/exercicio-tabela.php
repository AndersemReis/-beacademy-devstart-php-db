<?php

$linha = 2;
$li = 0;
$nome = ["Andersem", "Vanessa", "Raquel"];
$email = ["andersem@gmail.com", "vanessa@gmail.com", "raquel@gmail.com"];
$cidade = ["Manaus", "Rio preto","Tocantins"];


echo '<table border="1">';
echo '<tr>';
echo "<th>Nome</th>";
echo "<th>Email</th>";
echo "<th>Cidade</th>";
echo "</tr>";
while ($li <= $linha){
    echo "<tr>";
    echo "<td>$nome[$li]</td>";
    echo "<td>$email[$li]</td>";
    echo "<td>$cidade[$li]</td>";
    echo "</tr>";
    $li++;
 
}

echo "</table>";

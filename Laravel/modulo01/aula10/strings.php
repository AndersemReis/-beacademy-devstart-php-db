<?php

$nome = 'alessandro';
$sobrenome = 'FEITOZA';

$nome2 = 'andersem';

$sobrenome = strtolower($sobrenome);
$nome = strtoupper($nome);
$nome2 = ucfirst($nome2);

echo $nome .PHP_EOL;
echo $nome2.PHP_EOL;
echo $sobrenome.PHP_EOL;

echo strtoupper($sobrenome);
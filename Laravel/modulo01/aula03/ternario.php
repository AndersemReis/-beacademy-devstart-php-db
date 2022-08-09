<?php

$idade = 17;
//$nome = "teste";
echo $idade >= 18 ? "Maior de idade" : "Menor de idade";
echo '<br>';
echo isset($nome) ? $nome: 'nome nao definido';
echo '<br>';
echo $nome ?? 'nome nao definido';
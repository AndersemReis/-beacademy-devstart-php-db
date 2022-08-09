<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$p1 = new Professor();

$p1 -> nome = 'alessandro';
$p1 -> cpf = '12312312388';
$p1 -> salario = 1000;


var_dump($p1);
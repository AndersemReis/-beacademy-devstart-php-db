<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';


$a1 = new Aluno();
$a1 -> nome = 'andersem';
$a1 -> cpf = '123.123.123-88';

$cursoPhp = new Curso();
$cursoPhp -> nome = 'Introduçao so PHP';
$cursophp -> cargaHoraria = 88;
$cursoPhp -> descricao = "aprendendo o basico e intermediario de PHP";

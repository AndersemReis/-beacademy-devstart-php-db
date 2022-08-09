<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '12345678911';
$cpf1 = '12345678911112';
$br = new ValidarBR();
$us = new ValidarUS();
$br->validarDocumento($cpf);
$us-> validarDocumento($cpf1);

var_dump($us);
var_dump($br);
<?php

include 'Usuario.php';
include 'Cliente.php';
//include 'ClienteVip.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquim@gmail.com','123456');
$g1 = new Gestor('zezim@gmail.com','123123',6000);

$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2019');

$g1->setNome('Zezim');
$gg1 = new GestorGeral('pedim@gmail.com','123456789',9000);
$gg1->setNome('pedrim');

//$clienteVip = new ClientVip('clientevip@gmail.com', '123456');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
//var_dump($clienteVip);
<?php

$mes = 13;

echo match ($mes){
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro',
    default => "Mês invalido"
};
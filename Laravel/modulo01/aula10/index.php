<?php

$notasCursoB = [
    10,
    5,
    6,
    9.5
];

$notasCursoC = [
    9,
    8,
    6.5,
    9
];

function mediaDeNotas(array $notas):float
{
    //$total = array_sum($notas);
    //$quant = count($notas);
    /*foreach($notas as $cadaNota){
        $total += $notas;
        $quant++;*/
    //}
    return array_sum($total) / count($notas);

}

echo mediaDeNotas($notasCursoB).PHP_EOL;
echo mediaDeNotas($notasCursoC).PHP_EOL;

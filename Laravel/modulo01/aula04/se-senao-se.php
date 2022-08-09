<?php

$n = 0;

if ($n >0){
    echo "positivo";
} else{
    if($n < 0) {
        echo "é negativo";
    } else{
        echo "É nulo";
    }
}

echo "<br> Pronto, terminou!";
echo "<br>";
echo ($n <= 0 ? "Negativo" : "positivo");
echo "<br>";
echo ($n > 0 ? :"Negativo");
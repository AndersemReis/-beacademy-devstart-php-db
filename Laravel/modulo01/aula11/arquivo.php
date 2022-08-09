<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo,'alessandro'.PHP_EOL);
fwrite($arquivo,'bruno'.PHP_EOL);
fwrite($arquivo,'luiz'.PHP_EOL);

fclose($arquivo);
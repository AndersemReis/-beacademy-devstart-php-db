<?php

$url = $_SERVER['REQUEST_URI'];
include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';
 
echo match ($url){
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/'=> home(),

    default => naoEncontrada()
};

include 'telas/footer.php';
<?php

$url = explode('?', $_SERVER['REQUEST_URI']);
include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';
 
echo match ($url[0]){
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    '/'=> home(),

    default => naoEncontrada()
};

include 'telas/footer.php';
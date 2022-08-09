<?php

$url = $_SERVER['REQUEST_URI'];

echo match ($url){

    '/login' => '<h1>Pagina de login</h1>',
    '/cadastro' => '<h1>Pagina de cadastro</h1>',
    '/inicial' => '<h1>Pagina Inicial',
    '/'=> '<h1>Pagina raiz</h1>',
    default => '<h1>Pagina em construçao'
};

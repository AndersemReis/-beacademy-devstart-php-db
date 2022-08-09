<?php

function login(){
    include 'telas/login.php';
}

function cadastro(){
    if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $arquivo = fopen('modulo01\projeto\dados\contatos.csv','a+');

    fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
    fclose($arquivo);
    $mensagem =  'Pronto! Cadastro realizado';
    include 'telas/mensagem.php';
    }
    include 'telas/cadastro.php';
    
}

function home(){
    include 'telas/home.php';
}

function naoEncontrada(){
    include 'telas/404.php';
}

function listar(){
    $contatos = file('modulo01\projeto\dados\contatos.csv');
    include 'telas/listar.php';
}

function excluir(){
    $id = $_GET['id'];

    $contatos = file('modulo01\projeto\dados\contatos.csv');
    unset($contatos[$id]);
    unlink('modulo01\projeto\dados\contatos.csv');
    $arquivo = fopen('modulo01\projeto\dados\contatos.csv','a+');
    foreach ($contatos as $contato){
        fwrite($arquivo, $contato);
    }
    $mensagem = 'Contato Excluído';
    fclose($arquivo);
    include 'telas/mensagem.php';
}

function editar(){
    $id = $_GET['id'];
    $contatos = file('modulo01\projeto\dados\contatos.csv');
    

    if($_POST){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;
        unlink('modulo01\projeto\dados\contatos.csv');
        $arquivo = fopen('modulo01\projeto\dados\contatos.csv','a+');

        foreach ($contatos as $contato){
            fwrite($arquivo, $contato);
        }
        fclose($arquivo);
        $mensagem = 'Contato alterado!!';
        include 'telas/mensagem.php';
    }

    
    $dados = explode(';', $contatos[$id]);
    
    include 'telas/editar.php';


}
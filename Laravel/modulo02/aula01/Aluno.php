<?php

declare (strict_types=1);

class Aluno
{
    private  string $nome;
    private string $cpf;

    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome):void
    {
        $this->nome = $novoNome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function setCpf(string $novoCpf):void
    {
        $this->cpf = $novoCpf;
    }

}
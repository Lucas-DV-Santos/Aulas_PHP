<?php

class Pessoa{
    private string $nome = "Lucas";

    public function getNome(){
        return $this->nome;
    }
}

class Aluno extends Pessoa{
    public function apresentar(){
        echo 'Olá, meu nome é ' . $this->getNome();
    }
}


$aluno = new Aluno();
$aluno->apresentar();
?>
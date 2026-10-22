<?php

class Pessoa{
    protected string $nome = "Lucas";
}

class Aluno extends Pessoa{
    public function apresentar(){

        echo 'Olá, meu nome é ' . $this->nome;
    
    }
}


$aluno = new Aluno();
$aluno->apresentar();
?>
<?php

class Pessoa{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}

class aluno extends Pessoa{
    private string $curso;

    public function __construct($nome, $curso){
        parent::__construct($nome);
        $this->curso = $curso;
    }
    public function exibirDadosinformacoes(){
        echo 'Nome: ' . $this->nome .'<br>Curso:  '. $this->curso .'<br>';
    }
}


$aluno = new aluno('Lucas' , 'Matemática');
$aluno->exibirDadosinformacoes();
?>
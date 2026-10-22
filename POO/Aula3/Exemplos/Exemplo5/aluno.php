<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{

    private string $curso;

    public function __construct($nome, $idade, $curso){
        parent::__construct($nome, $idade);
        $this->curso = $curso;
    }
    public function ExibirInformacoes(){
        echo $this->ExibirNomeIdade() .'Curso: ' . $this->curso . '<br><br>';
    }
}



?>
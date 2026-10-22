<?php

require_once 'funcionario.php';

class Desenvolvedor extends funcionario{
    private string $linguagem_principal;

    public function __construct($nome, $salario, $linguagem_principal){
        parent::__construct($nome, $salario);
        $this->linguagem_principal = $linguagem_principal;
    }

    public function programar(){
        echo 'Programando...';
    }

    public function ApresentarDesenvolvedor(){
        echo 'Nome: ' . $this->nome . '<br>'
        . 'Salário: ' . $this->GetSalario() .'<br>'
        . 'Linguagem Principal: ' . $this->linguagem_principal .'<br>';
    }
}



?>
<?php

require_once 'funcionario.php';

class gerente extends funcionario{
    private string $departamento;

    public function __construct($nome, $salario, $departamento){
        parent::__construct($nome, $salario);
        $this->departamento = $departamento;
    }

    public function gerenciarEquipe(){
        echo 'Gerenciando...';
    }

    public function ApresentarGerente(){
        echo 'Nome: ' . $this->nome . '<br>' 
        . 'Salário: ' . $this->GetSalario() .'<br>'
        . 'Departamento: ' . $this->departamento .'<br>';
    }
}



?>
<?php

class funcionario{
    protected string $nome;
    private int $salario;

    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function GetSalario(){
        return $this->salario;
    }
}



?>
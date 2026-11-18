<?php

Abstract Class Funcionario{

    private string $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    abstract public function calcularSalario();
}

Class FuncionarioFixo extends Funcionario{

    public float $salarioMensal;

    public function __construct($nome, $salarioMensal)
    {
        parent::__construct($nome);
        $this->salarioMensal = $salarioMensal;
    }
    public function calcularSalario()
    {
        return $this->salarioMensal;
    }
}

Class FuncionarioHorista extends Funcionario{

    public float $ValorHora;
    public int $horas;

    public function __construct($nome, $ValorHora, $horas)
    {
        parent::__construct($nome);
        $this->ValorHora = $ValorHora;
        $this->horas = $horas;
    }
    public function calcularSalario()
    {
        return $this->ValorHora * $this->horas;
    }
}

$funcionarioFixo = new FuncionarioFixo('Lucas', 5000);
echo '<br>Nome: ' . $funcionarioFixo->getNome() . 
     '<br>Salário: ' . $funcionarioFixo->calcularSalario() . '<br><br>';

$funcionarioHorista = new FuncionarioHorista('José', 90, 20);
echo '<br>Nome: ' . $funcionarioHorista->getNome() . 
     '<br>Salário: ' . $funcionarioHorista->calcularSalario() . '<br><br>';






?>
<?php

Class Funcionarios{
    private string $nome;
    private float $salario;

    public function __construct($nome, $valor = 1000){
        $this->nome = $nome;
        $this->salario = $valor;
    }
    public function aumentarSalario($percentual){
        if ($percentual > 0 && $percentual <= 10){
            echo '<br>Aumento: R$' .  (($percentual/100) * $this->salario) .'<br>';
            $this->salario += (($percentual/100) * $this->salario);

        }else{
            echo '<br>Este percentual está fora do intervalo permitido<br>Intervalo: 0% a 10%';
        }
    }
    public function exibirSalario(){
        echo '<br><br>Nome: ' . $this->nome . '<br>Salário: ' . $this->salario;
    }
}

$funcionario = new Funcionarios('Lucas', 3000);
$funcionario->exibirSalario();
$funcionario-> aumentarSalario(10);
$funcionario-> exibirSalario();


?>
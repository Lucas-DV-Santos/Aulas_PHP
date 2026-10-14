<?php

Class ContaBancaria{
    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function exibirTitular(){
        echo 'Nome: ' . $this->titular .'<br>';
    }

    public function alteraTitular($novoNome){
        $this->titular = $novoNome;
    }

    public function exibirSaldo(){
        echo 'Saldo Atual: '. $this->saldo .'<br>';
    }
    public function depositarSaldo($valor){
        $this->saldo += $valor;
        echo 'Valor depositado: R$' . $valor .'<br>';
    }

    public function sacarSaldo($valor){
        if($valor > $this->saldo){
            echo 'Não pode sacar este valor ||| SALDO INSUFICIENTE<br>';
    }else{ 
        $this->saldo -= $valor;
        echo 'Sacando...<br>Valor Sacado: '. $valor .'<br>';
    }
}
}

$conta = new ContaBancaria('Lucas', 6500);

$conta->exibirTitular();
$conta->alteraTitular('Samuel');
$conta->exibirTitular();
$conta->exibirSaldo();
$conta->sacarSaldo(7000);
$conta->depositarSaldo(9000);
$conta->exibirSaldo();
$conta->sacarSaldo(7000);
$conta->exibirSaldo();




?>
<?php

Class ContaBancaria{
    public string $titular;
    public float $saldo;


    public function __construct(string $titular, $saldo){
        $this->titular = $titular;  
        $this->saldo = $saldo;
    }

    public function depositar($valorDepositar){
        $this->saldo += $valorDepositar;
        echo 'Depositando...<br>';
        echo 'Valor depositado: R$' . $valorDepositar . '<br>';
    }

    public function sacar($valorSacar){
        if($this->saldo < $valorSacar ){
            echo 'Você não pode sacar este valor ||| Valor da tentativa: R$' . $valorSacar . ' ||| SALDO INSUFICIENTE' . '<br>';
    }else{
        $this->saldo -= $valorSacar;
        echo 'Sacando...<br>';
        echo 'Valor sacado: ' . $valorSacar . '<br>';
    }
    }
    public function exibirSaldo(){
        echo '<h4>';
        echo 'Titular: ' . $this -> titular . '<br>';
        echo 'Saldo: R$' . $this -> saldo . '<br>';
        echo '</h4>';
    }
}

$conta = new ContaBancaria('Lucas', 600);
$conta -> exibirSaldo();
$conta -> depositar(500);
$conta -> exibirSaldo();
$conta->  sacar(1700);
$conta->  sacar(200);
$conta->  exibirSaldo();
?>
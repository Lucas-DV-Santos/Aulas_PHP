<?php

class ContaBancaria{
    protected string $titular;
    protected    int $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function Depositar($valor){
        $this->saldo += $valor;
        echo '<br>Depositando...<br>';
        echo 'Valor depositado: ' . $valor .'<br>';
    }

    public function Sacar($valor){
        $this->saldo -= $valor;
        echo 'Sacando...<br>';
        echo 'Valor Sacado: ' . $valor .'<br>';
    }

    public function GetSaldo(){
        return $this->saldo;
    }
}





?>
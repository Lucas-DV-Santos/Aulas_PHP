<?php

class ContaBancaria{
    public string $titular;
    public int $numero;
    public float $saldo;
    public string $tipo;

    public function depositar($valorD){
        $this->saldo = $this -> saldo + $valorD;
        echo '<br>Total depositado: R$' . $valorD;
        echo '<br>Valor total: R$' . $this -> saldo;
    }

    public function sacar($valorS){
        if($this -> saldo <= 0 || $this -> saldo < $valorS){
            echo '<br>Você não possui dinheiro dinheiro o suficiente para sacar esse valor';
        }
        
        else{
            $this->saldo = $this -> saldo - $valorS;
            echo '<br>Total Sacado: R$' . $valorS;
            echo '<br>Valor total: R$' . $this -> saldo;
    }
}

    public function consultarSaldo(){
        echo '<br><br>Valor total na conta: R$' . $this -> saldo;
    }

}


$conta = new ContaBancaria();

$conta->titular = 'Lucas';
$conta->numero = 5;
$conta->saldo = 5000;
$conta->tipo = 'Poupança';

$conta-> depositar(560);
$conta->consultarSaldo();
$conta-> sacar(9999);
$conta->sacar(500);
$conta->sacar(5060);

?>
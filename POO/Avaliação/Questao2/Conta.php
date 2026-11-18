<?php


Class Conta{

    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo)
    {
        $this->titular=$titular;
        $this->saldo=$saldo;
    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "<br>Valor depositado: " . $valor;
    }

    public function sacar($valor){  
        if($this->saldo > $valor && $valor >= 0){
            $this->saldo = $this->saldo - $valor;
            echo "<br>Valor Sacado: " . $valor;
        }else{
            echo "<br>Impossível Sacar este Valor";
        }
    }

    public function getSaldo(){
        return $this->saldo;
    }
}

$conta1 = new Conta('Lucas', 500);
echo '<br>Saldo Atual: ' . $conta1->getSaldo();
$conta1->depositar(200);
echo '<br>Saldo Atual: ' . $conta1->getSaldo();
$conta1->sacar(2500);
$conta1->sacar(100);
echo '<br>Saldo Atual: ' . $conta1->getSaldo();





?>
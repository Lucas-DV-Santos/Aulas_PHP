<?php
require_once 'contaBancaria.php';

class contaPoupanca extends ContaBancaria{
    private string $Objetivo;

    public function __construct($titular, $saldo, $Objetivo) {
        parent::__construct($titular, $saldo);
        $this->Objetivo = $Objetivo;
    }

    public function MostrarObjetivo(){
        echo 'Titular: ' . $this->titular .'<br>'
        . 'Saldo: R$' . $this->saldo . '<br>' . 
            'Objetivo da conta: ' . $this->Objetivo;
    }
}

?>
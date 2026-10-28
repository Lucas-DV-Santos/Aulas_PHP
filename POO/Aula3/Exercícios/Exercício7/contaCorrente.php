<?php
require_once 'contaBancaria.php';
class ContaCorrente extends ContaBancaria{
    private int $numeroCartao;

    public function __construct($titular, $saldo, $numeroCartao) {
        parent::__construct($titular, $saldo);
        $this->numeroCartao = $numeroCartao;
    }

    public function MostrarCartao(){
        echo 'Titular: ' . $this->titular .'<br>'
        . 'Saldo: R$' . $this->saldo . '<br>' .     
            'Número do Cartão: ' . $this->numeroCartao;
    }
}

?>
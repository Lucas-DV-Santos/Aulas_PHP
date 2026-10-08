<?php

class Pedido{
    //Atributos
    public int $numero;
    public string $cliente;
    public float $valor;
    public string $status;

    // métodos
    public function adicionarItem($valor){
        $this->valor += $valor;
        echo "O novo valor é: " . $this->valor . "<br>";
    }

    public function cancelar(){
        $this->status = "Cancelado";
        echo "O status foi alterado para Cancelado";
    }

    public function finalizar(){
        $this->status = "Finalizado";
        echo "O status foi alterado para Finalizado";

    }

    public function exibirResumo(){
        echo "<br> Resumo: <br>";
        echo "Numero: " . $this->numero . "<br>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Valor: " . $this->valor . "<br>";
        echo "Status: " . $this->status . "<br>";
    }


}

$pedido1 = new Pedido();

$pedido1->numero = 01;
$pedido1->cliente = 'Daniel';
$pedido1->valor = 0;
$pedido1->status = 'Aguardando';


$pedido1->adicionarItem(25);
$pedido1->finalizar();
$pedido1->exibirResumo();
$pedido1->adicionarItem(23232);
$pedido1->exibirResumo();



?>
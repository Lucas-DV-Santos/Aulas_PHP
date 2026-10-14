<?php

Class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;
    
    function __construct($nome,$preco,$estoque){
        $this->nome=$nome;
        $this->preco=$preco;
        $this->estoque=$estoque;
    }

    function vender($quantidade){
        if($quantidade > $this->estoque){
            echo '<br>Quantidade insuficiente no estoque<br>';
        }else{
            echo '<br>Valor total da venda: ' . $quantidade * ($this->preco) . '<br>';
            echo 'Quantidade total vendida: ' . $quantidade . '<br>'; 
            $this -> estoque -= $quantidade;
            echo 'Venda concluida...<br> Estoque atual: ' . $this->estoque .'<br> ';
            
        }
    }
    function reajustarPreco($percentual){
        $this->preco = ($this->preco - ($percentual/100) * $this->preco);
        echo '<br>Reajuste concluido...';
        echo '<br>Valor do reajuste: ' . (($percentual/100) * $this->preco) . '<br>';
    }

    function exibir(){
        echo $this->nome . ' - ' . 'R$' . $this->preco . ' | Estoque:' . $this->estoque;
    }
}


$prod = new Produto('Computador', 2500, 30);
$prod->exibir();
$prod->reajustarPreco(10);
$prod->exibir();
$prod->vender(10);
$prod->exibir();

?>
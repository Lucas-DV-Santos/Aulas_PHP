<?php
require_once 'publicacao.php';
class revista extends Publicacao{
    private string $edicao;

    public function __construct($titulo, $AnoDePublicacao, $edicao){
        parent::__construct($titulo, $AnoDePublicacao);
        $this->edicao = $edicao;
    }

    public function mostrarRevista(){
        echo'Título: '.  $this->getTitulo() .'<br>';
        echo'Ano de publicação: ' . $this->getAnoDePublicacao() .'<br>';
        echo 'Edição: '. $this->edicao .'<br>';
    }

}

?>
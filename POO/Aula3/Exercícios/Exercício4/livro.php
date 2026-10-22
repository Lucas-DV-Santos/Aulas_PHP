<?php
require_once 'publicacao.php';
class Livro extends Publicacao{
    private string $autor;

    public function __construct($titulo, $AnoDePublicacao, $autor){
        parent::__construct($titulo, $AnoDePublicacao);
        $this->autor = $autor;
    }

    public function mostrarLivros(){
        echo'Título: '.  $this->getTitulo() .'<br>';
        echo'Ano de publicação: ' . $this->getAnoDePublicacao() .'<br>';
        echo 'Autor: '. $this->autor .'<br>';
    }

}

?>
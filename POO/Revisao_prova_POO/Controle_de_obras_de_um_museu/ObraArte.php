<?php

Class ObraArte {
   private string $titulo;
   private string $artista;

    Public function __construct(string $titulo, string $artista){
        $this->titulo = $titulo;
        $this->artista = $artista;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getArtista(){
        return $this->artista;
    }

}

Class Pintura extends ObraArte {

    private string $tecnica;

    public function __construct(string $titulo, string $artista ,string $tecnica){
        parent::__construct($titulo, $artista);
        $this->tecnica = $tecnica;
    }

    public function getDados(){
        return parent::getTitulo()
        . parent::getArtista()
        . $this->tecnica;
    }

}


Class Escultura extends ObraArte {

    private string $material;

    public function __construct(string $titulo, string $artista ,string $material){
        parent::__construct($titulo, $artista);
        $this->material = $material;
    }

    public function getDados(){
        return parent::getTitulo()
        . parent::getArtista()
        . $this->material;
    }

}

$obraGenerica = new ObraArte("Abaporu", "Tarsila do Amaral");
echo "Obra Genérica: " . $obraGenerica->getTitulo() . " | Artista: " . $obraGenerica->getArtista() . "<br>";


$pintura1 = new Pintura("Mona Lisa", "Leonardo da Vinci", "Óleo sobre madeira");
$pintura2 = new Pintura("A Noite Estrelada", "Vincent van Gogh", "Óleo sobre tela");

echo "Pintura 1: " . $pintura1->getDados() . "<br>";
echo "Pintura 2: " . $pintura2->getDados() . "<br>";


$escultura1 = new Escultura("Davi", "Michelangelo", "Mármore");
$escultura2 = new Escultura("O Pensador", "Auguste Rodin", "Bronze");

echo "Escultura 1: " . $escultura1->getDados() . "<br>";
echo "Escultura 2: " . $escultura2->getDados() . "<br>";

?>
<?php

class Animal{
    public function emitirSom(){
        echo "Som desconhecido";
    }
}


Class Gato extends Animal{
    public function emitirSom(){
        echo "Miau";
    }
}

Class Cachorro extends Animal{
    public function emitirSom(){
        echo "<br>AuAu";
    }
}

$gato = new Gato();
$gato->emitirSom();

$gato = new Cachorro();
$gato->emitirSom();

?>
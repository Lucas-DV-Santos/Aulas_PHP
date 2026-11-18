<?php

Class Instrumento{

    public function tocar(){
        return "Emitindo som...";
    }
}

Class Violao extends Instrumento{   

    public function tocar(){
        return "O violão está tocando acordes";
    }

}

Class Piano extends Instrumento{


    public function tocar(){
        return "O piano está tocando uma melodia";
    }

}

Class Bateria extends Instrumento{


    public function tocar(){
        return "A bateria está marcando o ritmo";
    }

}

$violao = new Violao();
$piano = new Piano();
$bateria = new Bateria();

$instrumentos = [$violao, $piano, $bateria];

foreach($instrumentos as $instrumento){
    echo $instrumento->tocar() . "<br>";
}



?>
<?php

Class Dispositivo{
    public string $marca;
    public string $modelo;

    public function __construct(string $marca, string $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibir(){
        echo "<br>Marca: " . $this->marca ."<br>Modelo: ". $this->modelo;
    }

}

Class LampadaInteligente extends Dispositivo{
    public string $cor;

    public function __construct(string $marca, string $modelo, string $cor){
        parent::__construct($marca, $modelo);    
        $this->cor = $cor;   
    }

    public function exibir(){
        parent::exibir();
        echo "<br>Cor configurada: {$this->cor}";
    }
}

Class ArCondicionado extends Dispositivo{
    public int $temperatura;

    public function __construct(string $marca, string $modelo, int $temperatura){
        parent::__construct($marca, $modelo);    
        $this->temperatura = $temperatura;   
    }

    public function exibir(){
        parent::exibir();
        echo "<br>Temperatura configurada: {$this->temperatura}°C";
    }
}


$lampada = new LampadaInteligente("Philips", "Hue White and Color", "Azul");
$arCondicionado = new ArCondicionado("LG", "Dual Inverter Voice", 21.5);

$lampada->exibir();
$arCondicionado->exibir();


?>
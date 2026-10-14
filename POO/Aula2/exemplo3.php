<?php


Class Triangulo{
    public float $base;
    public float $altura;
    public float $area;

    public function __construct($base,$altura) {
        $this->base = $base;
        $this->altura = $altura;
        $this->area = $this -> calcularArea();
    }

    public function calcularArea(){
        return ($this->base * $this->altura) / 2;
    }

}

$triangulo = new Triangulo(10, 20);

echo '<pre>';
print_r($triangulo);
echo '</pre>';

?>
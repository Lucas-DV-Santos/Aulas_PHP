<?php

abstract Class Pagamento{

    private float $valor;

    public function __construct($valor)
    {
       $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }

    abstract public function calcularValor();
}

Class Pix extends Pagamento{

    public function __construct($valor)
    {
        parent::__construct($valor);
    }

    public function calcularValor()
    {
        return $this->getValor() * 0.90;
    }
}

Class Cartao extends Pagamento{

    public function __construct($valor)
    {
        parent::__construct($valor);
    }

    public function calcularValor()
    {
        return $this->getValor() * 1.05;
    }
}

Class Boleto extends Pagamento{

    public function __construct($valor)
    {
        parent::__construct($valor);
    }

    public function calcularValor()
    {
        return $this->getValor();
    }
}



?>
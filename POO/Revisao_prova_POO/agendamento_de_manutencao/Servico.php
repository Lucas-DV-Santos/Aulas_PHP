<?php

abstract class Servico {
    private int $quantidade;

    public function __construct(int $quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }

    abstract public function calcularTempo(): int;
}

class Preventiva extends Servico {
    public function calcularTempo(): int {
        return $this->getQuantidade() * 2;
    }
}

class Corretiva extends Servico {
    public function calcularTempo(): int {
        return $this->getQuantidade() * 4;
    }
}

class Instalacao extends Servico {
    public function calcularTempo(): int {
        return ($this->getQuantidade() * 3) + 1;
    }
}
?>
    
<?php

Class Livro{

    public string $titulo;
    public string $autor;
    public int $paginas;

    public function __construct($titulo, $autor, $paginas){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }

    public function ExibirInformacoes(){
        echo "<br>Titulo: " . $this->titulo . '<br>'
                                . "<br>Autor: " . $this->autor . '<br>'
                                . "<br>Páginas: " . $this->paginas . '<br>';
    }
}

$livro1 = new Livro('1984', 'George Orweal', 240);
$livro1->ExibirInformacoes();


$livro2 = new Livro('Admirável Mundo Novo', 'Adoux Huxlei', 300);
$livro2->ExibirInformacoes();


?>
<?php

Class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $data_publicacao;

    public function __construct($titulo, $autor, $paginas, $data_publicacao = 'Desconhecido'){
        $this->titulo = $titulo;
        $this->autor = $autor;  
        $this->paginas = $paginas;
        $this->data_publicacao = $data_publicacao;
    }

    public function exibir(){
        echo '<h4>' . 'Título: ' . $this->titulo . ', Autor: ' . $this->autor . ', Páginas: ' . $this->paginas . '. Publicado em: ' . $this->data_publicacao . '</h4>'; 
    }
}

$livro1 = new Livro('1984', 'George Orweal', 255, 177);
$livro1 -> exibir();


?>
<?php

require_once 'livro.php';
require_once 'revista.php';

$livro1 = new livro('1984', 1949, 'George Orweal');
$livro1-> mostrarLivros(); 
echo'<br>';
$revista= new revista('Natureza', 2025, '5');
$revista->mostrarRevista();


?>
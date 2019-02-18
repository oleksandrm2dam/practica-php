<?php

$pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
$postsPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postsPorPagina - $postsPorPagina) : 0;

$totalArticulos = 20; // Esto se saca por mysql

$numeroPaginas = ceil($totalArticulos / $postsPorPagina);
require 'index.view.php';

?>
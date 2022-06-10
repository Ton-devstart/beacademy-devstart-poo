<?php

include 'Produto.php';
include 'Categoria.php';
include 'Marcas.php';
include 'Genero.php';


$c1 = new Categoria('roupas', 'roupas masculinas');

$c1 = new Categoria('roupas de banho', 'tolhas de rosto');

$p1 = new Produto('tenis', 299);

$p2 = new Produto('saia jeans', 200);

$p3 = new Produto('cueca azul', 25.26);

$m1 = new Marcas('adidas, nike, puma');

$g1 = new Genero('masculino, feminino, menino, menina');




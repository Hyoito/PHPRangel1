<?php

require "Classes/Categorias.php";
require "Classes/Produto.php";

$vestuario = new Categorias();
$vestuario->setId(823);
$vestuario->setNome("Vestuario");

$camiseta = new Produto("Ramones", 89.00);
$camiseta->setCategorias($vestuario);

print_r($camiseta->getNome());
print_r($camiseta->getValor());
print_r($camiseta->getCategorias());

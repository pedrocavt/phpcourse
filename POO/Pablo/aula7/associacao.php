<?php 

require_once 'classes/Fabricante.php';
require_once 'classes/Produto.php';

$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Fabrica', 'Rua tal', '93.23239.32');

$p1->setFabricante($f1);


print("O fabricante do produto: {$p1->getDescricao()} é {$p1->getFabricante()->getNome()}");

// echo "<pre>";
// var_dump($p1);
// echo "</pre>";

// echo "<pre>";
// var_dump($f1);
// echo "</pre>";




?>
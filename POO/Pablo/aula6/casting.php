<?php 

$produto = new StdClass;

$produto->descricao = "Chocolate";
$produto->estoque = 100;
$produto->preco = 5;

$vetor1 = (array) $produto;

$vetor2 = [
            "descricao" => "Café",
            "estoque" => 100,
            "preco" => 3
        ];



$produto2 = (object) $vetor2;

echo "<pre>";
var_dump($vetor1);
echo "<pre>";

echo "<pre>";
var_dump($produto2);
echo "<pre>";


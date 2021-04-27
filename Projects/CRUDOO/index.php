<?php
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(10);


$produtoDao = new \App\Model\ProdutoDao();

$produtoDao->delete($produto->getId());
$produtoDao->read();

foreach($produtoDao->read() as $produto){
    echo $produto['nome']. "<br>" . $produto['descricao'] . "<hr>";
}
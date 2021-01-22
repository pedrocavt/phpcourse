<?php

$pdo = new PDO("mysql:host=localhost;dbname=chartjs;port=3306;charset=utf8", "root", "");

$sql = "SELECT vendedores.nome, vendas.vendas FROM vendas JOIN vendedores ON vendedores.id = vendas.id_vendedores";

$stmt = $pdo->prepare($sql);

$stmt->execute();

while($results = $stmt->fetch(PDO::FETCH_ASSOC)){

    $result[] = $results;   
}

echo json_encode($result);
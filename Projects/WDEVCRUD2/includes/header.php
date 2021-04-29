<?php
use \App\Session\Login;

$usuarioLogado = Login::getUsuarioLogado();

$usuario = $usuarioLogado ? 
                            $usuarioLogado['nome'] . " <a href='logout.php' class='text-light font-weight-bold ml-2'>Sair</a>" :
                            "Visitante <a href='logout.php' class='text-light font-weight-bold nl-2'>Entrar</a>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>WDEV Vagas</title>
</head>
<body class="bg-dark text-light">

    <div class="container">
        
        <div class="jumbotron bg-danger p-4">
            <h1>WDEV Vagas</h1>
            <p>Exemplo de CRUD com PHO Orientado a Objetos.</p>
            <hr class="border-light">
           <?= $usuario ?>
        </div>


<?php
    header('Content-Type: aplication/json');

    $pdo = new PDO('mysql:host=localhost;
                    dbname=bd-comments;',
                    'root', 
                    '');

    $stmt = $pdo->prepare('SELECT * FROM comments');
    $stmt->execute();

    if($stmt->rowCount() >= 1){
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }else{
        echo json_enconde("Nenhum comentario encontrado");
    }
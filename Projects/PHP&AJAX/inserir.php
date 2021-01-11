<?php
    header('Content-Type: aplication/json');

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $pdo = new PDO('mysql:host=localhost;
                    dbname=bd-comments;',
                    'root', 
                    '');

    $stmt = $pdo->prepare('INSERT INTO comments (name, comment) VALUES (:na, :co)');
    $stmt->bindValue(':na', $name);
    $stmt->bindValue(':co', $comment);
    $stmt->execute();

    if($stmt->rowCount() >= 1){
        echo json_encode("Comentário salvo com sucesso");
    }else{
        echo json_enconde("Falhou ao salvar o comentário");
    }
<?php

    $pessoa = [
        'nome' => 'Pedro',
        'idade' => 25,
        'profissao' => 'Desenvolvedor'
    ];

    $nome = $pessoa['nome'];

    if($pessoa['idade'] >= 18){
        echo "$nome é maior de idade";
    }

?>
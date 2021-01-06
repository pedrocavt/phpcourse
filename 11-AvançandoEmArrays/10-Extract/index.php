<?php

    $arr = [
        "cor" => "vermelho",
        "forma" => "quadrado"
    ];

    extract($arr); //transforma as chaves em variáveis

    echo "$cor <br>";
    echo "$forma <br>";

?>
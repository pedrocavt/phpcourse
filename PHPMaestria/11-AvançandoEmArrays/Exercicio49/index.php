<?php

    $nome = "porta";
    $cor = "marrom";
    $formato = "retangular";

    $objeto = compact("nome", "cor", "formato");

    print_r($objeto);
    echo "<br>";
    foreach($objeto as $a => $value){
        echo "$a: $value <br>";
    }

?>
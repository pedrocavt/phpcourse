<?php

    $pessoa = ["Pedro", 25, "Programador", "Castanho"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $olhos) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$olhos <br>";


?>
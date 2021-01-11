<?php

    $marca = "BMW";
    $cor = "Branca";
    $tetoSolar = true;

    $carro = compact("marca", "cor", "tetoSolar"); //transforma as variaveis em um array associativo;

    print_r($carro);


?>
<?php

    $cincodias = strtotime("5 days");

    echo $cincodias . "<br>";

    //soma a data atual mais 5 dias
    $dataAtualMias5 = date("d/m/y", $cincodias); 

    echo $dataAtualMias5 . "<br>";

    $doisMeses = strtotime("2 months");

    //soma a data atual mais 2 meses
    $dataAtualMais2Meses = date('d/m/y', $doisMeses );
    echo $dataAtualMais2Meses;

?>
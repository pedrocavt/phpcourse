<?php
    //transforma em timestamp
    $dataNasc = mktime(02,12,33,02,05,1995); 

    echo $dataNasc . "<br>";
    //formata o timestamp
    echo $dataNascFormatada = date('d/m/y', $dataNasc);
?>
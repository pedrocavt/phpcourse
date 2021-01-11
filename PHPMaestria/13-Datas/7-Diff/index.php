<?php

    $dataA = new DateTime();
    $dataB = new DateTime();


    $dataB->setDate(2001, 10, 15);

    print_r($dataA);
    echo "<br>";

    print_r($dataB);
    echo "<br>";

    //mostra a diferença das datas
    $diferenca = $dataA->diff($dataB); 

    echo "<br>";
    
    print_r($diferenca);
    echo "<br>";

    //mostra a diferença em dias
    echo $diferenca->format("%a days");

    echo "<br>";
    


?>
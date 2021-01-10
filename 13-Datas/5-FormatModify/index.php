<?php

    $data = new DateTime();

    //formata a data;
    echo $data->format('d/m/y') . "<br>";

    //data mais 5 dias
    $data->modify('+5 days');

    echo $data->format('d/m/y');
    

?>
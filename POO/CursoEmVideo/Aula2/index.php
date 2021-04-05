<?php 
    require_once 'Caneta.php';

    $ci = new Caneta;
    $ci->cor = "Preto";
    $ci->ponta = "0.5";
    $ci->destampar();

    $ci->rabiscar();

    // print_r($ci);


?>
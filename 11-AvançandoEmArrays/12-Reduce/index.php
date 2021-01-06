<?php

    $arr = [1,2,3,4,5,6,7,8,9];

    function soma($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma"); //pega todos os elementos do array e soma entre si dentro da função;
    echo $resultado . "<br>";

?>
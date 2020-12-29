<?php

    $a = true;

    if(is_bool($a)){
        echo "É booleano <br>";
    }

    if(is_bool(false)){
        echo "É booleano 2 <br>";
    }

    if(0 == false){
        echo "0 é considerado falso!";
    }

?>
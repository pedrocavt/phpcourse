<?php

    $a = 5;
    $msg = "É maior que 100 <br>";
    $msg2 = "Não é maior que 100<br>";


    if(is_int($a)){
        echo "É um numero<br>";
        $b = 2 * $a;

        if($b > 100){
            echo $b;
            echo $msg;
        }else{
            echo $b;
            echo $msg2;
        }
    }else{
        echo "Não é um numero<br>";
    }
?>
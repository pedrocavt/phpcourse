<?php

    if(is_int(5)){//true
        echo "É inteiro";
    }

    if(is_int("5")){//false
        echo "É inteiro";
    }
    echo"<br>";
    $a = 10;
    if(is_int($a)){//true
        echo "É inteiro 3";
    }

?>
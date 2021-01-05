<?php

    $str = "O rato roeu a roupa do rei de Roma";
    $c = 0;
    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == "a"){
            $c++;
        }
    }

    echo "Há $c letras 'a'";
?>
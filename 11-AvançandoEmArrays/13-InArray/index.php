<?php

    $arr = range(1,10);

    if(in_array(11, $arr)){ //procura se o item 4 esta no array, retorna true or false
        echo "Esta no array";
    }else{
        echo "Não esta no array";
    }

?>
<?php

    $arr = ['Pedro',25,'Sabrinna',18,'Ana',48,28.8,true,false,'Zaruque'];
    $i = 0;

    while($i < count($arr)){

        if(is_string($arr[$i])){
            echo $arr[$i] . "<br>";
        };

        $i++;
    }
?>
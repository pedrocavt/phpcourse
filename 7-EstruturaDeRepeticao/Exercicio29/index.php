<?php

    $arr = [10, 20, 30, 40, 50, 60, 70, 80 , 90, 100];

    $i = 0;

    while($i < count($arr)){

        if($arr[$i] == 30 || $arr[$i] == 40){
            echo "Pulando $arr[$i] <br>";
            $i++;
            continue;
        }

        echo "$arr[$i] <br>";
        $i++;

    }

?>
<?php

    $arr = [];

    for($i = 10; $i <= 20; $i++){
        array_push($arr, $i);
    }

    for($j = 0; $j < count($arr); $j++){
        if($arr[$j] % 2 != 0){
            echo $arr[$j] . "<br>";
        }
    }

?>
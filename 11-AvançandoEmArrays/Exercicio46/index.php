<?php

    $arr = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

    for($i = 0; $i < count($arr); $i++){
        for($ii = 0; $ii < count($arr[$i]); $ii++){
            echo $arr[$i][$ii];
        }
        if($i + 1 < count($arr)){
            echo "<br>";
            echo "Mudando de Array";
            echo "<br>";  
        }
    }

?>
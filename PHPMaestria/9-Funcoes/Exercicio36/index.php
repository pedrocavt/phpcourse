<?php

    function arr($a, $b, $c, $d, $f, $g){
        $arr = [$a, $b, $c, $d, $f, $g];
        $arr2 = [];

        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] > 7){
                array_push($arr2, $arr[$i]);
            }
        }

        return print_r($arr2);
    }

    arr(2,4,15,70,10,8);

?>
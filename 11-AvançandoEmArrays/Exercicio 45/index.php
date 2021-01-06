<?php

    $arr = range(10, 45);

    for($i = 0; $i < count($arr); $i++){

        if(($arr[$i] + 6) > 30){
            echo $arr[$i] + 6 . " O numero é muito alto <br>";
        }else{
            echo $arr[$i] + 6 . "<br>"; 
        }
    }

?>
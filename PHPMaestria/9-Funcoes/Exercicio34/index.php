<?php

    function parOuImpar($a){
        if($a % 2 == 0){
            echo "É par <br>";
        }else{
            echo "É impar <br>";
        }
    }

    parOuImpar(10);
    parOuImpar(13);
?>
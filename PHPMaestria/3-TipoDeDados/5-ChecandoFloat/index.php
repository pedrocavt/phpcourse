<?php 

    if(is_float(1.2)){//true
        echo "é um float <br>";
    }

    if(is_float(12)){//false
        echo "é um float <br>";
    }

    $a = 2.1;
    if(is_float($a)){//true
        echo "é um float 3 <br>";
    }
?>
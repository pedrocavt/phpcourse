<?php

    $arr = range(1,20);

    print_r(array_chunk($arr, 4)); //divide o array em 5 arrays com 4 elementos cada
    echo "<br>";

    print_r(array_chunk($arr, 10));//divide em 2 arrays com 10 elementos cada;
    echo "<br>";

?>
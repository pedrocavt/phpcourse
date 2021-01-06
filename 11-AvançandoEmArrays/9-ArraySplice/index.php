<?php

//resgatar elementos de array
//remover elementos

$arr = range(1,6);

$removidos = array_splice($arr, 1,2); //pega 2 elementos a partir da posição 1

print_r($arr);
echo "<br>";

print_r($removidos);
echo "<br>";

?>
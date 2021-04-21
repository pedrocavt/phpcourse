<?php

echo "<h1>Funções</h1>";


$array = [
    'banana',
    'goiaba',
    'morango'
];

$arrayAssociativo = [
    'nome' => 'Pedro',
    'email' => 'pedrocavt@gmail.com',
    'idade' => 25
];

echo "<h2>Arrays keys</h2>";

echo '<pre>';
print_r(array_keys($arrayAssociativo));
echo '</pre>';

echo "<h2>Arrays values</h2>";

echo '<pre>';
print_r(array_values($arrayAssociativo));
echo '</pre>';

echo "<h2>In Array</h2>";

echo '<pre>';
var_dump(in_array('banana',$array));
echo '</pre>';

echo "<h2>Array Search</h2>";

echo '<pre>';
var_dump(array_search('25',$arrayAssociativo));
echo '</pre>';

echo "<h2>Isset</h2>";

echo '<pre>';
var_dump(isset($arrayAssociativo['nome']));
echo '</pre>';


echo "<h2>Array Key Exists</h2>";

echo '<pre>';
var_dump(array_key_exists('nome',$arrayAssociativo));
echo '</pre>';


echo "<h2>Array Key Fisrt</h2>";

echo '<pre>';
echo (array_key_first($arrayAssociativo));
echo '</pre>';

echo "<h2>Array Key Last</h2>";

echo '<pre>';
echo (array_key_last($arrayAssociativo));
echo '</pre>';

echo "<h2>Array Flip</h2>";

echo '<pre>';
print_r(array_flip($array));
echo '</pre>';

echo "<h2>Implode</h2>";

echo '<pre>';
echo implode(', ', $array);
echo '</pre>';

echo "<h2>Explode</h2>";

echo '<pre>';
print_r(explode(', ', 'banana, laranja, morango'));
echo '</pre>';
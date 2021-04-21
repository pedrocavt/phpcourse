<?php

echo "<h1>Ordenação</h1>";

echo "<h2>Sort</h2>";

$array = [
    'banana',
    'goiaba',
    'morango',
    'abacaxi'
];

echo '<pre>';
print_r($array);
echo '</pre>';

sort($array);

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2>Asort</h2>";

$array = [
    'banana',
    'goiaba',
    'morango',
    'abacaxi'
];

echo '<pre>';
print_r($array);
echo '</pre>';

asort($array);

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2>Ksort</h2>";

$array = [
    'nome' => 'Pedro',
    'email' => 'pedro@',
    'altura' => '1.82',
];

echo '<pre>';
print_r($array);
echo '</pre>';

ksort($array);

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2>Krsort</h2>";

$array = [
    'nome' => 'Pedro',
    'email' => 'pedro@',
    'altura' => '1.82',
];

echo '<pre>';
print_r($array);
echo '</pre>';

krsort($array);

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2>Ursort</h2>";

$array = [
    'pessoas' => [
        [
            'id'    => 1,
            'nome'  => 'Pedro',
            'idade' => 25
        ],
        [
            'id'    => 2,
            'nome'  => 'Vitor',
            'idade' => 24
        ]
    ]
];

echo '<pre>';
print_r($array);
echo '</pre>';

usort($array,function($a,$b){
    //SÃO IGUAIS
    if($a['idade'] == $b['idade']) return 0;

    return $a['idade'] < $b['idade'] ? -1 : 1;
});

echo '<pre>';
print_r($array);
echo '</pre>';


echo "<h2>Natsort</h2>";

$array = [
    '10.0v',
    '1.0v',
    '2.0v'
];

echo '<pre>';
print_r($array);
echo '</pre>';

natsort($array);

echo '<pre>';
print_r($array);
echo '</pre>';
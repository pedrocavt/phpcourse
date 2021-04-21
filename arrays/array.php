<?php


echo "<h2> Adicionando valores na lista ordenada</h2>";

$array = [
    'banana',
    'goiaba',
    'morango'
];

$array[] = 'pera';
$array[0] = 'banana2';

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2> Adicionando valores na lista associativo</h2>";

$array = [
    'nome'=> 'Pedro',
    'email' => 'pedrocavt@gmail.com',
];

$array['instagram'] = 'pedrovitu';
$array['nome'] = 'Vitor';


echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2> Array multidimensional</h2>";

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

echo "<h2> Obtendo valores dos arrays </h2>";

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
print_r($array['pessoas']);
echo '</pre>';


echo '<pre>';
print_r($array['pessoas'][0]);
echo '</pre>';


echo '<pre>';
print_r($array['pessoas'][0]['nome']);
echo '</pre>';


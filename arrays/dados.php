<?php

echo "<h1>Manipulaão de dados</h1>";

echo "<h2>Array Unique</h2>";

$array = [
    10,
    10,
    11,
    12,
    15,
    15
];

echo '<pre>';
print_r(array_unique($array));
echo '</pre>';

echo "<h2>Array Filter</h2>";

$array = [
  'nome' => 'Pedro',
  'email' => 'pedro@',
  'idade' => null,
  'novo' => 0,
  'novo2' => '',
];

echo '<pre>';
print_r(array_filter($array));
echo '</pre>';

$filter = array_filter($array, function($value){
    return !is_null($value);
});

echo '<pre>';
print_r($filter);
echo '</pre>';

echo "<h2>Array Intersect</h2>";

$arrayA = [
    10,
    21,
    0,
    4
];

$arrayB = [
    10,
    21,
    1,
    5
];

echo '<pre>';
print_r(array_intersect($arrayA,$arrayB));
echo '</pre>';

echo "<h2>Array Column</h2>";

$array = [
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
];

echo '<pre>';
print_r(array_column($array,'nome'));
echo '</pre>';

echo "<h2>Array Combine</h2>";

$arrayA = [
    1,
    10,
    22
];

$arrayB = [
    'a',
    'b',
    'c'
];

echo '<pre>';
print_r(array_combine($arrayA,$arrayB));
echo '</pre>';

echo "<h2>Array Merge</h2>";

$arrayA = [
    'Pedro',
    'Vitor',
    'Sabrinna'
];

$arrayB = [
    'Luis',
    'Jonathan',
    'Felipe'
];

echo '<pre>';
print_r(array_merge($arrayA,$arrayB));
echo '</pre>';

echo "<h2>Array Pad</h2>";

$array = [
    'A',
    'B'
];

echo '<pre>';
print_r(array_pad($array,10, 'sem posição'));
echo '</pre>';

echo "<h2>Array Shift</h2>";

$array = [
    'A',
    'B',
    'C'
];

echo '<pre>';
print_r($array);
echo '</pre>';

echo '<pre>';
echo(array_shift($array));
echo '</pre>';

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2>Array Unshift</h2>";

$array = [
    'A',
    'B',
    'C'
];

echo '<pre>';
print_r($array);
echo '</pre>';

array_unshift($array, 'W');

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2>Array Pop</h2>";

$array = [
    'A',
    'B',
    'C'
];

echo '<pre>';
print_r($array);
echo '</pre>';

echo '<pre>';
echo(array_pop($array));
echo '</pre>';

echo '<pre>';
print_r($array);
echo '</pre>';


echo "<h2>Array Unset</h2>";

$array = [
    'A',
    'B',
    'C'
];

echo '<pre>';
print_r($array);
echo '</pre>';

unset($array[1]);

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<h2>Array Map</h2>";

$array = [
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
];

echo '<pre>';
print_r($array);
echo '</pre>';

$map = array_map(function($value){
   $value['nome'] = strtolower($value['nome']);
    return $value;
}, $array);

echo '<pre>';
print_r($map);
echo '</pre>';

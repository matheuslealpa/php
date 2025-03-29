<?php 
// $cores = array('vermelho', 'verde', 'amarelo');
// $cores = ['vermelho', 'verde', 'amarelo'];

// var_dump($cores);
// print($cores[1]);

$carros = ['palio' => ['ano' => 2002,
                        'modelo' => 'fiat',
                        'cor' => 'cinza'],

            'corsa' => ['ano' => 2003,
                        'modelo' => 'GM',
                        'cor' => 'prata']
];

// print $carros['palio']['cor'];

// foreach($carros as $modelo => $informacoes) {
//     print "<b>$modelo</b>" . '<br>';
//     foreach($informacoes as $atributos => $valor) {
//         print "$atributos: $valor <br>";
//     }
// }

// $cores = ['vermelho', 'verde', 'amarelo'];
// $cores[] = 'ciano';
// var_dump($cores);

// array_reverse, array_pop, array_shift, array_unshift, array_merge

$carros = [];
$carros[1001] = 'palio';
$carros[1002] =  'corsa';
$carros[1003] = 'gol';

var_dump($carros); // sort, asort, ksort
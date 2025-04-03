<?php

$produto = new stdClass;

$produto->nome = "Computador";
$produto->estoque = 10;
$produto->preco = 20.5;

echo '<pre>';
var_dump($produto);
echo '</pre>';

$vetor1 = (array) $produto;

echo '<pre>';
var_dump($vetor1);
var_dump($vetor1['nome']);
echo '</pre>';

$vetor2 = ['nome' => 'Café', 'preco' => 10, 'estoque' => 30 ];

echo '<pre>';
var_dump($vetor2);
var_dump((object) $vetor2);
echo '</pre>';
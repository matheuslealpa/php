<?php

$produto = [];
$produto['nome'] ='Notbook';
$produto['preco'] = 20;
$produto['estoque'] = 40;

$objeto = new stdClass;

foreach($produto as $key => $value) {
    $objeto->$key = $value;
}

print_r($objeto);
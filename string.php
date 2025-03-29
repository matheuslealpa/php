<?php

$nome = 'matheus';
$sobrenome = 'leal';

echo "$nome $sobrenome";
print '<br>' . $nome . ' ' . $sobrenome;
print '<br>' . "Exemplo com 'aspas simples'";
print '<br>' . 'Exemplo com "aspas duplas"';
print '<br>' . 'Exemplo com variavel $nome="' . $nome . '"';
print '<br>' . 'Exemplo com escapar \'aspas simples\'';
print '<br>' . "Exemplo com escapar \"aspas duplas\"";

print '<br>' . strtoupper($nome);
print '<br>' . strtolower($nome);
print '<br>' . substr($nome . ' ' . $sobrenome , 8, 4);
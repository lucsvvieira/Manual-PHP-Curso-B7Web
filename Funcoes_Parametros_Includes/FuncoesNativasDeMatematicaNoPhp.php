<?php

// Pegando um número absoluto
$numero = -8.4;

echo abs($numero);

// Pegar o valor de pi
echo pi();

// Arredondar um número para baixo
$numero = 2.7;

echo floor($numero);

// Arredondar um número para cima
$numero = 3.1;

echo ceil($numero);

// Função que arredonda dependendo do valor do proprio número
$numero = 3.1;

echo round($numero);

// Função que gera um número aleatório
$aleatorio = rand(0, 9);

echo $aleatorio;

// Função que pega o maior valor dentro de um array
$lista = [1, 4, 9, 5];

echo max($lista);

// // Função que pega o menor valor dentro de um array
$lista = [1, 4, 9, 5];

echo min($lista);